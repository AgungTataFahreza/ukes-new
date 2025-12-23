<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    private $key;

    public function __construct()
    {
        $this->key = 'Menu';
    }

    public function index()
    {
        session()->flash('menu', 'alumni');
        session()->flash('title', $this->key);
        session()->flash('key', $this->key);
        $data['menus'] = Menu::whereNull('menu_id')->get();
        return view('admin.menu', $data);
    }

    public function show(Request $request)
    {
        if (request()->ajax()) {

            $Menus = Menu::with('children')->whereNull('menu_id')->get();
            $i = 1;
            $data = [];
            $flag = '';
            foreach ($Menus as $menu) {
                if (count($menu->children) > 0) {
                    foreach ($menu->children as $sub_menu) {
                        if ($flag == '' || $flag != $menu->id) {
                            $flag = $menu->id;
                            $data[] = [
                                'no' => $i,
                                'id' => $sub_menu->id,
                                'menu' => $menu->name,
                                'sub_menu' => $sub_menu->name,
                                'has_view' => $sub_menu->has_view,
                                'has_add' => $sub_menu->has_add,
                                'has_edit' => $sub_menu->has_edit,
                                'has_delete' => $sub_menu->has_delete,
                            ];
                            $i++;
                        } elseif ($flag == $menu->id) {
                            $data[] = [
                                'no' => "",
                                'id' => $sub_menu->id,
                                'menu' => "",
                                'sub_menu' => $sub_menu->name,
                                'has_view' => $sub_menu->has_view,
                                'has_add' => $sub_menu->has_add,
                                'has_edit' => $sub_menu->has_edit,
                                'has_delete' => $sub_menu->has_delete,
                            ];
                        }
                    }
                } else {
                    $data[] = [
                        'no' => $i,
                        'id' => $menu->id,
                        'menu' => $menu->name,
                        'sub_menu' => '',
                        'has_view' => $menu->has_view,
                        'has_add' => $menu->has_add,
                        'has_edit' => $menu->has_edit,
                        'has_delete' => $menu->has_delete,
                    ];
                    $i++;
                }
            }

            return datatables()->of($data)
                ->addColumn('action', function ($data) {
                    $button = ' <div class="d-flex">';
                    if (can($this->key, 'edit')) {
                        $button .= '<div class="edit">
                                                <button class="btn btn-primary shadow btn-sm sharp mr-1" onclick="edit(this,' . "'" . $data['id'] . "'"  . ')"><i class="fa fa-pencil"></i> Edit</button>
                                            </div>';
                    }
                    if (can($this->key, 'delete')) {
                        $button .= '<div class="remove">
                                                <button class="btn btn-success shadow btn-sm sharp mr-1" onclick="deletee(' . "'" . $data['id'] . "'" . ')"><i class="fa fa-trash"></i> Hapus</button>
                                            </div>';
                    }
                    $button .= '</div>';
                    return $button;
                })
                ->editColumn('view', function ($data) {
                    if ($data['has_view'] == 1) {
                        return '<i class="fa fa-check" style="color:green;"></i>';
                    } else {
                        return '<i class="fa fa-close" style="color:red;"></i>';
                    }
                })
                ->editColumn('add', function ($data) {
                    if ($data['has_add'] == 1) {
                        return '<i class="fa fa-check" style="color:green;"></i>';
                    } else {
                        return '<i class="fa fa-close" style="color:red;"></i>';
                    }
                })
                ->editColumn('edit', function ($data) {
                    if ($data['has_edit'] == 1) {
                        return '<i class="fa fa-check" style="color:green;"></i>';
                    } else {
                        return '<i class="fa fa-close" style="color:red;"></i>';
                    }
                })
                ->editColumn('delete', function ($data) {
                    if ($data['has_delete'] == 1) {
                        return '<i class="fa fa-check" style="color:green;"></i>';
                    } else {
                        return '<i class="fa fa-close" style="color:red;"></i>';
                    }
                })
                ->rawColumns([
                    'action' => 'action',
                    'view' => 'view',
                    'add' => 'add',
                    'edit' => 'edit',
                    'delete' => 'delete',
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
                    $check = Menu::where([
                        'name' => request()->name,
                    ])->first();
                    if ($check) {
                        $validator->errors()->add('name', 'Data ini sudah ada');
                    }
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $data = Menu::create([
                        'menu_id' => $request->menu_id,
                        'name' => $request->name,
                        "keyword" => $request->name,
                        "has_view" => $request->has_view ? 1 : 0,
                        "has_add" => $request->has_add ? 1 : 0,
                        "has_edit" => $request->has_edit ? 1 : 0,
                        "has_delete" => $request->has_delete ? 1 : 0,
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
            $result = Menu::find($request->id);
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
                    $check = Menu::where([
                        'name' => request()->name,
                    ])->where('id', '!=', request()->id)->first();
                    if ($check) {
                        $validator->errors()->add('name', 'Data ini sudah ada');
                    }
                });

                if ($validator->fails()) {
                    $message = $validator->errors();
                    $status = FALSE;
                } else {
                    $data = Menu::find($request->id);
                    $data->menu_id = $request->menu_id;
                    $data->name = $request->name;
                    $data->keyword = $request->name;
                    $data->has_view = $request->has_view ? 1 : 0;
                    $data->has_add = $request->has_add ? 1 : 0;
                    $data->has_edit = $request->has_edit ? 1 : 0;
                    $data->has_delete = $request->has_delete ? 1 : 0;
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
            $data = Menu::find($request->id);
            $data->delete();
            $message = '';
            $status = TRUE;

            return response()->json(['status' => $status, 'message' => $message]);
        }
    }
}
