<?php

namespace App\Exports;

use App\Models\User; // Ganti dengan model Anda
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class RemunerationExport implements FromCollection, WithHeadings, WithMapping, WithColumnFormatting
{
    public function collection()
    {
        // Ambil data untuk export
        return User::all(); // Ganti dengan query yang sesuai
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'NIP',
            'Grade',
            'Golongan',
            'Gaji Kotor',
            'P1',
            'P2',
            'Kelebihan/Kekurangan Bayar',
            'Remun',
            'PPH 21',
            'Potongan Donasi',
            'Potongan Poltekmart',
            'Remun Bersih',
        ];
    }

    public function map($row): array
    {
        return [
            $row->id, // Ganti sesuai penomoran yang diinginkan
            $row->nama,
            "'" . $row->nip, // Tambahkan petik satu
            $row->grade,
            $row->golongan_pangkat,
            $row->gross_salary_format,
            $row->p1_format,
            $row->p2_format,
            $row->payment_difference_format,
            $row->gross_remuneration_format,
            $row->tax_format,
            $row->deduction_donasi_format,
            $row->deduction_poltekmart_format,
            $row->net_remuneration_format,
        ];
    }

    public function columnFormats(): array
    {
        return [
            'F' => '#,##0', // Format Gaji Kotor
            'G' => '#,##0', // Format P1
            'H' => '#,##0', // Format P2
            'I' => '#,##0', // Format Kelebihan/Kekurangan Bayar
            'J' => '#,##0', // Format Remun
            'K' => '#,##0', // Format PPH 21
            'L' => '#,##0', // Format Potongan Donasi
            'M' => '#,##0', // Format Potongan Poltekmart
            'N' => '#,##0', // Format Remun Bersih
        ];
    }
}
