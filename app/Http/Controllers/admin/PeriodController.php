<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Period;
use App\Models\Year;
use Illuminate\Support\Facades\Validator;

class PeriodController extends Controller
{
    private $key;
    private $permissions;

    public function __construct()
    {
        $this->key = 'Periode';
        $this->middleware(function ($request, $next) {
            $this->permissions = store_permissions();
            return $next($request);
        });
    }

    public function index()
    {
        session()->put('menu', 'period');
        session()->put('title', 'Periode');
        session()->put('key', $this->key);
        $data['years'] = Year::orderBy('name', 'desc')->get();
        $data['permissions'] = $this->permissions;
        return view('admin.period', $data);
    }


    public function show(Request $request)
    {
        if (request()->ajax()) {

            $result = Period::orderBy('name', 'desc')->get();

            return datatables()->of($result)
                ->addColumn('action', function ($result) {
                    $button = '';
                    if (can_access($this->permissions, $this->key, 'edit')) {
                        $button .= '<button type="button" onclick="edit(this,' . "'" . $result->id . "'" . ')" style="margin-right:5px;" class="btn btn-warning btn-sm btn-label waves-effect waves-light"><i class="ri-pencil-line label-icon align-middle fs-16 me-2"></i> Edit</button>';
                    }
                    if (can_access($this->permissions, $this->key, 'delete')) {
                        $button .= '<button type="button" onclick="deletee(' . "'" . $result->id . "'" . ')" class="btn btn-danger btn-sm btn-label waves-effect waves-light"><i class="ri-delete-bin-line label-icon align-middle fs-16 me-2"></i> Delete</button>';
                    }
                    return $button;
                })
                ->addColumn('year', function ($result) {
                    return $result->year->name;
                })
                ->addColumn('is_active_button', function ($result) {
                    $checked = $result->is_active ? 'checked' : '';
                    $button = '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" onchange="togglePeriod(this,' . $result->id . ')" id="checkbox_' . $result->id . '" ' . $checked . '><label class="form-check-label" for="checkbox_' . $result->id . '"></label></div>';
                    return $button;
                })
                ->rawColumns([
                    'action' => 'action',
                    'is_active_button' => 'is_active_button',
                    'year' => 'year',
                ])
                ->addIndexColumn()
                ->make(true);
        }
    }

    public function add(Request $request)
    {
        if (request()->ajax()) {
            try {
                $rules = [
                    "name" => 'required',
                ];

                $validator = Validator::make($request->all(), $rules);
                $validator->after(function ($validator) {
                    $check = Period::where([
                        'name' => request()->name,
                        'year_id' => request()->year_id,
                    ])
                        ->where('id', '!=', request()->id)
                        ->first();
                    if ($check) {
                        $validator->errors()->add('name', 'Data ini sudah ada');
                    }
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $data = Period::create([
                        "name" => $request->name,
                        "year_id" => $request->year_id,
                    ]);

                    $message = 'Data Berhasil Ditambahkan';

                    $status = TRUE;
                }
            } catch (\Exception $e) {
                $status = FALSE;
                $message = $e->getMessage();
            }
            return response()->json(['status' => $status, 'message' => $message]);
        }
    }

    public function edit(Request $request)
    {
        if (request()->ajax()) {
            $result = Period::find($request->id);
            return response()->json($result);
        }
    }

    public function update(Request $request)
    {
        if (request()->ajax()) {
            try {
                $rules = [
                    "name" => 'required',
                ];
                $validator = Validator::make($request->all(), $rules);

                $validator->after(function ($validator) {
                    $check = Period::where([
                        'name' => request()->name,
                        'year_id' => request()->year_id
                    ])
                        ->where('id', '!=', request()->id)
                        ->first();
                    if ($check) {
                        $validator->errors()->add('name', 'Data ini sudah ada');
                    }
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $data = Period::find($request->id);
                    $data->name = $request->name;
                    $data->year_id = $request->year_id;
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

    public function delete(Request $request)
    {
        if (request()->ajax()) {
            $data = Period::find($request->id);
            $data->delete();
            $message = '';
            $status = TRUE;

            return response()->json(['status' => $status, 'message' => $message]);
        }
    }

    public function toggle(Request $request)
    {
        if ($request->ajax()) {

            $period = Period::find($request->id);

            if (!$period) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Periode tidak ditemukan'
                ]);
            }

            // Jika status = 1 → aktifkan & nonaktifkan yang lain
            if ($request->status == 1) {
                Period::where('is_active', 1)
                    ->where('id', '!=', $period->id)
                    ->update(['is_active' => 0]);

                $period->is_active = 1;
                $message = 'Periode berhasil diaktifkan';
            }
            // Jika status = 0 → nonaktifkan periode ini
            else {
                $period->is_active = 0;
                $message = 'Periode berhasil dinonaktifkan';
            }

            $period->save();

            return response()->json([
                'status'  => true,
                'message' => $message
            ]);
        }
    }
}
