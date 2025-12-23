<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GrossSalaryExport implements FromArray, WithHeadings
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
            "gaji_kotor",
            "kelebihan_kekurangan_bayar",
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
        ];
    }
}
