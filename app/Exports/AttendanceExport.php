<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AttendanceExport implements FromArray, WithHeadings
{
    // Data kosong yang akan menjadi template
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
            'no',             // Kolom untuk NIP
            'nama',  // Kolom untuk Status Kehadiran
            'nip',
            "tugas_belajar",
            "ipk",
            "tidak_hadir",
            "tidak_rekam_masuk_pulang",
            "tl1",
            "tl2",
            "tl3",
            "tl4",
            "psw1",
            "psw2",
            "psw3",
            "psw4",
            "tidak_hadir_apel",
            "izin_apel",
            "tidak_berada_ditempat",
            "cuti_anak_lebih_dari_dua_hari",
            "izin_lebih_dari_dua_hari",
            // Tambahkan kolom lain sesuai dengan kebutuhan absensi
        ];
    }

    // Mapping data agar kolom NIP diformat sebagai teks
    public function map($row): array
    {
        return [
            $row[0], // no
            $row[1], // nama
            \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING, // nip diformat sebagai teks
            $row[3], // tugas_belajar
            $row[4], // tidak_hadir
            $row[5], // tidak_rekam_masuk_pulang
            $row[6], // tl1
            $row[7], // tl2
            $row[8], // tl3
            $row[9], // tl4
            $row[10], // psw1
            $row[11], // psw2
            $row[12], // psw3
            $row[13], // psw4
            $row[14], // tidak_hadir_apel
            $row[15], // izin_apel
            $row[16], // tidak_berada_ditempat
            $row[17], // cuti_anak_lebih_dari_dua_hari
            $row[18], // izin_lebih_dari_dua_hari
            $row[19], // izin_lebih_dari_dua_hari
        ];
    }
}
