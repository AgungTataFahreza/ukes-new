<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\InternalPosition;
use App\Models\PTKP;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $key;
    private $permissions;

    public function __construct()
    {
        $this->key = 'User';
        $this->middleware(function ($request, $next) {
            $this->permissions = store_permissions();
            return $next($request);
        });
    }

    public function index()
    {
        session()->flash('menu', 'user');
        session()->flash('title', 'Akun Pengguna');
        session()->flash('key', $this->key);
        $data['roles'] = Role::all();
        $data['users'] = User::all();
        $data['internal_positions'] = InternalPosition::all();
        $data['PTKP'] = PTKP::all();
        $data['permissions'] = $this->permissions;
        return view('admin.user', $data);
    }


    // public function show(Request $request)
    // {
    //     if (request()->ajax()) {

    //         $result = User::whereNotNull('username')->get();

    //         return datatables()->of($result)
    //             ->addColumn('action', function ($result) {
    //                 $button = ' <div class="gap-2" style="text-align: center;display: inline-flex;">';

    //                 if (can($this->key, 'edit')) {
    //                     // $button .= '<a href="javascript:void(0)" class="fs-15" onclick="edit(' . "'" . $result->id . "'"  . ')" style="margin-right:5px;"><i class="ri-edit-2-line"></i></a>';
    //                     $button .= '<div class="edit">
    //                                             <button class="btn btn-sm btn-info mr-1" onclick="reset_password(' . "'" . $result->id . "'"  . ')"><i class="fa fa-key"></i> Reset</button>
    //                                         </div>';
    //                     $button .= '<div class="edit">
    //                                             <button class="btn btn-sm btn-primary mr-1" onclick="edit(this,' . "'" . $result->id . "'"  . ')"><i class="fa fa-edit"></i> Edit</button>
    //                                         </div>';
    //                 }
    //                 if (can($this->key, 'delete')) {
    //                     // $button .= '<a href="javascript:void(0);" class="link-success fs-15"><i class="ri-delete-bin-line"></i></a>';
    //                     $button .= '<div class="remove">
    //                                             <button class="btn btn-sm btn-success mr-1" onclick="deletee(' . "'" . $result->id . "'" . ')"><i class="fa fa-trash"></i> Hapus</button>
    //                                         </div>';
    //                 }
    //                 $button .= '</div>';
    //                 return $button;
    //             })
    //             ->editColumn('role_name', function ($result) {
    //                 return $result->role->name;
    //             })
    //             ->rawColumns([
    //                 'action' => 'action',
    //                 'role_name' => 'role_name',
    //             ])
    //             ->addIndexColumn()
    //             ->make(true);
    //     }
    // }

    public function show(Request $request)
    {
        if ($request->ajax()) {
            $query = User::with('role')->whereNotNull('username');

            return datatables()->eloquent($query)
                ->addColumn('role_name', function ($result) {
                    return $result->role ? $result->role->name : '-';
                })
                ->filterColumn('role_name', function ($query, $keyword) {
                    $query->whereHas('role', function ($q) use ($keyword) {
                        $q->where('name', 'LIKE', "%{$keyword}%");
                    });
                })
                ->orderColumn('role_name', function ($query, $order) {
                    $query->leftJoin('logbook_roles', 'logbook_roles.id', '=', 'logbook_users.role_id')
                        ->orderBy('logbook_roles.name', $order);
                })
                ->addColumn('action', function ($result) {
                    $button = '<div class="gap-2" style="text-align: center; display: inline-flex;">';

                    if (can_access($this->permissions, $this->key, 'edit')) {
                        $button .= '<div class="edit">
                                    <button class="btn btn-sm btn-info mr-1" onclick="reset_password(' . "'" . $result->id . "'" . ')"><i class="fa fa-key"></i> Reset</button>
                                </div>';
                        $button .= '<div class="edit">
                                    <button class="btn btn-sm btn-primary mr-1" onclick="edit(this,' . "'" . $result->id . "'" . ')"><i class="fa fa-edit"></i> Edit</button>
                                </div>';
                    }
                    if (can_access($this->permissions, $this->key, 'delete')) {
                        $button .= '<div class="remove">
                                    <button class="btn btn-sm btn-success mr-1" onclick="deletee(' . "'" . $result->id . "'" . ')"><i class="fa fa-trash"></i> Hapus</button>
                                </div>';
                    }
                    $button .= '</div>';
                    return $button;
                })
                ->rawColumns([
                    'action' => 'action',
                    'role_name' => 'role_name'
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
                    'id' => 'required',
                    'role_id' => 'required',
                ];

                $validator = Validator::make($request->all(), $rules);
                $validator->after(function ($validator) {
                    $check = User::where([
                        'id' => request()->id,
                    ])
                        ->whereNotNull('username')
                        ->first();
                    if ($check) {
                        $validator->errors()->add('id', 'Data Sudah Ada');
                    }
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $data = User::find($request->id);
                    $data->role_id = $request->role_id;
                    $data->username = ($data->user_type_id == 1 ? $data->nip : $data->nik);
                    $data->password = password_hash(($data->user_type_id == 1 ? $data->nip : $data->nik), PASSWORD_DEFAULT);
                    $data->save();

                    $message = '';
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
            $result = User::find($request->id);
            return response()->json($result);
        }
    }

    public function update(Request $request)
    {
        if (request()->ajax()) {
            try {
                $rules = [
                    'role_id' => 'required',
                ];
                $validator = Validator::make($request->all(), $rules);

                $validator->after(function ($validator) {
                    // $check = User::where([
                    //     'id' => request()->id,
                    //     'role_id' => request()->role_id,
                    // ])->first();
                    // if ($check) {
                    //     $validator->errors()->add('', 'Username ini telah digunakan');
                    // }
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $data = User::find($request->id);
                    $data->role_id = $request->role_id;
                    $data->save();

                    $message = '';
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
            $data = User::find($request->id);
            $data->username = "";
            $data->password = "";
            $data->save();
            $message = '';
            $status = TRUE;

            return response()->json(['status' => $status, 'message' => $message]);
        }
    }

    public function resetPassword(Request $request)
    {
        if (request()->ajax()) {
            $data = User::find($request->id);
            $data->password = password_hash(($data->user_type_id == 1 ? $data->nip : $data->nik), PASSWORD_DEFAULT);
            $data->save();
            $message = '';
            $status = TRUE;

            return response()->json(['status' => $status, 'message' => $message]);
        }
    }

    public function getUsers(Request $request)
    {
        $response = User::orderBy('nama', 'asc')->get();

        return response()->json($response);
    }

    public function updatePassword(Request $request)
    {
        if (request()->ajax()) {
            try {
                $rules = [
                    'old_password' => 'required',
                    'password' => 'required|min:6|required_with:password_confirmation|same:password_confirmation',
                ];
                $validator = Validator::make($request->all(), $rules);

                // $validator->after(function ($validator) {

                // });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $user = User::find($request->id);

                    // Periksa apakah password lama sesuai
                    if (!Hash::check($request->old_password, $user->password)) {
                        return response()->json(['success' => false, 'message' => 'Password lama salah.']);
                    }

                    // Update password baru
                    $user->password = Hash::make($request->password);
                    $user->save();

                    Auth::setUser($user);
                    Auth::login($user);

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
