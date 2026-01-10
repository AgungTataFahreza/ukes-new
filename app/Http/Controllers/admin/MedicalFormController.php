<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ApplicantMedicalRecord;
use App\Models\Period;
use App\Models\StudyProgram;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MedicalFormController extends Controller
{
    private $key;
    private $permissions;

    public function __construct()
    {
        $this->key = 'Formulir Uji Kesehatan';
        $this->middleware(function ($request, $next) {
            $this->permissions = store_permissions();
            return $next($request);
        });
    }

    public function index()
    {
        session()->put('menu', 'medical-form');
        session()->put('title', 'Formulir Uji Kesehatan');
        session()->put('key', $this->key);
        $data['permissions'] = $this->permissions;
        $data['study_programs'] = StudyProgram::orderBy('name', 'asc')->get();
        $data['periods'] = Period::orderBy('name', 'desc')->get();
        return view('admin.medical-form', $data);
    }

    public function show(Request $request)
    {
        if (request()->ajax()) {

            $period_id = $request->period_id;
            $study_program_id = $request->study_program_id;
            $query = ApplicantMedicalRecord::with('period', 'study_program')->where('tgl_registrasi', '!=', null);

            if ($period_id) {
                $query->where('period_id', $period_id);
            }
            if ($study_program_id) {
                $query->where('study_program_id', $study_program_id);
            }

            $result = $query->orderBy('nama', 'desc')->get();

            return datatables()->of($result)
                ->addColumn('action', function ($result) {
                    $button = '';
                    if (can_access($this->permissions, $this->key, 'edit')) {
                        $button .= '<a href="' . url('admin/medical-form/edit/' . $result->id) . '" target="_blank" style="margin-right:5px;" class="btn btn-success btn-sm btn-label waves-effect waves-light"><i class="ri-file-list-line label-icon align-middle fs-16 me-2"></i> Periksa</a>';
                    }
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
                ->rawColumns([
                    'action' => 'action',
                    'period_name' => 'period_name',
                    'study_program_name' => 'study_program_name',
                    'jenis_kelamin' => 'jenis_kelamin',
                    'status' => 'status',
                ])
                ->addIndexColumn()
                ->make(true);
        }
    }

    public function edit(Request $request)
    {
        session()->put('menu', 'medical-form');
        session()->put('title', 'Formulir Uji Kesehatan');
        session()->put('key', $this->key);
        $data['permissions'] = $this->permissions;
        $data['study_programs'] = StudyProgram::orderBy('name', 'asc')->get();
        $data['periods'] = Period::orderBy('name', 'desc')->get();
        $data['applicant'] = ApplicantMedicalRecord::find($request->id);
        $data['dokters'] = User::where('role_id', '2')->orderBy('name', 'asc')->get();
        $data['paramediss'] = User::where('role_id', [3, 85])->orderBy('name', 'asc')->get();
        $data['petugas_narkobas'] = User::where('role_id', '87')->orderBy('name', 'asc')->get();
        $data['dokter_gigis'] = User::where('role_id', '86')->orderBy('name', 'asc')->get();
        $data['perawat_gigis'] = User::where('role_id', '85')->orderBy('name', 'asc')->get();
        return view('admin.medical-form-edit', $data);
    }

    public function updateAntropometri(Request $request)
    {
        if (request()->ajax()) {
            try {
                $rules = [
                    "tinggi_badan" => "required|numeric|min:100|max:250",
                ];
                $validator = Validator::make($request->all(), $rules);

                $validator->after(function ($validator) {
                    // $check = ApplicantMedicalRecord::where([
                    //     'nomor_peserta' => request()->nomor_peserta,
                    // ])
                    //     ->where('id', '!=', request()->id)
                    //     ->first();
                    // if ($check) {
                    //     $validator->errors()->add('nomor_peserta', 'Data ini sudah ada');
                    // }
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $this->updateTanggalPeriksa($request->id);
                    $data = ApplicantMedicalRecord::find($request->id);
                    $data->dokter_id = $request->dokter_id;
                    $data->paramedis_1_id = $request->paramedis_1_id;
                    $data->tinggi_badan = $request->tinggi_badan;
                    $data->berat_badan = $request->berat_badan;
                    $data->tekanan_darah_sistolik = $request->tekanan_darah_sistolik;
                    $data->tekanan_darah_diastolik = $request->tekanan_darah_diastolik;
                    $data->nadi = $request->nadi;
                    $data->status_antropometri = ifEmptyInput($request->status_antropometri);
                    $data->catatan_antropometri = ifEmptyInput($request->catatan_antropometri);
                    $data->keterangan_antropometri = ifEmptyInput($request->keterangan_antropometri);
                    $data->save();

                    $message = 'Data Berhasil Diperbaharui';
                    $status = TRUE;
                }
            } catch (\Exception $e) {
                $status = FALSE;
                $message = $e->getMessage();
            }
            return response()->json(['status' => $status, 'message' => $message]);
        }
    }

    public function updateFisik(Request $request)
    {
        if (request()->ajax()) {
            try {
                $rules = [
                    "buta_warna" => "required",
                ];
                $validator = Validator::make($request->all(), $rules);

                $validator->after(function ($validator) {
                    // $check = ApplicantMedicalRecord::where([
                    //     'nomor_peserta' => request()->nomor_peserta,
                    // ])
                    //     ->where('id', '!=', request()->id)
                    //     ->first();
                    // if ($check) {
                    //     $validator->errors()->add('nomor_peserta', 'Data ini sudah ada');
                    // }
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $this->updateTanggalPeriksa($request->id);
                    $data = ApplicantMedicalRecord::find($request->id);
                    $data->dokter_id = $request->dokter_id;
                    $data->paramedis_2_id = $request->paramedis_2_id;
                    $data->status_kulit = ifEmptySelect($request->status_kulit);
                    $data->catatan_kulit = ifEmptyInput($request->catatan_kulit);
                    $data->keterangan_kulit = ifEmptyInput($request->keterangan_kulit);
                    $data->status_mata = ifEmptySelect($request->status_mata);
                    $data->visus = ifEmptyInput($request->visus);
                    $data->buta_warna = $request->buta_warna;
                    $data->catatan_mata = ifEmptyInput($request->catatan_mata);
                    $data->keterangan_mata = ifEmptyInput($request->keterangan_mata);
                    $data->status_telinga = ifEmptySelect($request->status_telinga);
                    $data->telinga_kanan = ifEmptyInput($request->telinga_kanan);
                    $data->telinga_kiri = ifEmptyInput($request->telinga_kiri);
                    $data->catatan_telinga = ifEmptyInput($request->catatan_telinga);
                    $data->keterangan_telinga = ifEmptyInput($request->keterangan_telinga);
                    $data->status_hidung = ifEmptySelect($request->status_hidung);
                    $data->catatan_hidung = ifEmptyInput($request->catatan_hidung);
                    $data->keterangan_hidung = ifEmptyInput($request->keterangan_hidung);
                    $data->status_lidah = ifEmptySelect($request->status_lidah);
                    $data->catatan_lidah = ifEmptyInput($request->catatan_lidah);
                    $data->keterangan_lidah = ifEmptyInput($request->keterangan_lidah);
                    $data->status_pharynx = ifEmptySelect($request->status_pharynx);
                    $data->catatan_pharynx = ifEmptyInput($request->catatan_pharynx);
                    $data->keterangan_pharynx = ifEmptyInput($request->keterangan_pharynx);
                    $data->status_tonsil = ifEmptySelect($request->status_tonsil);
                    $data->catatan_tonsil = ifEmptyInput($request->catatan_tonsil);
                    $data->keterangan_tonsil = ifEmptyInput($request->keterangan_tonsil);
                    $data->save();

                    $message = 'Data Berhasil Diperbaharui';
                    $status = TRUE;
                }
            } catch (\Exception $e) {
                $status = FALSE;
                $message = $e->getMessage();
            }
            return response()->json(['status' => $status, 'message' => $message]);
        }
    }

    public function updateFisik2(Request $request)
    {
        if (request()->ajax()) {
            try {
                $rules = [
                    // "buta_warna" => "required",
                ];
                $validator = Validator::make($request->all(), $rules);

                $validator->after(function ($validator) {
                    // $check = ApplicantMedicalRecord::where([
                    //     'nomor_peserta' => request()->nomor_peserta,
                    // ])
                    //     ->where('id', '!=', request()->id)
                    //     ->first();
                    // if ($check) {
                    //     $validator->errors()->add('nomor_peserta', 'Data ini sudah ada');
                    // }
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $this->updateTanggalPeriksa($request->id);
                    $data = ApplicantMedicalRecord::find($request->id);
                    $data->dokter_id = $request->dokter_id;
                    $data->paramedis_3_id = $request->paramedis_3_id;
                    $data->status_thyroid = ifEmptySelect($request->status_thyroid);
                    $data->catatan_thyroid = ifEmptyInput($request->catatan_thyroid);
                    $data->keterangan_thyroid = ifEmptyInput($request->keterangan_thyroid);
                    $data->status_jantung = ifEmptySelect($request->status_jantung);
                    $data->catatan_jantung = ifEmptyInput($request->catatan_jantung);
                    $data->keterangan_jantung = ifEmptyInput($request->keterangan_jantung);
                    $data->status_paru_paru = ifEmptySelect($request->status_paru_paru);
                    $data->catatan_paru_paru = ifEmptyInput($request->catatan_paru_paru);
                    $data->keterangan_paru_paru = ifEmptyInput($request->keterangan_paru_paru);
                    $data->status_abdomen = ifEmptySelect($request->status_abdomen);
                    $data->catatan_abdomen = ifEmptyInput($request->catatan_abdomen);
                    $data->keterangan_abdomen = ifEmptyInput($request->keterangan_abdomen);
                    $data->status_refleks_pupil = ifEmptySelect($request->status_refleks_pupil);
                    $data->status_refleks_patela = ifEmptySelect($request->status_refleks_patela);
                    $data->status_refleks_achiles = ifEmptySelect($request->status_refleks_achiles);
                    $data->catatan_refleks = ifEmptyInput($request->catatan_refleks);
                    $data->keterangan_refleks = ifEmptyInput($request->keterangan_refleks);
                    $data->status_thorax = ifEmptySelect($request->status_thorax);
                    $data->catatan_thorax = ifEmptyInput($request->catatan_thorax);
                    $data->keterangan_thorax = ifEmptyInput($request->keterangan_thorax);
                    $data->status_kemampuan_bicara = ifEmptySelect($request->status_kemampuan_bicara);
                    $data->catatan_kemampuan_bicara = ifEmptyInput($request->catatan_kemampuan_bicara);
                    $data->keterangan_kemampuan_bicara = ifEmptyInput($request->keterangan_kemampuan_bicara);
                    $data->save();

                    $message = 'Data Berhasil Diperbaharui';
                    $status = TRUE;
                }
            } catch (\Exception $e) {
                $status = FALSE;
                $message = $e->getMessage();
            }
            return response()->json(['status' => $status, 'message' => $message]);
        }
    }

    public function updateGigi(Request $request)
    {
        if (request()->ajax()) {
            try {
                $rules = [
                    // "buta_warna" => "required",
                ];
                $validator = Validator::make($request->all(), $rules);

                $validator->after(function ($validator) {
                    // $check = ApplicantMedicalRecord::where([
                    //     'nomor_peserta' => request()->nomor_peserta,
                    // ])
                    //     ->where('id', '!=', request()->id)
                    //     ->first();
                    // if ($check) {
                    //     $validator->errors()->add('nomor_peserta', 'Data ini sudah ada');
                    // }
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $this->updateTanggalPeriksa($request->id);
                    $data = ApplicantMedicalRecord::find($request->id);
                    $data->dokter_gigi_id = $request->dokter_gigi_id;
                    $data->perawat_gigi_id = $request->perawat_gigi_id;
                    $data->status_gigi = ifEmptySelect($request->status_gigi);
                    $data->catatan_gigi = ifEmptyInput($request->catatan_gigi);
                    $data->keterangan_gigi = ifEmptyInput($request->keterangan_gigi);
                    $data->save();

                    $message = 'Data Berhasil Diperbaharui';
                    $status = TRUE;
                }
            } catch (\Exception $e) {
                $status = FALSE;
                $message = $e->getMessage();
            }
            return response()->json(['status' => $status, 'message' => $message]);
        }
    }

    public function updateNarkoba(Request $request)
    {
        if (request()->ajax()) {
            try {
                $rules = [
                    // "buta_warna" => "required",
                ];
                $validator = Validator::make($request->all(), $rules);

                $validator->after(function ($validator) {
                    // $check = ApplicantMedicalRecord::where([
                    //     'nomor_peserta' => request()->nomor_peserta,
                    // ])
                    //     ->where('id', '!=', request()->id)
                    //     ->first();
                    // if ($check) {
                    //     $validator->errors()->add('nomor_peserta', 'Data ini sudah ada');
                    // }
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $this->updateTanggalPeriksa($request->id);
                    $data = ApplicantMedicalRecord::find($request->id);
                    $data->petugas_narkoba_id = $request->petugas_narkoba_id;
                    $data->amp = $request->amp;
                    $data->mop = $request->mop;
                    $data->thc = $request->thc;
                    $data->save();

                    $message = 'Data Berhasil Diperbaharui';
                    $status = TRUE;
                }
            } catch (\Exception $e) {
                $status = FALSE;
                $message = $e->getMessage();
            }
            return response()->json(['status' => $status, 'message' => $message]);
        }
    }

    public function updateKesimpulan(Request $request)
    {
        if (request()->ajax()) {
            try {
                $rules = [
                    "kesimpulan" => "required",
                ];
                $validator = Validator::make($request->all(), $rules);

                $validator->after(function ($validator) use ($request) {
                    $check = ApplicantMedicalRecord::find(request()->id);
                    if ($check->tinggi_badan == null || $check->buta_warna == null) {
                        $validator->errors()->add('kesimpulan', 'Lengkapi data antropometri dan fisik terlebih dahulu');
                    }
                    $data = $this->cekKesimpulan($request);

                    if (request()->cek == "false" && $data['kesimpulan'] != $request->rekomendasi) {
                        $validator->errors()->add('result', 'Hasil kesimpulan tidak sesuai. Silahkan cek kembali');
                    }
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $this->updateTanggalPeriksa($request->id);
                    $data = ApplicantMedicalRecord::find($request->id);
                    $data->kesimpulan = $request->kesimpulan;
                    $data->rekomendasi = $request->rekomendasi;
                    $data->riwayat_penyakit = ifEmptyInput($request->riwayat_penyakit);
                    $data->save();

                    $message = 'Data Berhasil Diperbaharui';
                    $status = TRUE;
                }
            } catch (\Exception $e) {
                $status = FALSE;
                $message = $e->getMessage();
            }
            return response()->json(['status' => $status, 'message' => $message]);
        }
    }

    public function getKesimpulan(Request $request)
    {
        if ($request->ajax()) {
            try {
                $result = $this->cekKesimpulan($request);
                return response()->json($result);
            } catch (\Exception $e) {
                return response()->json([
                    'status'  => false,
                    'message' => $e->getMessage()
                ]);
            }
        }
    }

    public function cekKesimpulan(Request $request)
    {
        $data = ApplicantMedicalRecord::findOrFail($request->id);

        // Kelompok Program Studi
        $keperawatanIds = [10, 11, 12, 13, 14, 15];
        $kebidananIds   = [5, 6, 7, 8, 9];

        // Default nilai
        $status          = false;
        $hasil           = 'TIDAK LULUS';
        $kesimpulan      = 'Tidak Dapat';
        $alasan          = '';
        $alasan_singkat  = '';
        $parameter       = [];

        /*
            |--------------------------------------------------------------------------
            | RULE 1 : BUTA WARNA (SYARAT MUTLAK)
            |--------------------------------------------------------------------------
            */
        if (in_array($data->buta_warna, ['Parsial', 'Total'])) {

            $status         = false;
            $hasil          = 'TIDAK LULUS';
            $kesimpulan     = 'Tidak Dapat';
            $alasan_singkat = 'Buta warna';
            $alasan         = 'Tidak lulus karena calon mahasiswa mengalami buta warna '
                . strtolower($data->buta_warna)
                . ', sedangkan uji buta warna merupakan persyaratan mutlak untuk seluruh program studi.';

            $parameter = [
                'buta_warna' => $data->buta_warna
            ];
        } else {

            /*
                |--------------------------------------------------------------------------
                | RULE 2 : PROGRAM STUDI KEPERAWATAN
                |--------------------------------------------------------------------------
                */
            if (in_array($data->study_program_id, $keperawatanIds)) {

                if ($data->jenis_kelamin === 'L') {

                    $parameter = [
                        'program_studi' => $data->study_program->name,
                        'jenis_kelamin' => 'Laki-laki',
                        'syarat_tinggi' => '≥ 155 cm',
                        'tinggi_badan'  => $data->tinggi_badan . ' cm'
                    ];

                    if ($data->tinggi_badan >= 155) {
                        $status         = true;
                        $hasil          = 'LULUS';
                        $kesimpulan     = 'Dapat';
                        $alasan_singkat = 'Memenuhi syarat tinggi';
                        $alasan         = 'Lulus karena calon mahasiswa program studi Keperawatan berjenis kelamin laki-laki dengan tinggi badan memenuhi syarat minimal 155 cm.';
                    } else {
                        $status         = false;
                        $hasil          = 'TIDAK LULUS';
                        $kesimpulan     = 'Tidak Dapat';
                        $alasan_singkat = 'Tinggi Badan Kurang, ' . $data->tinggi_badan . ' cm';
                        $alasan         = 'Tidak lulus karena tinggi badan calon mahasiswa program studi Keperawatan berjenis kelamin laki-laki di bawah syarat minimal 155 cm.';
                    }
                } elseif ($data->jenis_kelamin === 'P') {

                    $parameter = [
                        'program_studi' => $data->study_program->name,
                        'jenis_kelamin' => 'Perempuan',
                        'syarat_tinggi' => '≥ 150 cm',
                        'tinggi_badan'  => $data->tinggi_badan . ' cm'
                    ];

                    if ($data->tinggi_badan >= 150) {
                        $status         = true;
                        $hasil          = 'LULUS';
                        $kesimpulan     = 'Dapat';
                        $alasan_singkat = 'Memenuhi syarat tinggi';
                        $alasan         = 'Lulus karena calon mahasiswa program studi Keperawatan berjenis kelamin perempuan dengan tinggi badan memenuhi syarat minimal 150 cm.';
                    } else {
                        $status         = false;
                        $hasil          = 'TIDAK LULUS';
                        $kesimpulan     = 'Tidak Dapat';
                        $alasan_singkat = 'Tinggi Badan Kurang, ' . $data->tinggi_badan . ' cm';
                        $alasan         = 'Tidak lulus karena tinggi badan calon mahasiswa program studi Keperawatan berjenis kelamin perempuan di bawah syarat minimal 150 cm.';
                    }
                }

                /*
                |--------------------------------------------------------------------------
                | RULE 3 : PROGRAM STUDI KEBIDANAN
                |--------------------------------------------------------------------------
                */
            } elseif (in_array($data->study_program_id, $kebidananIds)) {

                $parameter = [
                    'program_studi' => $data->study_program->name,
                    'syarat_tinggi' => '≥ 150 cm',
                    'tinggi_badan'  => $data->tinggi_badan . ' cm'
                ];

                if ($data->tinggi_badan >= 150) {
                    $status         = true;
                    $hasil          = 'LULUS';
                    $kesimpulan     = 'Dapat';
                    $alasan_singkat = 'Memenuhi syarat tinggi';
                    $alasan         = 'Lulus karena calon mahasiswa program studi Kebidanan memenuhi syarat tinggi badan minimal 150 cm.';
                } else {
                    $status         = false;
                    $hasil          = 'TIDAK LULUS';
                    $kesimpulan     = 'Tidak Dapat';
                    $alasan_singkat = 'Tinggi Badan Kurang, ' . $data->tinggi_badan . ' cm';
                    $alasan         = 'Tidak lulus karena tinggi badan calon mahasiswa program studi Kebidanan berada di bawah syarat minimal 150 cm.';
                }

                /*
                |--------------------------------------------------------------------------
                | RULE 4 : PROGRAM STUDI SELAIN KEPERAWATAN & KEBIDANAN
                |--------------------------------------------------------------------------
                */
            } else {

                $parameter = [
                    'program_studi' => $data->study_program->name,
                    'syarat_tinggi' => '≥ 145 cm',
                    'tinggi_badan'  => $data->tinggi_badan . ' cm'
                ];

                if ($data->tinggi_badan >= 145) {
                    $status         = true;
                    $hasil          = 'LULUS';
                    $kesimpulan     = 'Dapat';
                    $alasan_singkat = 'Memenuhi syarat tinggi';
                    $alasan         = 'Lulus karena calon mahasiswa memenuhi syarat tinggi badan minimal 145 cm sesuai ketentuan program studi.';
                } else {
                    $status         = false;
                    $hasil          = 'TIDAK LULUS';
                    $kesimpulan     = 'Tidak Dapat';
                    $alasan_singkat = 'Tinggi Badan Kurang, ' . $data->tinggi_badan . ' cm';
                    $alasan         = 'Tidak lulus karena tinggi badan calon mahasiswa berada di bawah syarat minimal 145 cm.';
                }
            }
        }

        return [
            'status'          => $status,
            'hasil'           => $hasil,
            'kesimpulan'      => $kesimpulan,
            'alasan'          => $alasan,
            'alasan_singkat'  => $alasan_singkat,
            'parameter'       => $parameter
        ];
    }


    public function get(Request $request)
    {
        $data = ApplicantMedicalRecord::find($request->id);
        return response()->json($data);
    }

    public function updateTanggalPeriksa($id)
    {
        $data = ApplicantMedicalRecord::find($id);
        //jika tanggal kosong, isi dengan tanggal hari ini
        if (!$data->tgl_periksa) {
            $data->tgl_periksa = date('Y-m-d');
            $data->save();
        }
    }
}
