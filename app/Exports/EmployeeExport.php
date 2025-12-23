<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EmployeeExport implements FromCollection, WithHeadings, WithMapping
{
    private $number = 0;

    public function __construct() {}

    public function collection()
    {
        $user = User::whereNotNull('user_type_id')
            ->with('superior', 'unit')
            ->orderBy('status_aktif', 'desc');

        return $user->get();
    }

    public function headings(): array
    {
        return ["No", "Nama", "NIP", "NIK", "Unit Kerja", "Atasan Langsung", "Status"];
    }

    public function map($user): array
    {
        return [
            ++$this->number,
            $user->gelar_depan . ' ' . $user->nama . ' ' . $user->gelar_belakang,
            '`' . $user->nip,
            $user->nik,
            $user->unit ? $user->unit->name : '',
            $user->superior ? $user->superior->gelar_depan . ' ' . $user->superior->nama . ' ' . $user->superior->gelar_belakang : '',
            $user->status_aktif == 1 ? 'Aktif' : 'Tidak Aktif',
        ];
    }
}
