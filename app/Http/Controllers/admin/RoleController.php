<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\RolePermission;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller
{
    private $key;
    private $permissions;

    public function __construct()
    {
        $this->key = 'Role';
        $this->middleware(function ($request, $next) {
            $this->permissions = store_permissions();
            return $next($request);
        });
    }

    public function index()
    {
        session()->put('menu', 'role');
        session()->put('title', 'Role');
        session()->put('key', $this->key);
        $data['permissions'] = $this->permissions;
        return view('admin.role', $data);
    }

    public function show(Request $request)
    {
        if (request()->ajax()) {

            $result = Role::all();
            return datatables()->of($result)
                ->addColumn('action', function ($result) {
                    $button = ' <div class="d-flex">';

                    // if (can($this->key, 'edit')) {
                    $button .= '<div class="edit">
                                                <a href="' . url('admin/role/edit/' . $result->id) . '" style="margin-right:5px;" class="btn btn-warning btn-sm btn-label waves-effect waves-light"><i class="ri-pencil-line label-icon align-middle fs-16 me-2"></i> Edit</a>
                                            </div>';
                    // }

                    // if (can($this->key, 'delete')) {
                    $button .= '<div class="remove">
                                                <button class="btn btn-danger btn-sm btn-label waves-effect waves-light" onclick="deletee(' . "'" . $result->id . "'" . ')"><i class="ri-delete-bin-line label-icon align-middle fs-16 me-2"></i> Hapus</button>
                                            </div>';
                    // }

                    $button .= '</div>';

                    // $button .= "</div>";
                    return $button;
                })
                ->editColumn('total_user', function ($result) {
                    return '<span class="badge bg-info">' . $result->users->count() . ' User</span>';
                })
                ->rawColumns([
                    'action' => 'action',
                    'total_user' => 'total_user',
                ])
                ->addIndexColumn()
                ->make(true);
        }
    }

    public function add()
    {
        session()->flash('menu', 'role');
        session()->flash('sub_menu', 'Role');
        session()->flash('title', 'Role');
        $data['menus'] = Menu::with('children')->whereNull('menu_id')->get();
        return view('admin.role-add', $data);
    }

    public function create(Request $request)
    {
        // =========================
        // 1. VALIDASI INPUT
        // =========================
        $request->validate([
            'name' => 'required|string|max:255|unique:ukes_roles,name'
        ], [
            'name.required' => 'Nama role wajib diisi',
            'name.unique'   => 'Nama role sudah digunakan',
        ]);

        try {
            $id = null;

            // =========================
            // 2. TRANSACTION DATABASE
            // =========================
            DB::transaction(function () use ($request, &$id) {

                // Simpan role
                $role = Role::create([
                    'name' => $request->input('name')
                ]);

                $id = $role->id;

                // Ambil seluruh menu
                $menus = Menu::orderBy('name', 'ASC')->get();

                foreach ($menus as $menu) {

                    $data = [
                        'role_id'       => $role->id,
                        'menu_id'       => $menu->id,
                        'view_access'   => 0,
                        'add_access'    => 0,
                        'edit_access'   => 0,
                        'delete_access' => 0,
                        'upload_access' => 0,
                    ];

                    // View
                    if ($menu->has_view && $request->has("cbView{$menu->id}")) {
                        $data['view_access'] = 1;
                    }

                    // Add
                    if ($menu->has_add && $request->has("cbAdd{$menu->id}")) {
                        $data['add_access'] = 1;
                    }

                    // Edit
                    if ($menu->has_edit && $request->has("cbEdit{$menu->id}")) {
                        $data['edit_access'] = 1;
                    }

                    // Delete
                    if ($menu->has_delete && $request->has("cbDelete{$menu->id}")) {
                        $data['delete_access'] = 1;
                    }

                    // Upload
                    if ($menu->has_upload && $request->has("cbUpload{$menu->id}")) {
                        $data['upload_access'] = 1;
                    }

                    RolePermission::create($data);
                }
            });

            // =========================
            // 3. REDIRECT BERHASIL
            // =========================
            return redirect('admin/role/edit/' . $id)
                ->with('success', 'Berhasil menambah role');
        } catch (\Exception $e) {

            // =========================
            // 4. ERROR HANDLING
            // =========================
            return redirect()->back()
                ->withInput()
                ->with('failed', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    public function edit(Request $request)
    {
        session()->flash('menu', 'Pengaturan');
        session()->flash('sub_menu', 'Role');
        session()->flash('title', 'Role');
        $role_id = $request->route("role_id");
        $role = Role::where(["id" => $role_id])->first();

        $menu = Menu::with(['role_permission' => function ($query) use ($role_id) {
            $query->where('role_id', $role_id);
        }])
            ->with('children')
            ->with(['children.role_permission' => function ($query) use ($role_id) {
                $query->where('role_id', $role_id);
            }])
            ->whereNull('menu_id')->get();

        $data = [
            "role" => $role,
            "menus" => $menu
        ];
        return view('admin/role-edit', $data);
    }

    public function update(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $id = $request->input("id");
                $name = $request->input("name");

                $update = [
                    "name" => $name,
                ];

                $status_data = Role::where(['id' => $id])->update($update);

                $menu = Menu::orderBy('name', 'ASC')->get();
                foreach ($menu as $item) {
                    $data = [
                        "role_id" => $id,
                        "menu_id" => $item->id,
                        "view_access" => 0,
                        "add_access" => 0,
                        "edit_access" => 0,
                        "delete_access" => 0,
                        "upload_access" => 0,
                    ];

                    if ($item->has_view) {
                        if ($request->input("cbView" . $item->id)) {
                            $data["view_access"] = 1;
                        }
                    }

                    if ($item->has_add) {
                        if ($request->input("cbAdd" . $item->id)) {
                            $data["add_access"] = 1;
                        }
                    }

                    if ($item->has_edit) {
                        if ($request->input("cbEdit" . $item->id)) {
                            $data["edit_access"] = 1;
                        }
                    }

                    if ($item->has_delete) {
                        if ($request->input("cbDelete" . $item->id)) {
                            $data["delete_access"] = 1;
                        }
                    }

                    if ($item->has_upload) {
                        if ($request->input("cbUpload" . $item->id)) {
                            $data["upload_access"] = 1;
                        }
                    }

                    $check = RolePermission::where(['role_id' => $id, 'menu_id' => $item->id])->first();
                    if ($check) {
                        RolePermission::where(['role_id' => $id, 'menu_id' => $item->id])->update($data);
                    } else {
                        RolePermission::create($data);
                    }
                }
            });
            Session::flash('success', "Berhasil Mengedit Role");
            return redirect()->back()->with('success', 'berhasil mengedit role');
        } catch (\Exception $e) {
            Session::flash('error', $e->getMessage());
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }

    public function delete(Request $request)
    {
        if (request()->ajax()) {
            try {
                $admin = User::where(['role_id' => $request->id])->get();
                if (count($admin) > 0) {
                    $message = 'Tidak dapat menghapus data, ada user yang menggunakan role tersebut';
                    $status = FALSE;
                } else {
                    RolePermission::where(['role_id' => $request->id])->delete();
                    $data = Role::find($request->id);
                    $data->delete();
                    $message = '';
                    $status = TRUE;
                }
                return response()->json(['status' => $status, 'message' => $message]);
            } catch (\Exception $e) {
                return response()->json(['status' => False, 'message' => $e->getMessage()]);
            }
        }
    }
}
