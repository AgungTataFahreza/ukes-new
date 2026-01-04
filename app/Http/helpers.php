<?php

use App\Models\BehaviorScore;
use App\Models\Logbook;
use App\Models\Menu;
use App\Models\Message;
use App\Models\RolePermission;
use App\Models\Setting;
use App\Models\ValidationMonth;
use App\Models\WebServiceSetting;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

if (!function_exists('can')) {
    function can($menu, $access)
    {
        $user = auth()->user();
        $menu_data = Menu::where('keyword', $menu)->orderBy('name', 'ASC')->first();
        if ($menu_data) {
            $check_permission = RolePermission::where(['role_id' => $user->role_id, 'menu_id' => $menu_data->id])->first();
            if ($check_permission) {
                $check = json_decode(json_encode($check_permission), true);
                if ($check[$access . '_access'] == 1) {
                    return true;
                }
            }
        }
        return false;
    }
}

if (!function_exists('can_access')) {
    function can_access($permissions, $menu, $access)
    {
        // Memastikan menu ada dalam array permissions
        if (isset($permissions[$menu])) {
            return $permissions[$menu][$access] == 1;
        }

        // Jika menu atau akses tidak ditemukan, return false
        return false;
    }
}

if (!function_exists('store_permissions')) {
    function store_permissions()
    {
        $permissions = [];
        $user = auth()->user();
        $role_id = $user->role_id;

        // Mengambil semua menu beserta role_permission yang relevan dengan user
        $menus = Menu::with(['role_permission' => function ($query) use ($user, $role_id) {
            $query->where('role_id', $role_id);
        }])->get();

        // Inisialisasi array permissions
        foreach ($menus as $menu) {
            $permissions[$menu->keyword] = [
                'view' => $menu->role_permission->view_access ?? 0,
                'add' => $menu->role_permission->add_access ?? 0,
                'edit' => $menu->role_permission->edit_access ?? 0,
                'delete' => $menu->role_permission->delete_access ?? 0,
                'upload' => $menu->role_permission->upload_access ?? 0,
            ];
        }

        return $permissions;
    }
}

if (!function_exists('can_parent')) {
    function can_parent($parent)
    {
        $user = auth()->user();
        $menu_data = Menu::where('name', $parent)
            ->with('children')
            ->first();

        foreach ($menu_data->children as $item) {
            $check_permission = RolePermission::where(['role_id' => $user->role_id, 'menu_id' => $item->id])->first();
            if ($check_permission) {
                if ($check_permission->view_access == 1) {
                    return true;
                }
            }
        }
        return false;
    }
}

if (!function_exists('can_parent_access')) {
    function can_parent_access($parent)
    {
        $user = auth()->user();

        // Cari menu parent beserta children dan role_permission-nya
        $menu_data = Menu::where('name', $parent)
            ->with(['children.role_permission' => function ($query) use ($user) {
                $query->where('role_id', $user->role_id);
            }])
            ->first();

        // Periksa setiap child untuk akses view
        if ($menu_data) {
            foreach ($menu_data->children as $item) {
                if ($item->role_permission && $item->role_permission->view_access == 1) {
                    return true;
                }
            }
        }

        return false;
    }
}

if (!function_exists('getBulanIndonesia')) {
    function getBulanIndonesia($bulan)
    {
        $namaBulan = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        ];

        // Memastikan input bulan berada di antara 1 hingga 12
        return isset($namaBulan[$bulan]) ? $namaBulan[$bulan] : 'Bulan tidak valid';
    }
}

if (!function_exists('formatRupiah')) {
    function formatRupiah($angka)
    {
        return 'Rp ' . number_format($angka, 0, ',', '.');
    }
}

if (!function_exists('ifEmptyInput')) {
    function ifEmptyInput($value)
    {
        return empty($value) ? 'DBN' : $value;
    }
}

if (!function_exists('ifEmptySelect')) {
    function ifEmptySelect($value)
    {
        return empty($value) ? 'Normal' : $value;
    }
}
