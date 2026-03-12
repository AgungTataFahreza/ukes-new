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
     * Mengambil daftar tanggal untuk Dropdown Dinamis
     */
    public function getDates(Request $request)
    {
        // TAMBAHAN: Filter tempat_periksa != 'Lainnya'
        $query = ApplicantMedicalRecord::whereNotNull('tgl_periksa')
            ->where('tempat_periksa', '!=', 'Lainnya');

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
    /**
     * Mengambil Data untuk AJAX DataTables Rekapitulasi
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
                'registrasi'    => 0, // Kolom Registrasi
                'antropometri'  => 0,
                'fisik1'        => 0,
                'fisik2'        => 0,
                'gigi'          => 0,
                'narkoba'       => 0,
                'kesimpulan'    => 0, // Kolom Kesimpulan
                'dapat'         => 0,
                'tidak_dapat'   => 0,
            ];
        }

        // 2. AMBIL DATA AKTUAL
        $query = ApplicantMedicalRecord::with('study_program')
            ->where(function ($q) {
                // Abaikan peserta luar, tapi ikutkan jika masih kosong (baru mendaftar awal)
                $q->where('tempat_periksa', '!=', 'Lainnya')
                    ->orWhereNull('tempat_periksa');
            });

        // Filter dari dropdown Periode
        if ($request->filled('period_id')) {
            $query->where('period_id', $request->period_id);
        }

        // Filter dari dropdown Tanggal (Ambil yg Registrasi ATAU Periksa di tanggal tersebut)
        $tanggal = $request->tanggal;
        if ($tanggal) {
            $query->where(function ($q) use ($tanggal) {
                $q->whereDate('tgl_registrasi', $tanggal)
                    ->orWhereDate('tgl_periksa', $tanggal);
            });
        }

        $records = $query->get();

        // 3. GROUPING & PERHITUNGAN DINAMIS
        $actualRekaps = $records->groupBy(function ($item) {
            return $item->study_program->name ?? 'Belum Pilih Prodi';
        })->map(function ($group, $prodiName) use ($tanggal) {

            // FUNGSI BANTUAN: Memfilter koleksi berdasarkan tanggal yang relevan (tgl_registrasi / tgl_periksa)
            $countByDate = function ($items, $column, $dateColumn, $value = null) use ($tanggal) {
                return $items->filter(function ($item) use ($column, $dateColumn, $tanggal, $value) {
                    // Cek pencocokan tanggal (jika difilter)
                    if ($tanggal) {
                        $itemDate = $item->{$dateColumn} ? date('Y-m-d', strtotime($item->{$dateColumn})) : null;
                        if ($itemDate != $tanggal) {
                            return false; // Lewati jika beda tanggal
                        }
                    }

                    // Cek jika butuh perbandingan value (contoh: rekomendasi == 'Dapat')
                    if ($value !== null) {
                        return $item->{$column} === $value;
                    }

                    // Cek biasa (asal tidak null)
                    return $item->{$column} !== null;
                })->count();
            };

            // Hitung Total Peserta (semua yang daftar/registrasi di tanggal tersebut)
            $totalPeserta = $tanggal
                ? $group->filter(function ($item) use ($tanggal) {
                    $tglReg = $item->tgl_registrasi ? date('Y-m-d', strtotime($item->tgl_registrasi)) : null;
                    return $tglReg == $tanggal;
                })->count()
                : $group->count();

            return [
                'prodi'         => $prodiName,

                // Murni berdasarkan tgl_registrasi
                'total_peserta' => $totalPeserta,
                'registrasi'    => $countByDate($group, 'tgl_registrasi', 'tgl_registrasi'),

                // Murni berdasarkan tgl_periksa
                'antropometri'  => $countByDate($group, 'tinggi_badan', 'tgl_periksa'),
                'fisik1'        => $countByDate($group, 'status_kulit', 'tgl_periksa'),
                'fisik2'        => $countByDate($group, 'status_thyroid', 'tgl_periksa'),
                'gigi'          => $countByDate($group, 'status_gigi', 'tgl_periksa'),
                'narkoba'       => $countByDate($group, 'amp', 'tgl_periksa'),
                'kesimpulan'    => $countByDate($group, 'rekomendasi', 'tgl_periksa'),
                'dapat'         => $countByDate($group, 'rekomendasi', 'tgl_periksa', 'Dapat'),
                'tidak_dapat'   => $countByDate($group, 'rekomendasi', 'tgl_periksa', 'Tidak Dapat'),
            ];
        })->toArray();

        // 4. GABUNGKAN
        foreach ($actualRekaps as $prodiName => $data) {
            $baseRekap[$prodiName] = $data;
        }

        // 5. Reset index array
        $rekaps = array_values($baseRekap);

        // Kembalikan ke DataTables
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
        // TAMBAHAN: Filter tempat_periksa != 'Lainnya'
        $query = ApplicantMedicalRecord::with('study_program')
            ->whereNotNull('tgl_periksa')
            ->where('tempat_periksa', '!=', 'Lainnya');

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
