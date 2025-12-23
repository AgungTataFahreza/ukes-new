<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\RolePermission;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller
{
    private $key;

    public function __construct()
    {
        $this->key = 'Role';
    }

    public function index()
    {
        session()->flash('menu', $this->key);
        session()->flash('title', $this->key);
        session()->flash('key', $this->key);
        return view('admin.role');
    }

    public function show(Request $request)
    {
        if (request()->ajax()) {

            $result = Role::all();
            return datatables()->of($result)
                ->addColumn('action', function ($result) {
                    $button = ' <div class="d-flex">';

                    if (can($this->key, 'edit')) {
                        $button .= '<div class="edit">
                                                <a href="' . url('admin/role/edit/' . $result->id) . '" class="btn btn-primary shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i> Edit</a>
                                            </div>';
                    }

                    if (can($this->key, 'delete')) {
                        $button .= '<div class="remove">
                                                <a class="btn btn-success shadow btn-sm sharp mr-1" onclick="deletee(' . "'" . $result->id . "'" . ')"><i class="fa fa-trash"></i> Hapus</a>
                                            </div>';
                    }

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
        session()->flash('menu', 'Pengaturan');
        session()->flash('sub_menu', 'Role');
        session()->flash('title', 'Role');
        $data['units'] = Unit::orderBy('name')->get();
        $data['menus'] = Menu::with('children')->whereNull('menu_id')->get();
        return view('admin.role-add', $data);
    }

    public function create(Request $request)
    {
        try {
            $id = null;
            DB::transaction(function () use ($request, &$id) {
                $name = $request->input("name");
                $status_data = 0;
                $status_data = Role::create([
                    "name" => $name,
                ]);
                $id = $status_data->id;

                $menu = Menu::orderBy('name', 'ASC')->get();
                foreach ($menu as $item) {
                    $data = [
                        "role_id" => $status_data->id,
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

                    RolePermission::create($data);
                }
            });
            return redirect('admin/role/edit/' . $id)->with('success', 'berhasil menambah role');
        } catch (\Exception $e) {
            return redirect()->back()->with('failed', $e->getMessage());
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
            $admin = User::where(['role_id' => $request->id])->get();
            if (count($admin) > 0) {
                $message = 'Tidak dapat menghapus data, ada user yang menggunakan role tersebut';
                $status = FALSE;
            } else {
                $data = Role::find($request->id);
                $data->delete();
                $message = '';
                $status = TRUE;
            }

            return response()->json(['status' => $status, 'message' => $message]);
        }
    }
}
