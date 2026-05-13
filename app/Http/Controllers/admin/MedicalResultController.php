<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ApplicantMedicalRecord;
use App\Models\Period;
use App\Models\StudyProgram;
use Illuminate\Http\Request;

class MedicalResultController extends Controller
{
    private $key;
    private $permissions;

    public function __construct()
    {
        $this->key = 'Data Hasil Pemeriksaan';
        $this->middleware(function ($request, $next) {
            $this->permissions = store_permissions();
            return $next($request);
        });
    }

    public function index()
    {
        session()->put('menu', 'medical-result');
        session()->put('title', 'Data Hasil Pemeriksaan');
        session()->put('key', $this->key);
        $data['permissions'] = $this->permissions;
        $data['study_programs'] = StudyProgram::orderBy('name', 'asc')->get();
        $data['periods'] = Period::orderBy('name', 'desc')->get();
        return view('admin.medical-result', $data);
    }

    public function show(Request $request)
    {
        if (request()->ajax()) {

            $period_id = $request->period_id;
            $study_program_id = $request->study_program_id;

            // 1. Tambahkan period.year ke dalam with() untuk mencegah N+1 Query Issue
            $query = ApplicantMedicalRecord::with(['period.year', 'study_program'])
                ->whereNotNull('tgl_registrasi') // Gunakan helper whereNotNull bawaan Laravel
                ->whereNotNull('tgl_periksa');

            if ($period_id) {
                $query->where('period_id', $period_id);
            }
            if ($study_program_id) {
                $query->where('study_program_id', $study_program_id);
            }

            // 2. HAPUS pemanggilan ->get() agar Yajra melakukan paginasi murni di level Database
            // Biarkan DataTables mengatur sorting juga jika diperlukan
            return datatables()->of($query)
                ->addColumn('period_name', function ($result) {
                    // 3. Gunakan nullsafe operator (?->) untuk mencegah error saat data relasi kosong
                    return ($result->period?->name ?? '') . ' ' . ($result->period?->year?->name ?? '');
                })
                ->addColumn('study_program_name', function ($result) {
                    return $result->study_program?->name ?? '-';
                })
                ->editColumn('jenis_kelamin', function ($result) {
                    return $result->jenis_kelamin == 'L' ? '<span class="badge bg-primary"> Laki-laki</span>' : '<span class="badge bg-danger"> Perempuan</span>';
                })
                ->editColumn('tgl_registrasi', function ($result) {
                    return $result->tgl_registrasi ? date('d-m-Y', strtotime($result->tgl_registrasi)) : '-';
                })
                ->addColumn('status', function ($result) {
                    return $result->rekomendasi ? '<span class="badge badge-label bg-success"><i class="mdi mdi-circle-medium"></i> Selesai</span>' : '';
                })
                ->editColumn('tgl_periksa', function ($result) {
                    return $result->tgl_periksa ? date('d-m-Y', strtotime($result->tgl_periksa)) : '-';
                })
                ->addColumn('umur', function ($result) {
                    if (!$result->tanggal_lahir) return '-';
                    // Pastikan fungsi hitungUmur sudah ter-load/terdefinisi dengan benar di server
                    return date('d-m-Y', strtotime($result->tanggal_lahir)) . ' (' . hitungUmur($result->tanggal_lahir) . ' Tahun)';
                })
                ->addColumn('dokter_name', function ($result) {
                    return $result->dokter?->name ?? $result->dokter_id ?? '-';
                })
                ->addColumn('paramedis_1_name', function ($result) {
                    return $result->paramedis_1?->name ?? $result->paramedis_1_id ?? '-';
                })
                ->editColumn('tinggi_badan', function ($result) {
                    return $result->tinggi_badan ? $result->tinggi_badan . ' cm' : '-';
                })
                ->editColumn('berat_badan', function ($result) {
                    return $result->berat_badan ? $result->berat_badan . ' kg' : '-';
                })
                ->addColumn('tekanan_darah', function ($result) {
                    return $result->tekanan_darah_sistolik . '/' . $result->tekanan_darah_diastolik . ' mmHg';
                })
                ->addColumn('catatan_keterangan_antropometri', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_antropometri . '<br>Keterangan : <br>' . $result->keterangan_antropometri;
                })
                ->addColumn('catatan_keterangan_kulit', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_kulit . '<br>Keterangan : <br>' . $result->keterangan_kulit;
                })
                ->addColumn('catatan_keterangan_mata', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_mata . '<br>Keterangan : <br>' . $result->keterangan_mata;
                })
                ->addColumn('telinga_kiri_kanan', function ($result) {
                    return 'Kiri : ' . $result->telinga_kiri . '<br> Kanan : ' . $result->telinga_kanan;
                })
                ->addColumn('catatan_keterangan_telinga', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_telinga . '<br>Keterangan : <br>' . $result->keterangan_telinga;
                })
                ->addColumn('catatan_keterangan_hidung', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_hidung . '<br>Keterangan : <br>' . $result->keterangan_hidung;
                })
                ->addColumn('catatan_keterangan_lidah', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_lidah . '<br>Keterangan : <br>' . $result->keterangan_lidah;
                })
                ->addColumn('catatan_keterangan_pharynx', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_pharynx . '<br>Keterangan : <br>' . $result->keterangan_pharynx;
                })
                ->addColumn('catatan_keterangan_tonsil', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_tonsil . '<br>Keterangan : <br>' . $result->keterangan_tonsil;
                })
                ->addColumn('catatan_keterangan_thyroid', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_thyroid . '<br>Keterangan : <br>' . $result->keterangan_thyroid;
                })
                ->addColumn('catatan_keterangan_jantung', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_jantung . '<br>Keterangan : <br>' . $result->keterangan_jantung;
                })
                ->addColumn('catatan_keterangan_paru_paru', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_paru_paru . '<br>Keterangan : <br>' . $result->keterangan_paru_paru;
                })
                ->addColumn('catatan_keterangan_abdomen', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_abdomen . '<br>Keterangan : <br>' . $result->keterangan_abdomen;
                })
                ->addColumn('catatan_keterangan_refleks', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_refleks . '<br>Keterangan : <br>' . $result->keterangan_refleks;
                })
                ->addColumn('catatan_keterangan_thorax', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_thorax . '<br>Keterangan : <br>' . $result->keterangan_thorax;
                })
                ->addColumn('catatan_keterangan_kemampuan_bicara', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_kemampuan_bicara . '<br>Keterangan : <br>' . $result->keterangan_kemampuan_bicara;
                })
                ->addColumn('catatan_keterangan_gigi', function ($result) {
                    return 'Catatan : <br>' . $result->catatan_gigi . '<br>Keterangan : <br>' . $result->keterangan_gigi;
                })
                ->addColumn('dokter_gigi_name', function ($result) {
                    return $result->dokter_gigi?->name ?? $result->dokter_gigi_id ?? '-';
                })
                ->addColumn('perawat_gigi_name', function ($result) {
                    return $result->perawat_gigi?->name ?? $result->perawat_gigi_id ?? '-';
                })
                ->addColumn('petugas_narkoba_name', function ($result) {
                    return $result->petugas_narkoba?->name ?? $result->petugas_narkoba_id ?? '-';
                })
                ->addColumn('paramedis_2_name', function ($result) {
                    return $result->paramedis_2?->name ?? $result->paramedis_2_id ?? '-';
                })
                ->addColumn('paramedis_3_name', function ($result) {
                    return $result->paramedis_3?->name ?? $result->paramedis_3_id ?? '-';
                })
                // 4. Perbaikan struktur Array rawColumns (Hanya berisi nama kolom yang me-render HTML)
                ->rawColumns([
                    'jenis_kelamin',
                    'status',
                    'catatan_keterangan_antropometri',
                    'catatan_keterangan_kulit',
                    'catatan_keterangan_mata',
                    'telinga_kiri_kanan',
                    'catatan_keterangan_telinga',
                    'catatan_keterangan_hidung',
                    'catatan_keterangan_lidah',
                    'catatan_keterangan_pharynx',
                    'catatan_keterangan_tonsil',
                    'catatan_keterangan_thyroid',
                    'catatan_keterangan_jantung',
                    'catatan_keterangan_paru_paru',
                    'catatan_keterangan_abdomen',
                    'catatan_keterangan_refleks',
                    'catatan_keterangan_thorax',
                    'catatan_keterangan_kemampuan_bicara',
                    'catatan_keterangan_gigi'
                ])
                ->addIndexColumn()
                ->make(true);
        }
    }
}
