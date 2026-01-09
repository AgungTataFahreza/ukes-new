<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class ApplicantExport implements FromArray, WithHeadings, WithColumnFormatting
{
    public function array(): array
    {
        return [
            [
                '',
                '',
                'yyyy-mm-dd',
                'L = Laki-laki, P = Perempuan',
            ]
        ];
    }

    public function headings(): array
    {
        return [
            'nomor_peserta',
            'nama',
            'tanggal_lahir',
            'jenis_kelamin',
        ];
    }

    // 🔥 INI KUNCINYA
    public function columnFormats(): array
    {
        return [
            'A' => NumberFormat::FORMAT_TEXT, // nomor_peserta
            'B' => NumberFormat::FORMAT_TEXT, // nama
            'C' => NumberFormat::FORMAT_TEXT, // tanggal_lahir
            'D' => NumberFormat::FORMAT_TEXT, // jenis_kelamin
        ];
    }
}
