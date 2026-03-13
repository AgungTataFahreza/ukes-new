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
     * Mengambil daftar tanggal untuk Dropdown Dinamis (Registrasi & Periksa)
     */
    public function getDates(Request $request)
    {
        $period_id = $request->period_id;

        // 1. Tanggal Registrasi
        $queryReg = ApplicantMedicalRecord::selectRaw('DATE(tgl_registrasi) as tanggal')->whereNotNull('tgl_registrasi');
        if ($period_id) $queryReg->where('period_id', $period_id);
        $tgl_registrasi = $queryReg->groupBy('tanggal')->orderBy('tanggal', 'desc')->pluck('tanggal');

        // 2. Tanggal Pemeriksaan
        $queryPeriksa = ApplicantMedicalRecord::selectRaw('DATE(tgl_periksa) as tanggal')->whereNotNull('tgl_periksa')
            ->where('tempat_periksa', '!=', 'Lainnya');
        if ($period_id) $queryPeriksa->where('period_id', $period_id);
        $tgl_periksa = $queryPeriksa->groupBy('tanggal')->orderBy('tanggal', 'desc')->pluck('tanggal');

        return response()->json([
            'tgl_registrasi' => $tgl_registrasi,
            'tgl_periksa'    => $tgl_periksa
        ]);
    }

    /**
     * Mengambil Data untuk AJAX DataTables Rekapitulasi Utama
     */
    /**
     * Mengambil Data untuk AJAX DataTables Rekapitulasi Utama
     */
    public function show(Request $request)
    {
        // 1. BUAT KERANGKA DASAR (Tampilkan semua prodi dengan nilai awal 0)
        $allProdis = StudyProgram::orderBy('name', 'asc')->get();

        $baseRekap = [];
        foreach ($allProdis as $prodi) {
            $baseRekap[$prodi->name] = [
                'prodi_id'        => $prodi->id,
                'prodi'           => $prodi->name,
                'total_peserta'   => 0,
                'registrasi'      => 0,
                'antropometri'    => 0,
                'fisik1'          => 0,
                'fisik2'          => 0,
                'gigi'            => 0,
                'narkoba'         => 0,
                'periksa_lengkap' => 0,
                'kesimpulan'      => 0,
                'dapat'           => 0,
                'tidak_dapat'     => 0,
                'action'          => '<button type="button" class="btn btn-sm btn-info btn-detail" data-prodi="' . $prodi->name . '" data-prodiid="' . $prodi->id . '"><i class="ri-eye-line"></i> Detail</button>'
            ];
        }

        // 2. QUERY DATABASE DENGAN FILTER YANG SANGAT KETAT
        $query = ApplicantMedicalRecord::with('study_program');

        // Filter Periode
        if ($request->filled('period_id') && $request->period_id !== 'null') {
            $query->where('period_id', $request->period_id);
        }

        // Filter Tempat Periksa (Default: Exclude 'Lainnya')
        $tempat_periksa = $request->tempat_periksa;
        if ($tempat_periksa === 'Lainnya') {
            $query->where('tempat_periksa', 'Lainnya');
        } else {
            $query->where(function ($q) {
                $q->where('tempat_periksa', '!=', 'Lainnya')->orWhereNull('tempat_periksa');
            });
        }

        // Filter Tanggal Registrasi
        $tgl_registrasi = $request->tgl_registrasi;
        if (!empty($tgl_registrasi) && $tgl_registrasi !== 'null' && $tgl_registrasi !== 'undefined') {
            $query->whereDate('tgl_registrasi', $tgl_registrasi);
        }

        // Filter Tanggal Periksa
        $tgl_periksa = $request->tgl_periksa;
        if (!empty($tgl_periksa) && $tgl_periksa !== 'null' && $tgl_periksa !== 'undefined') {
            $query->whereDate('tgl_periksa', $tgl_periksa);
        }

        $records = $query->get();

        // 3. PERHITUNGAN MENGGUNAKAN LARAVEL COLLECTION (Jauh lebih akurat)
        $actualRekaps = $records->groupBy(function ($item) {
            return $item->study_program->name ?? 'Belum Pilih Prodi';
        })->map(function ($group, $prodiName) {

            $prodiId = $group->first()->study_program_id ?? null;

            return [
                'prodi_id'        => $prodiId,
                'prodi'           => $prodiName,
                'total_peserta'   => $group->count(), // Ambil semua baris yang lolos filter database
                'registrasi'      => $group->whereNotNull('tgl_registrasi')->count(),
                'antropometri'    => $group->whereNotNull('tinggi_badan')->count(),
                'fisik1'          => $group->whereNotNull('status_kulit')->count(),
                'fisik2'          => $group->whereNotNull('status_thyroid')->count(),
                'gigi'            => $group->whereNotNull('status_gigi')->count(),
                'narkoba'         => $group->whereNotNull('amp')->count(),
                'periksa_lengkap' => $group->filter(function ($i) {
                    // Cek syarat lengkap
                    return $i->tinggi_badan !== null && $i->status_kulit !== null &&
                        $i->status_thyroid !== null && $i->status_gigi !== null && $i->amp !== null;
                })->count(),
                'kesimpulan'      => $group->whereNotNull('rekomendasi')->count(),
                'dapat'           => $group->where('rekomendasi', 'Dapat')->count(),
                'tidak_dapat'     => $group->where('rekomendasi', 'Tidak Dapat')->count(),
                'action'          => '<button type="button" class="btn btn-sm btn-info btn-detail" data-prodi="' . $prodiName . '" data-prodiid="' . $prodiId . '"><i class="ri-eye-line"></i> Detail</button>'
            ];
        })->toArray();

        // 4. GABUNGKAN DATA AKTUAL KE KERANGKA DASAR
        foreach ($actualRekaps as $prodiName => $data) {
            $baseRekap[$prodiName] = $data;
        }

        return datatables()->of(array_values($baseRekap))
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Mengambil Data untuk Detail Modal
     */
    public function showDetail(Request $request)
    {
        $query = ApplicantMedicalRecord::query();

        // 1. Filter Program Studi spesifik dari tombol Detail
        if ($request->filled('prodi_id') && $request->prodi_id !== 'null') {
            $query->where('study_program_id', $request->prodi_id);
        } else {
            $query->whereNull('study_program_id');
        }

        // 2. Terapkan logika saringan yang SAMA PERSIS dengan tabel utama
        if ($request->filled('period_id') && $request->period_id !== 'null') {
            $query->where('period_id', $request->period_id);
        }

        $tempat_periksa = $request->tempat_periksa;
        if ($tempat_periksa === 'Lainnya') {
            $query->where('tempat_periksa', 'Lainnya');
        } else {
            $query->where(function ($q) {
                $q->where('tempat_periksa', '!=', 'Lainnya')->orWhereNull('tempat_periksa');
            });
        }

        $tgl_registrasi = $request->tgl_registrasi;
        if (!empty($tgl_registrasi) && $tgl_registrasi !== 'null' && $tgl_registrasi !== 'undefined') {
            $query->whereDate('tgl_registrasi', $tgl_registrasi);
        }

        $tgl_periksa = $request->tgl_periksa;
        if (!empty($tgl_periksa) && $tgl_periksa !== 'null' && $tgl_periksa !== 'undefined') {
            $query->whereDate('tgl_periksa', $tgl_periksa);
        }

        $records = $query->get();

        // 3. Custom Sorting (Dapat -> Tidak Dapat -> Kosong) lalu urutkan Abjad
        $sorted = $records->sort(function ($a, $b) {
            $order = ['Dapat' => 1, 'Tidak Dapat' => 2, '' => 3, null => 3];

            $valA = $order[$a->rekomendasi] ?? 3;
            $valB = $order[$b->rekomendasi] ?? 3;

            if ($valA === $valB) {
                return strcmp($a->nama, $b->nama);
            }
            return $valA <=> $valB;
        })->values();

        return datatables()->of($sorted)
            ->addIndexColumn()
            ->addColumn('rekomendasi_badge', function ($row) {
                if ($row->rekomendasi == 'Dapat') return '<span class="badge bg-success">Dapat</span>';
                if ($row->rekomendasi == 'Tidak Dapat') return '<span class="badge bg-danger">Tidak Dapat</span>';
                return '<span class="badge bg-secondary">Belum Kesimpulan</span>';
            })
            ->rawColumns(['rekomendasi_badge'])
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
        // 1. BASE QUERY
        // Hapus whereNotNull('tgl_periksa') agar peserta yang baru registrasi bisa terbaca
        $query = ApplicantMedicalRecord::with('study_program')
            ->where(function ($q) {
                $q->where('tempat_periksa', '!=', 'Lainnya')
                    ->orWhereNull('tempat_periksa');
            });

        // 2. Filter Periode
        if ($request->filled('period_id')) {
            $query->where('period_id', $request->period_id);
        }

        // 3. Filter Tanggal (Cek di tgl_registrasi ATAU tgl_periksa)
        if ($request->filled('tanggal')) {
            $query->where(function ($q) use ($request) {
                $q->whereDate('tgl_registrasi', $request->tanggal)
                    ->orWhereDate('tgl_periksa', $request->tanggal);
            });
        }

        // 4. Mapping nama tahap dari view ke nama kolom asli di database
        $kolomTahap = [
            'registrasi'   => 'tgl_registrasi', // <-- TAMBAHAN KOLOM REGISTRASI
            'antropometri' => 'tinggi_badan',
            'fisik1'       => 'status_kulit',
            'fisik2'       => 'status_thyroid',
            'gigi'         => 'status_gigi',
            'narkoba'      => 'amp',
            'rekomendasi'  => 'rekomendasi',
        ];

        // 5. Filter Tahap "SUDAH" (Where Not Null)
        if ($request->filled('tahap_sudah') && isset($kolomTahap[$request->tahap_sudah])) {
            $query->whereNotNull($kolomTahap[$request->tahap_sudah]);
        }

        // 6. Filter Tahap "BELUM" (Where Null)
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
