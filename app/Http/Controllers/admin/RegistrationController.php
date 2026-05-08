<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ApplicantMedicalRecord;
use App\Models\Period;
use App\Models\StudyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    private $key;
    private $permissions;

    public function __construct()
    {
        $this->key = 'Registrasi Peserta';
        $this->middleware(function ($request, $next) {
            $this->permissions = store_permissions();
            return $next($request);
        });
    }

    public function index()
    {
        session()->put('menu', 'registration');
        session()->put('title', 'Registrasi Peserta');
        session()->put('key', $this->key);
        $data['permissions'] = $this->permissions;
        $data['study_programs'] = StudyProgram::orderBy('name', 'asc')->get();
        $data['periods'] = Period::orderBy('name', 'desc')->get();
        return view('admin.registration', $data);
    }

    public function show(Request $request)
    {
        if (request()->ajax()) {

            $period_id = $request->period_id;
            $study_program_id = $request->study_program_id;
            $query = ApplicantMedicalRecord::with('period', 'study_program', 'applicant');
            if ($period_id) {
                $query->where('period_id', $period_id);
            }
            if ($study_program_id) {
                $query->where('study_program_id', $study_program_id);
            }

            if ($request->has('status_registrasi')) {
                if ($request->status_registrasi != '') {
                    if ($request->status_registrasi == '1') {
                        $query->whereNotNull('tgl_registrasi');
                    } else {
                        $query->whereNull('tgl_registrasi');
                    }
                }
            }

            $result = $query->orderBy('nama', 'desc')->get();

            return datatables()->of($result)
                ->addColumn('action', function ($result) {
                    $button = '';
                    if (can_access($this->permissions, $this->key, 'edit')) {
                        $button .= '<button type="button" onclick="edit(this,' . "'" . $result->id . "'" . ')" style="margin-right:5px;" class="btn btn-success btn-sm btn-label waves-effect waves-light"><i class="ri-file-list-line label-icon align-middle fs-16 me-2"></i> Daftar</button>';
                    }
                    return $button;
                })
                ->addColumn('period_name', function ($result) {
                    return $result->period->name . ' ' . $result->period->year->name;
                })
                ->addColumn('study_program_name', function ($result) {
                    return $result->study_program->name;
                })
                ->editColumn('tanggal_registrasi', function ($result) {
                    if ($result->tgl_registrasi) {
                        return date('d-m-Y', strtotime($result->tgl_registrasi));
                    } else {
                        return '-';
                    }
                })
                ->editColumn('tanggal_lahir', function ($result) {
                    if ($result->tanggal_lahir) {
                        return date('d-m-Y', strtotime($result->tanggal_lahir));
                    } else {
                        return '-';
                    }
                })
                ->editColumn('tanggal_periksa', function ($result) {
                    if ($result->tgl_periksa) {
                        return date('d-m-Y', strtotime($result->tgl_periksa));
                    } else {
                        return '-';
                    }
                })
                ->addColumn('status_lulus', function ($result) {
                    if ($result->rekomendasi != null) {
                        if ($result->rekomendasi == 'Dapat') {
                            return '<span class="badge badge-label bg-success"><i class="mdi mdi-circle-medium"></i> Lulus</span>';
                        } else {
                            return '<span class="badge badge-label bg-danger"><i class="mdi mdi-circle-medium"></i> Tidak Lulus</span>';
                        }
                    } else {
                        return '<span class="badge badge-label bg-secondary"><i class="mdi mdi-circle-medium"></i> Belum Diperiksa</span>';
                    }
                })
                ->addColumn('status_registrasi', function ($result) {
                    // 1. Badge Status Registrasi (Bawaan)
                    $badgeRegistrasi = $result->tgl_registrasi
                        ? '<span class="badge badge-label bg-secondary"><i class="mdi mdi-circle-medium"></i> Sudah</span>'
                        : '<span class="badge badge-label bg-danger"><i class="mdi mdi-circle-medium"></i> Belum</span>';

                    // 2. Badge Penanda Peserta Luar
                    $badgeLuar = '';

                    // SESUAIKAN INI: Ganti 'is_luar' dengan nama kolom yang benar di tabel Applicant kamu.
                    // Contoh lain: if ($result->applicant?->jenis_peserta == 'Luar')
                    if ($result->applicant) {
                        // Tambahkan <br> agar badge turun ke bawahnya, atau gunakan class mt-1
                        $badgeLuar = '<br><span class="badge badge-label bg-warning text-dark mt-1" title="Peserta Luar"><i class="ri-walk-line"></i> Luar</span>';
                    }

                    // Gabungkan keduanya
                    return $badgeRegistrasi . $badgeLuar;
                })
                ->addColumn('status_bayar', function ($result) {
                    return $result->status_bayar ? '<span class="badge badge-label bg-secondary"><i class="mdi mdi-circle-medium"></i> Sudah</span>' : '<span class="badge badge-label bg-danger"><i class="mdi mdi-circle-medium"></i> Belum</span>';
                })
                ->editColumn('jenis_kelamin', function ($result) {
                    return $result->jenis_kelamin == 'L' ? '<span class="badge bg-primary"> Laki-laki</span>' : '<span class="badge bg-danger"> Perempuan</span>';
                })
                ->rawColumns([
                    'action' => 'action',
                    'period_name' => 'period_name',
                    'study_program_name' => 'study_program_name',
                    'status_lulus' => 'status_lulus',
                    'status_registrasi' => 'status_registrasi',
                    'status_bayar' => 'status_bayar',
                    'jenis_kelamin' => 'jenis_kelamin',
                    'tanggal_lahir' => 'tanggal_lahir',
                ])
                ->addIndexColumn()
                ->make(true);
        }
    }

    public function edit(Request $request)
    {
        if (request()->ajax()) {
            $result = ApplicantMedicalRecord::find($request->id);
            return response()->json($result);
        }
    }

    public function update(Request $request)
    {
        if (request()->ajax()) {
            try {
                $rules = [
                    "tgl_registrasi" => 'required',
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
                    $data = ApplicantMedicalRecord::find($request->id);
                    $data->tgl_registrasi = $request->tgl_registrasi;
                    $data->tempat_periksa = $request->tempat_periksa ? $request->tempat_periksa : "Klinik Pratama Poltekkes Medan";
                    $data->status_bayar = $request->has('status_bayar') ? 1 : 0;
                    $data->nomor_antrian = $request->nomor_antrian;
                    $data->petugas_registrasi_id = auth()->user()->id;
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
}
