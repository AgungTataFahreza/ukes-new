<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class YearController extends Controller
{
    private $key;
    private $permissions;

    public function __construct()
    {
        $this->key = 'Tahun';
        $this->middleware(function ($request, $next) {
            $this->permissions = store_permissions();
            return $next($request);
        });
    }

    public function index()
    {
        session()->put('menu', 'year');
        session()->put('title', 'Tahun');
        session()->put('key', $this->key);
        $data['permissions'] = $this->permissions;
        return view('admin.year', $data);
    }


    public function show(Request $request)
    {
        if (request()->ajax()) {

            $result = Year::orderBy('name', 'desc')->get();

            return datatables()->of($result)
                ->addColumn('action', function ($result) {
                    $button = '<button type="button" onclick="edit(this,' . "'" . $result->id . "'" . ')" style="margin-right:5px;" class="btn btn-warning btn-sm btn-label waves-effect waves-light"><i class="ri-pencil-line label-icon align-middle fs-16 me-2"></i> Edit</button>';
                    $button .= '<button type="button" onclick="deletee(' . "'" . $result->id . "'" . ')" class="btn btn-danger btn-sm btn-label waves-effect waves-light"><i class="ri-delete-bin-line label-icon align-middle fs-16 me-2"></i> Delete</button>';
                    return $button;
                })
                ->rawColumns([
                    'action' => 'action',
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
                    $check = Year::where([
                        'name' => request()->name,
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
                    $data = Year::create([
                        "name" => $request->name,
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
            $result = Year::find($request->id);
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
                    $check = Year::where([
                        'name' => request()->name,
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
                    $data = Year::find($request->id);
                    $data->name = $request->name;
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
            $data = Year::find($request->id);
            $data->delete();
            $message = '';
            $status = TRUE;

            return response()->json(['status' => $status, 'message' => $message]);
        }
    }
}
