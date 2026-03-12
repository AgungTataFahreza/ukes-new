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
        // 1. BUAT KERANGKA DASAR
        $allProdis = StudyProgram::orderBy('name', 'asc')->pluck('name');

        $baseRekap = [];
        foreach ($allProdis as $prodiName) {
            $baseRekap[$prodiName] = [
                'prodi'           => $prodiName,
                'total_peserta'   => 0,
                'registrasi'      => 0,
                'antropometri'    => 0,
                'fisik1'          => 0,
                'fisik2'          => 0,
                'gigi'            => 0,
                'narkoba'         => 0,
                'periksa_lengkap' => 0, // <-- Kolom Baru
                'kesimpulan'      => 0,
                'dapat'           => 0,
                'tidak_dapat'     => 0,
            ];
        }

        // 2. AMBIL DATA AKTUAL
        $query = ApplicantMedicalRecord::with('study_program')
            ->where(function ($q) {
                $q->where('tempat_periksa', '!=', 'Lainnya')
                    ->orWhereNull('tempat_periksa');
            });

        if ($request->filled('period_id')) {
            $query->where('period_id', $request->period_id);
        }

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

            $countByDate = function ($items, $column, $dateColumn, $value = null) use ($tanggal) {
                return $items->filter(function ($item) use ($column, $dateColumn, $tanggal, $value) {
                    if ($tanggal) {
                        $itemDate = $item->{$dateColumn} ? date('Y-m-d', strtotime($item->{$dateColumn})) : null;
                        if ($itemDate != $tanggal) return false;
                    }
                    if ($value !== null) {
                        return $item->{$column} === $value;
                    }
                    return $item->{$column} !== null;
                })->count();
            };

            $totalPeserta = $tanggal
                ? $group->filter(function ($item) use ($tanggal) {
                    $tglReg = $item->tgl_registrasi ? date('Y-m-d', strtotime($item->tgl_registrasi)) : null;
                    return $tglReg == $tanggal;
                })->count()
                : $group->count();

            // LOGIKA UNTUK PERIKSA LENGKAP
            $periksaLengkapCount = $group->filter(function ($item) use ($tanggal) {
                if ($tanggal) {
                    $itemDate = $item->tgl_periksa ? date('Y-m-d', strtotime($item->tgl_periksa)) : null;
                    if ($itemDate != $tanggal) return false;
                }
                // Syarat Lengkap: Kelima tahap ini tidak boleh kosong
                return $item->tinggi_badan !== null &&
                    $item->status_kulit !== null &&
                    $item->status_thyroid !== null &&
                    $item->status_gigi !== null &&
                    $item->amp !== null;
            })->count();

            return [
                'prodi'           => $prodiName,
                'total_peserta'   => $totalPeserta,
                'registrasi'      => $countByDate($group, 'tgl_registrasi', 'tgl_registrasi'),
                'antropometri'    => $countByDate($group, 'tinggi_badan', 'tgl_periksa'),
                'fisik1'          => $countByDate($group, 'status_kulit', 'tgl_periksa'),
                'fisik2'          => $countByDate($group, 'status_thyroid', 'tgl_periksa'),
                'gigi'            => $countByDate($group, 'status_gigi', 'tgl_periksa'),
                'narkoba'         => $countByDate($group, 'amp', 'tgl_periksa'),
                'periksa_lengkap' => $periksaLengkapCount, // <-- Masukkan hasil hitungan ke array
                'kesimpulan'      => $countByDate($group, 'rekomendasi', 'tgl_periksa'),
                'dapat'           => $countByDate($group, 'rekomendasi', 'tgl_periksa', 'Dapat'),
                'tidak_dapat'     => $countByDate($group, 'rekomendasi', 'tgl_periksa', 'Tidak Dapat'),
            ];
        })->toArray();

        // 4. GABUNGKAN
        foreach ($actualRekaps as $prodiName => $data) {
            $baseRekap[$prodiName] = $data;
        }

        // 5. Reset index array
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
