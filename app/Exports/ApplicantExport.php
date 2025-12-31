<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ApplicantExport implements FromArray, WithHeadings
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
            'nomor_peserta',             // Kolom untuk nomor_peserta
            'nama',  // Kolom untuk nama
            'jenis_kelamin',
            // Tambahkan kolom lain sesuai dengan kebutuhan absensi
        ];
    }

    // Mapping data agar kolom NIP diformat sebagai teks
    public function map($row): array
    {
        return [
            \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING, // nomor_peserta diformat sebagai teks
            $row[1], // nama
            $row[2], // jenis_kelamin
        ];
    }
}
