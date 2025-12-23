<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Attendance;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AttendanceImport implements ToCollection, WithHeadingRow
{
    protected $year;
    protected $month;

    // Constructor untuk menerima year dan month dari controller
    public function __construct($year, $month)
    {
        $this->year = $year;
        $this->month = $month;
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            // Ambil NIP dan status kehadiran berdasarkan header kolom di Excel
            $nip = $row['nip'];
            $tugas_belajar = $row['tugas_belajar'];
            $ipk = $row['ipk'];
            $tidak_hadir = $row['tidak_hadir'];
            $tidak_rekam_masuk_pulang = $row['tidak_rekam_masuk_pulang'];
            $tl1 = $row['tl1'];
            $tl2 = $row['tl2'];
            $tl3 = $row['tl3'];
            $tl4 = $row['tl4'];
            $psw1 = $row['psw1'];
            $psw2 = $row['psw2'];
            $psw3 = $row['psw3'];
            $psw4 = $row['psw4'];
            $tidak_hadir_apel = $row['tidak_hadir_apel'];
            $izin_apel = $row['izin_apel'];
            $tidak_berada_ditempat = $row['tidak_berada_ditempat'];
            $cuti_anak_lebih_dari_dua_hari = $row['cuti_anak_lebih_dari_dua_hari'];
            $izin_lebih_dari_dua_hari = $row['izin_lebih_dari_dua_hari'];

            // Cari id berdasarkan NIP dari tabel Pegawai
            $pegawai = User::where('nip', $nip)->first();
            if (!$pegawai) {
                $pegawai = User::where('nik', $nip)->first();
            }

            if ($pegawai) {
                // Cek apakah data kehadiran dengan id (user_id), year, dan month sudah ada
                $kehadiran = Attendance::where('user_id', $pegawai->id)
                    ->where('year', $this->year)
                    ->where('month', $this->month)
                    ->first();

                if ($kehadiran) {
                    // Jika sudah ada, update data kehadiran
                    $kehadiran->update([
                        "tugas_belajar" => $tugas_belajar,
                        "ipk" => $ipk,
                        "tl1" => $tl1,
                        "tl2" => $tl2,
                        "tl3" => $tl3,
                        "tl4" => $tl4,
                        "psw1" => $psw1,
                        "psw2" => $psw2,
                        "psw3" => $psw3,
                        "psw4" => $psw4,
                        "tidak_hadir" => $tidak_hadir,
                        "tidak_rekam_masuk_pulang" => $tidak_rekam_masuk_pulang,
                        "tidak_hadir_apel" => $tidak_hadir_apel,
                        "izin_apel" => $izin_apel,
                        "tidak_berada_ditempat" => $tidak_berada_ditempat,
                        "cuti_anak_lebih_dari_dua_hari" => $cuti_anak_lebih_dari_dua_hari,
                        "izin_lebih_dari_dua_hari" => $izin_lebih_dari_dua_hari, // Bisa gunakan tanggal dari Excel jika ada
                    ]);
                } else {
                    // Jika belum ada, buat entri baru
                    Attendance::create([
                        'user_id' => $pegawai->id,
                        'year' => $this->year,
                        'month' => $this->month,
                        "tugas_belajar" => $tugas_belajar,
                        "ipk" => $ipk,
                        "tl1" => $tl1,
                        "tl2" => $tl2,
                        "tl3" => $tl3,
                        "tl4" => $tl4,
                        "psw1" => $psw1,
                        "psw2" => $psw2,
                        "psw3" => $psw3,
                        "psw4" => $psw4,
                        "tidak_hadir" => $tidak_hadir,
                        "tidak_rekam_masuk_pulang" => $tidak_rekam_masuk_pulang,
                        "tidak_hadir_apel" => $tidak_hadir_apel,
                        "izin_apel" => $izin_apel,
                        "tidak_berada_ditempat" => $tidak_berada_ditempat,
                        "cuti_anak_lebih_dari_dua_hari" => $cuti_anak_lebih_dari_dua_hari,
                        "izin_lebih_dari_dua_hari" => $izin_lebih_dari_dua_hari, // Bisa gunakan tanggal dari Excel jika ada
                    ]);
                }
            }
        }
    }

    public function array(): array
    {
        return [
            // Ini bisa berisi contoh data, atau bisa dibiarkan kosong untuk template
        ];
    }

    // Header kolom yang akan muncul di template Excel
    public function headings(): array
    {
        return [
            'NIP',             // Kolom untuk NIP
            'Status Kehadiran'  // Kolom untuk Status Kehadiran
            // Tambahkan kolom lain sesuai dengan kebutuhan absensi
        ];
    }
}
