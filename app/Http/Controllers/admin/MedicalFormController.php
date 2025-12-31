<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ApplicantMedicalRecord;
use App\Models\Period;
use App\Models\StudyProgram;
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
            $query = ApplicantMedicalRecord::with('period', 'study_program');

            if ($period_id) {
                $query->where('period_id', $period_id);
            }
            if ($study_program_id) {
                $query->where('study_program_id', $study_program_id);
            }

            $result = $query->orderBy('nama', 'desc')->get();

            return datatables()->of($result)
                ->addColumn('action', function ($result) {
                    $button = '<button type="button" onclick="edit(this,' . "'" . $result->id . "'" . ')" style="margin-right:5px;" class="btn btn-warning btn-sm btn-label waves-effect waves-light"><i class="ri-pencil-line label-icon align-middle fs-16 me-2"></i> Edit</button>';
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
                ->rawColumns([
                    'action' => 'action',
                    'period_name' => 'period_name',
                    'study_program_name' => 'study_program_name',
                    'jenis_kelamin' => 'jenis_kelamin',
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
                    "nama" => 'required',
                    "nomor_peserta" => 'required',
                    "period_id" => 'required',
                    "study_program_id" => 'required',
                    "jenis_kelamin" => 'required',
                ];
                $validator = Validator::make($request->all(), $rules);

                $validator->after(function ($validator) {
                    $check = ApplicantMedicalRecord::where([
                        'nomor_peserta' => request()->nomor_peserta,
                    ])
                        ->where('id', '!=', request()->id)
                        ->first();
                    if ($check) {
                        $validator->errors()->add('nomor_peserta', 'Data ini sudah ada');
                    }
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $data = ApplicantMedicalRecord::find($request->id);
                    $data->nama = $request->nama;
                    $data->jenis_kelamin = $request->jenis_kelamin;
                    $data->nomor_peserta = $request->nomor_peserta;
                    $data->period_id = $request->period_id;
                    $data->study_program_id = $request->study_program_id;
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
