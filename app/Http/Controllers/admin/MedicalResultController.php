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
            $query = ApplicantMedicalRecord::with('period', 'study_program')
                ->where('tgl_registrasi', '!=', null)
                ->where('rekomendasi', '!=', null);

            if ($period_id) {
                $query->where('period_id', $period_id);
            }
            if ($study_program_id) {
                $query->where('study_program_id', $study_program_id);
            }

            $result = $query->orderBy('nama', 'desc')->get();

            return datatables()->of($result)
                ->addColumn('action', function ($result) {
                    $button = '<a href="' . url('admin/medical-form/edit/' . $result->id) . '" target="_blank" style="margin-right:5px;" class="btn btn-success btn-sm btn-label waves-effect waves-light"><i class="ri-file-list-line label-icon align-middle fs-16 me-2"></i> Periksa</a>';
                    return $button;
                })
                ->addColumn('period_name', function ($result) {
                    return $result->period->name . ' ' . $result->period->year->name;
                })
                ->addColumn('study_program_name', function ($result) {
                    return $result->study_program->name;
                })
                ->editColumn('jenis_kelamin', function ($result) {
                    return $result->jenis_kelamin == 'L' ? '<span class="badge bg-primary"> Laki-laki</span>' : '<span class="badge bg-danger"> Perempuan</span>';
                })
                ->editColumn('tgl_registrasi', function ($result) {
                    return date('d-m-Y', strtotime($result->tgl_registrasi));
                })
                ->addColumn('status', function ($result) {
                    return $result->rekomendasi ? '<span class="badge badge-label bg-success"><i class="mdi mdi-circle-medium"></i> Selesai</span>' : '';
                })
                ->editColumn('tgl_periksa', function ($result) {
                    return date('d-m-Y', strtotime($result->tgl_periksa));
                })
                ->addColumn('umur', function ($result) {
                    return date('d-m-Y', strtotime($result->tanggal_lahir)) . ' (' . hitungUmur($result->tanggal_lahir) . ' Tahun)';
                })
                ->addColumn('dokter_name', function ($result) {
                    return $result->dokter->name;
                })
                ->addColumn('paramedis_1_name', function ($result) {
                    return $result->paramedis_1->name;
                })
                ->editColumn('tinggi_badan', function ($result) {
                    return $result->tinggi_badan . ' cm';
                })
                ->editColumn('berat_badan', function ($result) {
                    return $result->berat_badan . ' kg';
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
                    return $result->dokter_gigi->name;
                })
                ->addColumn('perawat_gigi_name', function ($result) {
                    return $result->perawat_gigi->name;
                })
                ->addColumn('petugas_narkoba_name', function ($result) {
                    return $result->petugas_narkoba->name;
                })
                ->rawColumns([
                    'action' => 'action',
                    'period_name' => 'period_name',
                    'study_program_name' => 'study_program_name',
                    'jenis_kelamin' => 'jenis_kelamin',
                    'status' => 'status',
                    'umur' => 'umur',
                    'dokter_name' => 'dokter_name',
                    'paramedis_1_name' => 'paramedis_1_name',
                    'catatan_keterangan_antropometri' => 'catatan_keterangan_antropometri',
                    'catatan_keterangan_kulit' => 'catatan_keterangan_kulit',
                    'catatan_keterangan_mata' => 'catatan_keterangan_mata',
                    'catatan_keterangan_telinga' => 'catatan_keterangan_telinga',
                    'catatan_keterangan_hidung' => 'catatan_keterangan_hidung',
                    'catatan_keterangan_lidah' => 'catatan_keterangan_lidah',
                    'catatan_keterangan_pharynx' => 'catatan_keterangan_pharynx',
                    'catatan_keterangan_tonsil' => 'catatan_keterangan_tonsil',
                    'catatan_keterangan_thyroid' => 'catatan_keterangan_thyroid',
                    'catatan_keterangan_jantung' => 'catatan_keterangan_jantung',
                    'catatan_keterangan_paru_paru' => 'catatan_keterangan_paru_paru',
                    'catatan_keterangan_abdomen' => 'catatan_keterangan_abdomen',
                    'catatan_keterangan_refleks' => 'catatan_keterangan_refleks',
                    'catatan_keterangan_thorax' => 'catatan_keterangan_thorax',
                    'catatan_keterangan_kemampuan_bicara' => 'catatan_keterangan_kemampuan_bicara',
                    'catatan_keterangan_gigi' => 'catatan_keterangan_gigi',
                    'dokter_gigi_name' => 'dokter_gigi_name',
                    'perawat_gigi_name' => 'perawat_gigi_name',
                    'petugas_narkoba_name' => 'petugas_narkoba_name',
                    'telinga_kiri_kanan' => 'telinga_kiri_kanan',
                    'tekanan_darah' => 'tekanan_darah',
                    ''

                ])
                ->addIndexColumn()
                ->make(true);
        }
    }
}
