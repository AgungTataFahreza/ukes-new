<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplicantMedicalRecord;
use App\Models\Period;
use App\Models\StudyProgram;
use Yajra\DataTables\Facades\DataTables; // Pastikan ini di-import

class ReportController extends Controller
{
    /**
     * Menampilkan View dan Dropdown Filter
     */
    public function index()
    {
        $periods = Period::orderBy('id', 'DESC')->get();

        return view('admin.rekap-pemeriksaan', compact('periods'));
    }

    /**
     * Mengambil Data untuk AJAX DataTables
     */
    /**
     * Mengambil daftar tanggal untuk Dropdown Dinamis
     */
    public function getDates(Request $request)
    {
        $query = ApplicantMedicalRecord::whereNotNull('tgl_periksa');

        // Jika ada periode yang dikirim, filter tanggalnya berdasarkan periode tersebut
        if ($request->filled('period_id')) {
            $query->where('period_id', $request->period_id);
        }

        // Ambil tgl_periksa, kelompokkan (group by) agar unik, dan urutkan dari yang terbaru
        $dates = $query->select('tgl_periksa')
            ->groupBy('tgl_periksa')
            ->orderBy('tgl_periksa', 'desc')
            ->pluck('tgl_periksa');

        return response()->json($dates);
    }

    /**
     * Mengambil Data untuk AJAX DataTables
     */
    public function show(Request $request)
    {
        // 1. BUAT KERANGKA DASAR: Ambil semua nama Prodi, set semua nilainya jadi 0
        $allProdis = StudyProgram::orderBy('name', 'asc')->pluck('name');

        $baseRekap = [];
        foreach ($allProdis as $prodiName) {
            $baseRekap[$prodiName] = [
                'prodi'         => $prodiName,
                'total_peserta' => 0,
                'antropometri'  => 0,
                'fisik1'        => 0,
                'fisik2'        => 0,
                'gigi'          => 0,
                'narkoba'       => 0,
                'dapat'         => 0,
                'tidak_dapat'   => 0,
            ];
        }

        // 2. AMBIL DATA AKTUAL
        // Tambahkan whereNotNull agar hanya menghitung yang tgl_periksa-nya tidak kosong
        $query = ApplicantMedicalRecord::with('study_program')
            ->whereNotNull('tgl_periksa');

        if ($request->filled('period_id')) {
            $query->where('period_id', $request->period_id);
        }

        if ($request->filled('tanggal')) {
            $query->whereDate('tgl_periksa', $request->tanggal);
        }

        $records = $query->get();

        $actualRekaps = $records->groupBy(function ($item) {
            return $item->study_program->name ?? 'Belum Pilih Prodi';
        })->map(function ($group, $prodiName) {
            return [
                'prodi'         => $prodiName,
                'total_peserta' => $group->count(),
                'antropometri'  => $group->whereNotNull('tinggi_badan')->count(),
                'fisik1'        => $group->whereNotNull('status_kulit')->count(),
                'fisik2'        => $group->whereNotNull('status_thyroid')->count(),
                'gigi'          => $group->whereNotNull('status_gigi')->count(),
                'narkoba'       => $group->whereNotNull('amp')->count(),
                'dapat'         => $group->where('rekomendasi', 'Dapat')->count(),
                'tidak_dapat'   => $group->where('rekomendasi', 'Tidak Dapat')->count(),
            ];
        })->toArray(); // Ubah ke array agar mudah digabungkan

        // 3. GABUNGKAN: Timpa kerangka dasar (yang 0) dengan data aktual (jika ada pesertanya)
        foreach ($actualRekaps as $prodiName => $data) {
            $baseRekap[$prodiName] = $data;
            // Catatan: Jika ada peserta 'Belum Pilih Prodi', ia akan otomatis tertambah di sini
        }

        // 4. Reset index array agar bisa dibaca oleh DataTables
        $rekaps = array_values($baseRekap);

        return datatables()->of($rekaps)
            ->addIndexColumn()
            ->make(true);
    }

    // =========================================================================
    // MENU 2: CEK TAHAPAN (SUDAH & BELUM)
    // =========================================================================

    public function indexCekTahapan()
    {
        $periods = Period::orderBy('id', 'DESC')->get();
        return view('admin.cek-tahapan', compact('periods'));
    }

    public function showCekTahapan(Request $request)
    {
        $query = ApplicantMedicalRecord::with('study_program')->whereNotNull('tgl_periksa');

        // 1. Filter Periode & Tanggal
        if ($request->filled('period_id')) {
            $query->where('period_id', $request->period_id);
        }
        if ($request->filled('tanggal')) {
            $query->whereDate('tgl_periksa', $request->tanggal);
        }

        // Mapping nama tahap dari view ke nama kolom asli di database
        $kolomTahap = [
            'antropometri' => 'tinggi_badan',
            'fisik1'       => 'status_kulit',
            'fisik2'       => 'status_thyroid',
            'gigi'         => 'status_gigi',
            'narkoba'      => 'amp',
            'rekomendasi'  => 'rekomendasi',
        ];

        // 2. Filter Tahap "SUDAH" (Where Not Null)
        if ($request->filled('tahap_sudah') && isset($kolomTahap[$request->tahap_sudah])) {
            $query->whereNotNull($kolomTahap[$request->tahap_sudah]);
        }

        // 3. Filter Tahap "BELUM" (Where Null)
        if ($request->filled('tahap_belum') && isset($kolomTahap[$request->tahap_belum])) {
            $query->whereNull($kolomTahap[$request->tahap_belum]);
        }

        return datatables()->of($query)
            ->addIndexColumn()
            ->addColumn('prodi', function ($row) {
                return $row->study_program->name ?? '<span class="text-muted">Belum Pilih Prodi</span>';
            })
            ->rawColumns(['prodi']) // Izinkan render HTML
            ->make(true);
    }
}
