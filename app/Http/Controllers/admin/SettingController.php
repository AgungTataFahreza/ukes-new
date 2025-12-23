<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    private $key;
    private $permissions;

    public function __construct()
    {
        $this->key = 'Pengaturan';
        $this->middleware(function ($request, $next) {
            $this->permissions = store_permissions();
            return $next($request);
        });
    }

    public function index()
    {
        session()->flash('menu', $this->key);
        session()->flash('title', $this->key);
        session()->flash('key', $this->key);
        $data['permissions'] = $this->permissions;
        return view('admin.setting', $data);
    }

    public function edit(Request $request)
    {
        if (request()->ajax()) {
            $result = Setting::find(1);
            return response()->json($result);
        }
    }

    public function update(Request $request)
    {
        if (request()->ajax()) {
            try {
                $rules = [
                    "date" => 'required',
                ];
                $validator = Validator::make($request->all(), $rules);

                $validator->after(function ($validator) {
                    //
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $data = Setting::find(1);
                    $data->date = $request->date;
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
