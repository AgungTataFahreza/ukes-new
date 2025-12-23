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

if (!function_exists('check_date')) {
    function check_date($tanggal)
    {
        $settings = Setting::find(1);
        $date = $settings->date;
        $inputDate = Carbon::parse($tanggal);
        $nextMonthDate = $inputDate->copy()->addMonthsNoOverflow()->day($date);
        $currentDate = Carbon::now();

        $isPast = $nextMonthDate->lessThan($currentDate);

        if ($isPast) {
            return false;
        } else {
            return true;
        }
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

if (!function_exists('unreadMessagesCount')) {
    /**
     * Menghitung jumlah pesan yang belum terbaca untuk user yang sedang login.
     *
     * @return int
     */
    function unreadMessagesCount()
    {
        $count = Message::where('receiver_id', auth()->user()->id)
            ->whereNull('is_read')
            ->count();

        if ($count > 0) {
            $badge = "<span class='badge badge-success'>" . $count . "</span>";
        } else {
            $badge = "";
        }

        return $badge;
    }
}

if (!function_exists('getLogbookPercentage')) {
    function getLogbookPercentage($userId, $month, $year)
    {
        $tugas_pokok = Logbook::where('logbook_category_id', 1)
            ->where('user_id', $userId)
            ->whereYear('date', $year)
            ->whereMonth('date', $month);

        // 1. Jumlah data tugas pokok bulan tersebut (kuantitas)
        $jumlah_tugas_pokok = $tugas_pokok->count();

        // 2. Total jam kerja tugas pokok (dikonversi ke menit untuk perhitungan akurat)
        $total_menit_pokok = ($tugas_pokok->sum('hour') * 60) + $tugas_pokok->sum('minute');

        // Konversi menit kembali ke jam untuk tampilan
        $total_jam_pokok = floor($total_menit_pokok / 60);
        $sisa_menit_pokok = $total_menit_pokok % 60;

        // 3. Persentase kinerja tugas pokok (berdasarkan menit, 1 jam = 60 menit)
        $persentase_pokok = 0;
        if ($total_menit_pokok < (20 * 60)) {
            $persentase_pokok = 0;
        } elseif ($total_menit_pokok >= (20 * 60) && $total_menit_pokok < (30 * 60)) {
            $persentase_pokok = 20;
        } elseif ($total_menit_pokok >= (30 * 60) && $total_menit_pokok < (40 * 60)) {
            $persentase_pokok = 30;
        } elseif ($total_menit_pokok >= (40 * 60) && $total_menit_pokok < (50 * 60)) {
            $persentase_pokok = 40;
        } elseif ($total_menit_pokok >= (50 * 60) && $total_menit_pokok < (60 * 60)) {
            $persentase_pokok = 50;
        } elseif ($total_menit_pokok >= (60 * 60) && $total_menit_pokok < (70 * 60)) {
            $persentase_pokok = 60;
        } elseif ($total_menit_pokok >= (70 * 60) && $total_menit_pokok < (80 * 60)) {
            $persentase_pokok = 70;
        } elseif ($total_menit_pokok >= (80 * 60) && $total_menit_pokok < (90 * 60)) {
            $persentase_pokok = 80;
        } elseif ($total_menit_pokok >= (90 * 60) && $total_menit_pokok < (100 * 60)) {
            $persentase_pokok = 90;
        } elseif ($total_menit_pokok >= (100 * 60)) {
            $persentase_pokok = 100;
        }

        // Filter logbook untuk tugas tambahan (logbook_category_id = 2)
        $tugas_tambahan = Logbook::where('logbook_category_id', 2)
            ->where('user_id', $userId)
            ->whereYear('date', $year)
            ->whereMonth('date', $month);

        // 4. Jumlah data tugas tambahan bulan tersebut (kuantitas)
        $jumlah_tugas_tambahan = $tugas_tambahan->count();

        // 5. Total jam kerja tugas tambahan (dikonversi ke menit untuk perhitungan akurat)
        $total_menit_tambahan = ($tugas_tambahan->sum('hour') * 60) + $tugas_tambahan->sum('minute');

        // Konversi menit kembali ke jam untuk tampilan
        $total_jam_tambahan = floor($total_menit_tambahan / 60);
        $sisa_menit_tambahan = $total_menit_tambahan % 60;

        // 6. Persentase kinerja tugas tambahan (langsung dihitung, maksimal 30%)
        $persentase_tambahan = round(min($total_menit_tambahan / 60, 30));

        // 7. Total persentase dari tugas pokok dan tugas tambahan
        $total_persentase = $persentase_pokok + $persentase_tambahan;
        $total_persentase = min($total_persentase, 100); // Batasi maksimal 100%

        //===================================================================================================
        $tugas_pokok_validasi = Logbook::where([
            'logbook_category_id_validated' => 1,
            'is_validated' => 1
        ])
            ->where('user_id', $userId)
            ->whereYear('date', $year)
            ->whereMonth('date', $month);

        // 1. Jumlah data tugas pokok bulan tersebut (kuantitas)
        $jumlah_tugas_pokok_validasi = $tugas_pokok_validasi->count();

        // 2. Total jam kerja tugas pokok (dikonversi ke menit untuk perhitungan akurat)
        $total_menit_pokok_validasi = ($tugas_pokok_validasi->sum('validated_hour') * 60) + $tugas_pokok_validasi->sum('validated_minute');

        // Konversi menit kembali ke jam untuk tampilan
        $total_jam_pokok_validasi = floor($total_menit_pokok_validasi / 60);
        $sisa_menit_pokok_validasi = $total_menit_pokok_validasi % 60;

        // 3. Persentase kinerja tugas pokok (berdasarkan menit, 1 jam = 60 menit)
        $persentase_pokok_validasi = 0;
        if ($total_menit_pokok_validasi < (20 * 60)) {
            $persentase_pokok_validasi = 0;
        } elseif ($total_menit_pokok_validasi >= (20 * 60) && $total_menit_pokok_validasi < (30 * 60)) {
            $persentase_pokok_validasi = 20;
        } elseif ($total_menit_pokok_validasi >= (30 * 60) && $total_menit_pokok_validasi < (40 * 60)) {
            $persentase_pokok_validasi = 30;
        } elseif ($total_menit_pokok_validasi >= (40 * 60) && $total_menit_pokok_validasi < (50 * 60)) {
            $persentase_pokok_validasi = 40;
        } elseif ($total_menit_pokok_validasi >= (50 * 60) && $total_menit_pokok_validasi < (60 * 60)) {
            $persentase_pokok_validasi = 50;
        } elseif ($total_menit_pokok_validasi >= (60 * 60) && $total_menit_pokok_validasi < (70 * 60)) {
            $persentase_pokok_validasi = 60;
        } elseif ($total_menit_pokok_validasi >= (70 * 60) && $total_menit_pokok_validasi < (80 * 60)) {
            $persentase_pokok_validasi = 70;
        } elseif ($total_menit_pokok_validasi >= (80 * 60) && $total_menit_pokok_validasi < (90 * 60)) {
            $persentase_pokok_validasi = 80;
        } elseif ($total_menit_pokok_validasi >= (90 * 60) && $total_menit_pokok_validasi < (100 * 60)) {
            $persentase_pokok_validasi = 90;
        } elseif ($total_menit_pokok_validasi >= (100 * 60)) {
            $persentase_pokok_validasi = 100;
        }

        // Filter logbook untuk tugas tambahan (logbook_category_id = 2)
        $tugas_tambahan_validasi = Logbook::where([
            'logbook_category_id_validated' => 2,
            'is_validated' => 1
        ])
            ->where('user_id', $userId)
            ->whereYear('date', $year)
            ->whereMonth('date', $month);

        // 4. Jumlah data tugas tambahan bulan tersebut (kuantitas)
        $jumlah_tugas_tambahan_validasi = $tugas_tambahan_validasi->count();

        // 5. Total jam kerja tugas tambahan (dikonversi ke menit untuk perhitungan akurat)
        $total_menit_tambahan_validasi = ($tugas_tambahan_validasi->sum('validated_hour') * 60) + $tugas_tambahan_validasi->sum('validated_minute');

        // Konversi menit kembali ke jam untuk tampilan
        $total_jam_tambahan_validasi = floor($total_menit_tambahan_validasi / 60);
        $sisa_menit_tambahan_validasi = $total_menit_tambahan_validasi % 60;

        // 6. Persentase kinerja tugas tambahan (langsung dihitung, maksimal 30%)
        $persentase_tambahan_validasi = round(min($total_menit_tambahan_validasi / 60, 30));

        // 7. Total persentase dari tugas pokok dan tugas tambahan
        $total_persentase_validasi = $persentase_pokok_validasi + $persentase_tambahan_validasi;
        $total_persentase_validasi = min($total_persentase_validasi, 100); // Batasi maksimal 100%

        $kinerja = [
            'jumlah_tugas_pokok' => $jumlah_tugas_pokok,
            'total_jam_pokok' => $total_jam_pokok,
            'sisa_menit_pokok' => $sisa_menit_pokok,
            'persentase_pokok' => $persentase_pokok,

            'jumlah_tugas_tambahan' => $jumlah_tugas_tambahan,
            'total_jam_tambahan' => $total_jam_tambahan,
            'sisa_menit_tambahan' => $sisa_menit_tambahan,
            'persentase_tambahan' => $persentase_tambahan,

            'total_persentase' => $total_persentase,

            'jumlah_tugas_pokok_validasi' => $jumlah_tugas_pokok_validasi,
            'total_jam_pokok_validasi' => $total_jam_pokok_validasi,
            'sisa_menit_pokok_validasi' => $sisa_menit_pokok_validasi,
            'persentase_pokok_validasi' => $persentase_pokok_validasi,

            'jumlah_tugas_tambahan_validasi' => $jumlah_tugas_tambahan_validasi,
            'total_jam_tambahan_validasi' => $total_jam_tambahan_validasi,
            'sisa_menit_tambahan_validasi' => $sisa_menit_tambahan_validasi,
            'persentase_tambahan_validasi' => $persentase_tambahan_validasi,

            'total_persentase_validasi' => $total_persentase_validasi,
        ];

        return $kinerja;
    }

    if (!function_exists('get_logbook_date')) {
        function get_logbook_date()
        {
            // Ambil daftar tahun dari database
            $years = Logbook::selectRaw('YEAR(date) as year')
                ->groupBy('year')
                ->orderBy('year', 'desc')
                ->pluck('year')
                ->toArray();

            // Ambil daftar bulan dari database
            $months = Logbook::selectRaw('MONTH(date) as month')
                ->groupBy('month')
                ->orderBy('month', 'asc')
                ->pluck('month')
                ->toArray();

            // Tahun yang ingin dicek (bisa berasal dari request atau variabel lain)
            // $checkYears = [2021, 2025]; // Contoh: tahun yang mau dicek
            // $checkMonths = [4, 6, 12]; // Contoh: bulan yang mau dicek

            $validation_months = ValidationMonth::select('month')
                ->groupBy('month')
                ->pluck('month')
                ->toArray();

            $validation_years = ValidationMonth::select('year')
                ->groupBy('year')
                ->pluck('year')
                ->toArray();

            // Tambahkan tahun yang belum ada di array $years
            foreach ($validation_years as $year) {
                if (!in_array($year, $years)) {
                    $years[] = $year;
                }
            }

            // Tambahkan bulan yang belum ada di array $months
            foreach ($validation_months as $month) {
                if (!in_array($month, $months)) {
                    $months[] = $month;
                }
            }

            // Urutkan tahun secara descending
            rsort($years);

            // Urutkan bulan secara ascending
            sort($months);

            return [
                'years' => $years,
                'months' => $months,
            ];
        }
    }

    if (!function_exists('get_behavior_score_date')) {
        function get_behavior_score_date()
        {
            // Ambil daftar tahun dari tabel BehaviorScore
            $years = BehaviorScore::select('year')
                ->groupBy('year')
                ->orderBy('year', 'desc')
                ->pluck('year')
                ->toArray();

            // Ambil daftar bulan dari tabel BehaviorScore
            $months = BehaviorScore::select('month')
                ->groupBy('month')
                ->orderBy('month', 'asc')
                ->pluck('month')
                ->toArray();

            // Ambil daftar bulan dan tahun dari tabel ValidationMonth
            $validation_months = ValidationMonth::select('month')
                ->groupBy('month')
                ->pluck('month')
                ->toArray();

            $validation_years = ValidationMonth::select('year')
                ->groupBy('year')
                ->pluck('year')
                ->toArray();

            // Tambahkan tahun yang belum ada di array $years
            foreach ($validation_years as $year) {
                if (!in_array($year, $years)) {
                    $years[] = $year;
                }
            }

            // Tambahkan bulan yang belum ada di array $months
            foreach ($validation_months as $month) {
                if (!in_array($month, $months)) {
                    $months[] = $month;
                }
            }

            // Urutkan tahun secara descending
            rsort($years);

            // Urutkan bulan secara ascending
            sort($months);

            return [
                'years' => $years,
                'months' => $months,
            ];
        }
    }
}
