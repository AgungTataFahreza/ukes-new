<?php

namespace App\Http\Controllers;

use App\Models\AccountCode;
use App\Models\BehaviorScore;
use App\Models\Deduction;
use App\Models\EducationalStaff;
use App\Models\Expense;
use App\Models\Logbook;
use App\Models\Major;
use App\Models\Menu;
use App\Models\OperationalBalance;
use App\Models\Revenue;
use App\Models\Role;
use App\Models\RolePermission;
use App\Models\Test;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\Message;
use App\Models\Setting;
use Carbon\Carbon;

class TestController extends Controller
{
    // private $key;
    // private $permissions;

    // public function __construct()
    // {
    //     $this->key = 'Pengaturan';
    //     // $this->permissions = store_permissions();
    //     $this->middleware(function ($request, $next) {
    //         $this->permissions = store_permissions();
    //         return $next($request);
    //     });
    // }

    public function index(Request $request)
    {
        $tanggal = '2025-12-31';
        $settings = Setting::find(1);
        $date = $settings->date;
        $inputDate = Carbon::parse($tanggal);
        $nextMonthDate = $inputDate->copy()->addMonthsNoOverflow()->day($date);
        $currentDate = Carbon::now();

        $isPast = $nextMonthDate->lessThan($currentDate);

        // echo "Tanggal Bulan Depan";
        // echo "<br>";
        // var_dump($nextMonthDate);
        // echo "<br>";
        // echo "<br>";
        // echo "Tanggal Sekarang";
        // echo "<br>";
        // var_dump($currentDate);
        // echo "<br>";
        // echo "<br>";

        echo "tanggal inputan: " . $inputDate->format('Y-m-d');
        echo "<br>";
        echo "<br>";

        echo "Apakah " . $currentDate->format('Y-m-d') . " sudah lewat dari " .  $nextMonthDate->format('Y-m-d') . " ?";
        echo "<br>";
        echo "<br>";
        if ($isPast) {
            // return false;
            echo "false-Sudah lewat";
        } else {
            // return true;
            echo "true-Belum lewat";
        }
    }

    public function import_no_rek()
    {
        // Test::query()->update([
        //     'status' => null, // Ganti `column_name` dengan nama kolom yang ingin diperbarui dan `new_value` dengan nilai baru.
        // ]);
        $tests = Test::all();

        foreach ($tests as $test) {
            $user = User::where('nip', $test->nip)->first();

            if ($user) {
                $user->no_rekening = $test->no_rek;
                $user->save();
            }
        }
    }

    public function import_perilaku()
    {
        // Test::query()->update([
        //     'status' => null, // Ganti `column_name` dengan nama kolom yang ingin diperbarui dan `new_value` dengan nilai baru.
        // ]);
        $tests = Test::whereNull('date_edited')->get();

        foreach ($tests as $test) {
            $user = User::where('nip', $test->nip)->first();

            if ($user) {
                // Cek apakah $test->jam memiliki format yang benar
                // if (isset($test->jam) && strpos($test->jam, ":") !== false) {
                //     $jamParts = explode(":", $test->jam);

                //     // Pastikan jamParts memiliki dua elemen, jika tidak, isi dengan "00"
                //     $hour = isset($jamParts[0]) ? $jamParts[0] : "00";
                //     $minute = isset($jamParts[1]) ? $jamParts[1] : "00";
                // } else {
                //     // Jika format jam tidak sesuai atau null, isi dengan "00"
                //     $hour = "00";
                //     $minute = "00";
                // }

                BehaviorScore::create([
                    "user_id" => $user->id,
                    "month" => $test->bln_nilai,
                    "year" => $test->thn_nilai,
                    "berorientasi_pelayanan" => $test->n_1,
                    "akuntabel" => $test->n_2,
                    "kompeten" => $test->n_3,
                    "harmonis" => $test->n_4,
                    "loyal" => $test->n_5,
                    "adaptif" => $test->n_6,
                    "kolaboratif" => $test->n_7
                ]);

                $test->date_edited = date('Y-m-d');
                $test->save();

                // Deduction::create([
                //     "user_id" => $user->id,
                //     "name" => "Donasi",
                //     "amount" => $test->potongan_donasi,
                // ]);

                // Deduction::create([
                //     "user_id" => $user->id,
                //     "name" => "Poltekmart",
                //     "amount" => $test->potongan_poltekmart,
                // ]);
            }
        }
    }

    function import_logbook()
    {
        $tests = Test::whereNull('status')->get();

        foreach ($tests as $test) {
            $user = User::where('nip', $test->username)->first();

            if ($user) {
                // Cek apakah $test->jam memiliki format yang benar
                if (isset($test->jam) && strpos($test->jam, ":") !== false) {
                    $jamParts = explode(":", $test->jam);

                    // Pastikan jamParts memiliki dua elemen, jika tidak, isi dengan "00"
                    $hour = isset($jamParts[0]) ? $jamParts[0] : "00";
                    $minute = isset($jamParts[1]) ? $jamParts[1] : "00";
                } else {
                    // Jika format jam tidak sesuai atau null, isi dengan "00"
                    $hour = "00";
                    $minute = "00";
                }

                Logbook::create([
                    "user_id" => $user->id,
                    "date" => $test->tanggal,
                    "activity" => $test->deskripsi,
                    "logbook_category_id" => ($test->kategori + 1),
                    "hour" => $hour,
                    "minute" => $minute,
                    "validated_hour" => $hour,
                    "validated_minute" => $minute,
                    "note" => '',
                    "total_activity" => $test->jumlah,
                    "output" => $test->output,
                    "is_validated" => $test->validasi,
                    "validated_at" => "",
                    "validated_by" => "",
                    "logbook_category_id_validated" => ($test->kategori + 1),
                ]);

                $test->status = 1;
                $test->save();

                // Deduction::create([
                //     "user_id" => $user->id,
                //     "name" => "Donasi",
                //     "amount" => $test->potongan_donasi,
                // ]);

                // Deduction::create([
                //     "user_id" => $user->id,
                //     "name" => "Poltekmart",
                //     "amount" => $test->potongan_poltekmart,
                // ]);
            }
        }
    }

    function hitungP2IndexBersih($result)
    {
        $p2 = 0;
        $p2_index = 0;
        $persentase_logbook = 0;
        $persentase_perilaku = 0;
        $persentase_potongan_kehadiran = 0;
        $p2_index_bersih = 0;

        // Hitung p2 dan p2_index jika ada posisi internal
        if ($result->internal_position != null) {
            $p2 = $result->internal_position->p2;
            $p2_index = $result->internal_position->p2 * $result->index;
        }

        // Perhitungan logbook
        // Perhitungan logbook
        if (count($result->logbooks) > 0) {
            $tugas_pokok = $result->logbooks->where('logbook_category_id', 1);
            $total_jam_pokok = $tugas_pokok->sum('validated_hour') + floor($tugas_pokok->sum('validated_minute') / 60);
            $persentase_pokok = 0;

            if ($total_jam_pokok > 20 && $total_jam_pokok <= 30) $persentase_pokok = 20;
            elseif ($total_jam_pokok > 30 && $total_jam_pokok <= 40) $persentase_pokok = 30;
            elseif ($total_jam_pokok > 40 && $total_jam_pokok <= 50) $persentase_pokok = 40;
            elseif ($total_jam_pokok > 50 && $total_jam_pokok <= 60) $persentase_pokok = 50;
            elseif ($total_jam_pokok > 60 && $total_jam_pokok <= 70) $persentase_pokok = 60;
            elseif ($total_jam_pokok > 70 && $total_jam_pokok <= 80) $persentase_pokok = 70;
            elseif ($total_jam_pokok > 80 && $total_jam_pokok <= 90) $persentase_pokok = 80;
            elseif ($total_jam_pokok > 90 && $total_jam_pokok <= 100) $persentase_pokok = 90;
            elseif ($total_jam_pokok > 100) $persentase_pokok = 100;

            // Perhitungan Tugas Tambahan
            $tugas_tambahan = $result->logbooks->where('logbook_category_id', 2);
            $total_jam_tambahan = $tugas_tambahan->sum('validated_hour') + floor($tugas_tambahan->sum('validated_minute') / 60);
            $persentase_tambahan = min($total_jam_tambahan, 30);

            // Total persentase kinerja
            $total_persentase = min($persentase_pokok + $persentase_tambahan, 100);
            $persentase_logbook = (0.6 * $total_persentase) / 100;
        }


        // Perhitungan Persentase Perilaku
        if ($result->behavior_score != null) {
            $persentase_perilaku = (($result->behavior_score->berorientasi_pelayanan +
                $result->behavior_score->akuntabel +
                $result->behavior_score->harmonis +
                $result->behavior_score->kompeten +
                $result->behavior_score->loyal +
                $result->behavior_score->adaptif +
                $result->behavior_score->kolaboratif) / 700) * 0.4;
            $persentase_perilaku = round($persentase_perilaku, 4);
        }

        // Perhitungan Potongan Kehadiran
        if ($result->attendance != null) {
            $tidak_hadir = $result->attendance->tidak_hadir * (3);
            $tidak_rekam_masuk_pulang = $result->attendance->tidak_rekam_masuk_pulang * (1.5);
            $tl1 = $result->attendance->tl1 * (0.5);
            $tl2 = $result->attendance->tl2 * (1);
            $tl3 = $result->attendance->tl3 * (1.25);
            $tl4 = $result->attendance->tl4 * (1.5);
            $psw1 = $result->attendance->psw1 * (0.5);
            $psw2 = $result->attendance->psw2 * (1);
            $psw3 = $result->attendance->psw3 * (1.25);
            $psw4 = $result->attendance->psw4 * (1.5);
            $total_potongan_absensi = $tidak_hadir + $tidak_rekam_masuk_pulang + $tl1 + $tl2 + $tl3 + $tl4 + $psw1 + $psw2 + $psw3 + $psw4;

            $tidak_hadir_apel = $result->attendance->tidak_hadir_apel * (3);
            $izin_apel = $result->attendance->izin_apel * (1.5);
            $tidak_berada_ditempat = $result->attendance->tidak_berada_ditempat * (1);
            $cuti_anak_lebih_dari_dua_hari = $result->attendance->cuti_anak_lebih_dari_dua_hari * (2.5);
            $izin_lebih_dari_dua_hari = $result->attendance->izin_lebih_dari_dua_hari * (2.5);
            $total_potongan_disiplin = $tidak_hadir_apel + $izin_apel + $tidak_berada_ditempat + $cuti_anak_lebih_dari_dua_hari + $izin_lebih_dari_dua_hari;

            $persentase_potongan_kehadiran = round((($total_potongan_absensi + $total_potongan_disiplin) / 100), 2);
        }

        // Perhitungan P2 Index Bersih
        if ($result->attendance == null || $result->attendance->tugas_belajar != 1) {
            $p2_index_kotor = ($p2_index * $persentase_logbook) + ($p2_index * $persentase_perilaku);
            $p2_index_bersih = $p2_index_kotor - ($p2_index_kotor * $persentase_potongan_kehadiran);
        } else {
            if ($result->attendance->ipk < 3.00) {
                $p2_index_bersih = $p2_index * 0.6;
            } elseif ($result->attendance->ipk > 3.00 && $result->attendance->ipk <= 3.50) {
                $p2_index_bersih = $p2_index * 0.8;
            } elseif ($result->attendance->ipk > 3.50 && $result->attendance->ipk <= 3.75) {
                $p2_index_bersih = $p2_index * 0.9;
            } else {
                $p2_index_bersih = $p2_index;
            }
        }

        return $p2_index_bersih;
    }

    function hitungP2IndexKotor($result)
    {
        $p2 = 0;
        $p2_index = 0;
        $persentase_logbook = 0;
        $persentase_perilaku = 0;
        $persentase_potongan_kehadiran = 0;
        $p2_index_bersih = 0;

        // Hitung p2 dan p2_index jika ada posisi internal
        if ($result->internal_position != null) {
            $p2 = $result->internal_position->p2;
            $p2_index = $result->internal_position->p2 * $result->index;
        }

        // Perhitungan logbook
        // Perhitungan logbook
        if (count($result->logbooks) > 0) {
            $tugas_pokok = $result->logbooks->where('logbook_category_id', 1);
            $total_jam_pokok = $tugas_pokok->sum('validated_hour') + floor($tugas_pokok->sum('validated_minute') / 60);
            $persentase_pokok = 0;

            if ($total_jam_pokok > 20 && $total_jam_pokok <= 30) $persentase_pokok = 20;
            elseif ($total_jam_pokok > 30 && $total_jam_pokok <= 40) $persentase_pokok = 30;
            elseif ($total_jam_pokok > 40 && $total_jam_pokok <= 50) $persentase_pokok = 40;
            elseif ($total_jam_pokok > 50 && $total_jam_pokok <= 60) $persentase_pokok = 50;
            elseif ($total_jam_pokok > 60 && $total_jam_pokok <= 70) $persentase_pokok = 60;
            elseif ($total_jam_pokok > 70 && $total_jam_pokok <= 80) $persentase_pokok = 70;
            elseif ($total_jam_pokok > 80 && $total_jam_pokok <= 90) $persentase_pokok = 80;
            elseif ($total_jam_pokok > 90 && $total_jam_pokok <= 100) $persentase_pokok = 90;
            elseif ($total_jam_pokok > 100) $persentase_pokok = 100;

            // Perhitungan Tugas Tambahan
            $tugas_tambahan = $result->logbooks->where('logbook_category_id', 2);
            $total_jam_tambahan = $tugas_tambahan->sum('validated_hour') + floor($tugas_tambahan->sum('validated_minute') / 60);
            $persentase_tambahan = min($total_jam_tambahan, 30);

            // Total persentase kinerja
            $total_persentase = min($persentase_pokok + $persentase_tambahan, 100);
            $persentase_logbook = (0.6 * $total_persentase) / 100;
        }


        // Perhitungan Persentase Perilaku
        if ($result->behavior_score != null) {
            $persentase_perilaku = (($result->behavior_score->berorientasi_pelayanan +
                $result->behavior_score->akuntabel +
                $result->behavior_score->harmonis +
                $result->behavior_score->kompeten +
                $result->behavior_score->loyal +
                $result->behavior_score->adaptif +
                $result->behavior_score->kolaboratif) / 700) * 0.4;
            $persentase_perilaku = round($persentase_perilaku, 4);
        }

        // Perhitungan P2 Index Bersih
        if ($result->attendance == null || $result->attendance->tugas_belajar != 1) {
            $p2_index_kotor = ($p2_index * $persentase_logbook) + ($p2_index * $persentase_perilaku);
            return $p2_index_kotor;
        } else {
            if ($result->attendance->ipk < 3.00) {
                $p2_index_bersih = $p2_index * 0.6;
                return $p2_index_bersih;
            } elseif ($result->attendance->ipk > 3.00 && $result->attendance->ipk <= 3.50) {
                $p2_index_bersih = $p2_index * 0.8;
                return $p2_index_bersih;
            } elseif ($result->attendance->ipk > 3.50 && $result->attendance->ipk <= 3.75) {
                $p2_index_bersih = $p2_index * 0.9;
                return $p2_index_bersih;
            } else {
                $p2_index_bersih = $p2_index;
                return $p2_index_bersih;
            }
        }
    }

    function hitungPajak($result)
    {
        $gaji_kotor = 0;
        $p1_index_bersih = 0;
        $p2_index_bersih = $this->hitungP2IndexBersih($result);

        if ($result->gross_salary != null) {
            $gaji_kotor = $result->gross_salary->salary;
        }

        if ($result->internal_position != null) {
            $p1_index_bersih = ($result->internal_position->p1 * $result->index);
        }
        $remun_kotor = $p1_index_bersih + $p2_index_bersih;
        $total_remun_setahun = $remun_kotor * 12;
        $gaji_kotor_setahun = $gaji_kotor * 12;

        $total_penghasilan_bruto = $total_remun_setahun + $gaji_kotor_setahun;

        if (($total_penghasilan_bruto * 0.05) >= (12 * 500000)) {
            $biaya_jabatan_bruto = 12 * 500000;
        } else {
            $biaya_jabatan_bruto = $total_penghasilan_bruto * 0.05;
        }

        $iuran_pensiun_setahun = 200000 * 12;

        $penghasilan_netto_atas_gaji_dan_tunjangan = $total_penghasilan_bruto - $biaya_jabatan_bruto - $iuran_pensiun_setahun;

        $ptkp = 0;

        if ($result->ptkp != null) {
            $ptkp = $result->ptkp->ptkp;
        }

        $pkp = $penghasilan_netto_atas_gaji_dan_tunjangan - $ptkp;

        if ($pkp < 0) {
            $prog1 = 0;
        } elseif ($pkp < 60000000) {
            $prog1 = 0.05 * $pkp;
        } else {
            $prog1 = 0.05 * 60000000;
        }

        if (($pkp - 60000000) < 0) {
            $prog2 = 0;
        } else {
            $prog2 = 0.15 * ($pkp - 60000000);
        }

        $pph21 = ($prog1 + $prog2) / 12;

        return $pph21;
    }

    function hitungRemunKotor($result)
    {
        $p1_index_bersih = 0;
        $p2_index_bersih = $this->hitungP2IndexBersih($result);
        $kelebihan_kekurangan_bayar = 0;
        if ($result->internal_position != null) {
            $p1_index_bersih = ($result->internal_position->p1 * $result->index);
        }

        if ($result->gross_salary != null) {
            $kelebihan_kekurangan_bayar = $result->gross_salary->payment_difference * (-1);
        }

        $remun_kotor = ($p1_index_bersih + $p2_index_bersih) + $kelebihan_kekurangan_bayar;

        return $remun_kotor;
    }

    function potonganAbsensi($data)
    {
        $total_potongan = 0;
        if ($data->attendance != null) {
            $tidak_hadir = $data->attendance->tidak_hadir * (3);
            $tidak_rekam_masuk_pulang = $data->attendance->tidak_rekam_masuk_pulang * (1.5);
            $tl1 = $data->attendance->tl1 * (0.5);
            $tl2 = $data->attendance->tl2 * (1);
            $tl3 = $data->attendance->tl3 * (1.25);
            $tl4 = $data->attendance->tl4 * (1.5);
            $psw1 = $data->attendance->psw1 * (0.5);
            $psw2 = $data->attendance->psw2 * (1);
            $psw3 = $data->attendance->psw3 * (1.25);
            $psw4 = $data->attendance->psw4 * (1.5);
            $total_potongan_absensi = $tidak_hadir + $tidak_rekam_masuk_pulang + $tl1 + $tl2 + $tl3 + $tl4 + $psw1 + $psw2 + $psw3 + $psw4;
            $tidak_hadir_apel = $data->attendance->tidak_hadir_apel * (3);
            $izin_apel = $data->attendance->izin_apel * (1.5);
            $tidak_berada_ditempat = $data->attendance->tidak_berada_ditempat * (1);
            $cuti_anak_lebih_dari_dua_hari = $data->attendance->cuti_anak_lebih_dari_dua_hari * (2.5);
            $izin_lebih_dari_dua_hari = $data->attendance->izin_lebih_dari_dua_hari * (2.5);
            $total_potongan_disiplin = $tidak_hadir_apel + $izin_apel + $tidak_berada_ditempat + $cuti_anak_lebih_dari_dua_hari + $izin_lebih_dari_dua_hari;
            $total_potongan = ($total_potongan_absensi + $total_potongan_disiplin) / 100;
            // return $total_potongan;
        }
        // return $data->attendance;
        return $total_potongan;
    }
}
