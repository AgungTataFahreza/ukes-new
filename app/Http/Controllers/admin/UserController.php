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
        session()->put('menu', 'user');
        session()->put('title', 'User');
        session()->put('key', $this->key);
        $data['permissions'] = $this->permissions;
        $data['roles'] = Role::orderBy('name', 'asc')->get();
        return view('admin.user', $data);
    }

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
                    $query->leftJoin('ukes_roles', 'ukes_roles.id', '=', 'ukes_users.role_id')
                        ->orderBy('ukes_roles.name', $order);
                })
                ->addColumn('action', function ($result) {
                    $button = '';
                    if (can_access($this->permissions, $this->key, 'edit')) {
                        $button .= '<button type="button" onclick="reset_password(this,' . "'" . $result->id . "'" . ')" style="margin-right:5px;" class="btn btn-info btn-sm btn-label waves-effect waves-light"><i class="ri-key-2-line label-icon align-middle fs-16 me-2"></i> Reset</button>';
                        $button .= '<button type="button" onclick="edit(this,' . "'" . $result->id . "'" . ')" style="margin-right:5px;" class="btn btn-warning btn-sm btn-label waves-effect waves-light"><i class="ri-pencil-line label-icon align-middle fs-16 me-2"></i> Edit</button>';
                    }
                    if (can_access($this->permissions, $this->key, 'delete')) {
                        $button .= '<button type="button" onclick="deletee(' . "'" . $result->id . "'" . ')" class="btn btn-danger btn-sm btn-label waves-effect waves-light"><i class="ri-delete-bin-line label-icon align-middle fs-16 me-2"></i> Delete</button>';
                    }
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
                    'username' => 'required',
                    'name' => 'required',
                    'role_id' => 'required',
                ];

                $validator = Validator::make($request->all(), $rules);
                $validator->after(function ($validator) {
                    $check = User::where([
                        'username' => request()->username,
                    ])
                        ->first();
                    if ($check) {
                        $validator->errors()->add('username', 'Data Sudah Ada');
                    }
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    User::create([
                        'role_id' => $request->role_id,
                        'name' => $request->name,
                        'username' => $request->username,
                        'password' => password_hash($request->username, PASSWORD_DEFAULT),
                    ]);

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
                    $check = User::where([
                        'username' => request()->username,
                    ])
                        ->where('id', '!=', request()->id)
                        ->first();
                    if ($check) {
                        $validator->errors()->add('', 'Username ini telah digunakan');
                    }
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $data = User::find($request->id);
                    $data->role_id = $request->role_id;
                    $data->name = $request->name;
                    $data->username = $request->username;
                    $data->password = password_hash($request->username, PASSWORD_DEFAULT);
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
            try {
                $data = User::where('id', $request->id)
                    ->where('id', '!=', auth()->user()->id)
                    ->first();

                if (!$data) {
                    return response()->json(['status' => FALSE, 'message' => 'Data tidak ditemukan atau Anda tidak dapat menghapus diri sendiri.']);
                }

                $data = User::find($request->id);
                $data->delete();
                $message = '';
                $status = TRUE;

                return response()->json(['status' => $status, 'message' => $message]);
            } catch (\Exception $e) {
                $status = FALSE;
                $message = $e->getMessage();
                return response()->json(['status' => $status, 'message' => $message]);
            }
        }
    }

    public function resetPassword(Request $request)
    {
        if (request()->ajax()) {
            $data = User::find($request->id);
            $data->password = password_hash($data->username, PASSWORD_DEFAULT);
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
