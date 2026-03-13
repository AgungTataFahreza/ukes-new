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
    public function show(Request $request)
    {
        // 1. BUAT KERANGKA DASAR
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

        // 2. AMBIL DATA AKTUAL (Hanya Filter Tempat & Periode)
        $query = ApplicantMedicalRecord::with('study_program');

        $tempat_periksa = $request->tempat_periksa;
        if ($tempat_periksa) {
            if ($tempat_periksa === 'Lainnya') {
                $query->where('tempat_periksa', 'Lainnya');
            } else {
                $query->where(function ($q) {
                    $q->where('tempat_periksa', '!=', 'Lainnya')->orWhereNull('tempat_periksa');
                });
            }
        } else {
            $query->where(function ($q) {
                $q->where('tempat_periksa', '!=', 'Lainnya')->orWhereNull('tempat_periksa');
            });
        }

        if ($request->filled('period_id')) {
            $query->where('period_id', $request->period_id);
        }

        // Definisikan variabel untuk dipakai di Grouping (TANPA FILTER DATABASE)
        $tgl_registrasi = $request->tgl_registrasi;
        $tgl_periksa = $request->tgl_periksa;

        $records = $query->get();

        // 3. GROUPING & PERHITUNGAN DINAMIS (Filter Tanggal Bekerja di Sini)
        $actualRekaps = $records->groupBy(function ($item) {
            return $item->study_program->name ?? 'Belum Pilih Prodi';
        })->map(function ($group, $prodiName) use ($tgl_registrasi, $tgl_periksa) {

            $countByDate = function ($items, $column, $dateColumn, $value = null) use ($tgl_registrasi, $tgl_periksa) {
                return $items->filter(function ($item) use ($column, $dateColumn, $tgl_registrasi, $tgl_periksa, $value) {
                    if ($dateColumn == 'tgl_registrasi' && $tgl_registrasi) {
                        $itemDate = $item->tgl_registrasi ? date('Y-m-d', strtotime($item->tgl_registrasi)) : null;
                        if ($itemDate != $tgl_registrasi) return false;
                    }
                    if ($dateColumn == 'tgl_periksa' && $tgl_periksa) {
                        $itemDate = $item->tgl_periksa ? date('Y-m-d', strtotime($item->tgl_periksa)) : null;
                        if ($itemDate != $tgl_periksa) return false;
                    }
                    if ($value !== null) return $item->{$column} === $value;
                    return $item->{$column} !== null;
                })->count();
            };

            // Jika filter tgl_registrasi aktif, hitung yang registrasi di tanggal itu.
            // Jika kosong, hitung seluruh peserta di periode tersebut!
            $totalPeserta = $tgl_registrasi
                ? $group->filter(function ($item) use ($tgl_registrasi) {
                    $tglReg = $item->tgl_registrasi ? date('Y-m-d', strtotime($item->tgl_registrasi)) : null;
                    return $tglReg == $tgl_registrasi;
                })->count()
                : $group->count();

            $periksaLengkapCount = $group->filter(function ($item) use ($tgl_periksa) {
                if ($tgl_periksa) {
                    $itemDate = $item->tgl_periksa ? date('Y-m-d', strtotime($item->tgl_periksa)) : null;
                    if ($itemDate != $tgl_periksa) return false;
                }
                return $item->tinggi_badan !== null && $item->status_kulit !== null &&
                    $item->status_thyroid !== null && $item->status_gigi !== null && $item->amp !== null;
            })->count();

            $prodiId = $group->first()->study_program_id ?? null;

            return [
                'prodi_id'        => $prodiId,
                'prodi'           => $prodiName,
                'total_peserta'   => $totalPeserta,
                'registrasi'      => $countByDate($group, 'tgl_registrasi', 'tgl_registrasi'),
                'antropometri'    => $countByDate($group, 'tinggi_badan', 'tgl_periksa'),
                'fisik1'          => $countByDate($group, 'status_kulit', 'tgl_periksa'),
                'fisik2'          => $countByDate($group, 'status_thyroid', 'tgl_periksa'),
                'gigi'            => $countByDate($group, 'status_gigi', 'tgl_periksa'),
                'narkoba'         => $countByDate($group, 'amp', 'tgl_periksa'),
                'periksa_lengkap' => $periksaLengkapCount,
                'kesimpulan'      => $countByDate($group, 'rekomendasi', 'tgl_periksa'),
                'dapat'           => $countByDate($group, 'rekomendasi', 'tgl_periksa', 'Dapat'),
                'tidak_dapat'     => $countByDate($group, 'rekomendasi', 'tgl_periksa', 'Tidak Dapat'),
                'action'          => '<button type="button" class="btn btn-sm btn-info btn-detail" data-prodi="' . $prodiName . '" data-prodiid="' . $prodiId . '"><i class="ri-eye-line"></i> Detail</button>'
            ];
        })->toArray();

        // 4. GABUNGKAN
        foreach ($actualRekaps as $prodiName => $data) {
            $baseRekap[$prodiName] = $data;
        }

        return datatables()->of(array_values($baseRekap))
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Mengambil Data untuk Detail Modal berdasarkan Filter & Prodi
     */
    public function showDetail(Request $request)
    {
        $query = ApplicantMedicalRecord::query();

        // 1. Filter Prodi (bisa null jika 'Belum Pilih Prodi')
        if ($request->prodi_id) {
            $query->where('study_program_id', $request->prodi_id);
        } else {
            $query->whereNull('study_program_id');
        }

        // 2. Terapkan Filter yang sama seperti di laporan utama
        if ($request->filled('period_id')) $query->where('period_id', $request->period_id);

        $tempat_periksa = $request->tempat_periksa;
        if ($tempat_periksa) {
            if ($tempat_periksa === 'Lainnya') {
                $query->where('tempat_periksa', 'Lainnya');
            } else {
                $query->where(function ($q) {
                    $q->where('tempat_periksa', '!=', 'Lainnya')->orWhereNull('tempat_periksa');
                });
            }
        } else {
            $query->where(function ($q) {
                $q->where('tempat_periksa', '!=', 'Lainnya')->orWhereNull('tempat_periksa');
            });
        }

        $tgl_registrasi = $request->tgl_registrasi;
        $tgl_periksa = $request->tgl_periksa;

        if ($tgl_registrasi || $tgl_periksa) {
            $query->where(function ($q) use ($tgl_registrasi, $tgl_periksa) {
                if ($tgl_registrasi) $q->whereDate('tgl_registrasi', $tgl_registrasi);
                if ($tgl_periksa) $q->orWhereDate('tgl_periksa', $tgl_periksa);
            });
        }

        $records = $query->get();

        // 3. Custom Sorting (Dapat -> Tidak Dapat -> Kosong) lalu Abjad Nama
        $sorted = $records->sort(function ($a, $b) {
            $order = ['Dapat' => 1, 'Tidak Dapat' => 2, '' => 3, null => 3];

            $valA = $order[$a->rekomendasi] ?? 3;
            $valB = $order[$b->rekomendasi] ?? 3;

            if ($valA === $valB) {
                return strcmp($a->nama, $b->nama); // Jika sama, urutkan abjad
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
