<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class LogbookValidationExport implements FromCollection, WithHeadings, WithMapping
{
    private $number = 0;
    protected $path, $month, $year;

    public function __construct($path, $month, $year)
    {
        $this->path = $path;
        $this->month = $month;
        $this->year = $year;
    }

    public function collection()
    {
        $user = User::where('user_type_id', 1)
            ->whereNotNull('nip')
            ->where('status_aktif', 1)
            ->orderBy('nama', 'asc')
            ->with(['logbook_percentage' => function ($query) {
                $query->where('year', $this->year)
                    ->where('month', $this->month);
            }]);

        if ($this->path !== 'logbook-validation-all') {
            $user->where(function ($query) {
                $query->where('user_id', auth()->id())
                    ->orWhere('id', auth()->id()); // Menambahkan kondisi untuk user itu sendiri
            });
        }

        return $user->get();
    }

    public function headings(): array
    {
        return ["No", "NIP/NIK", "Nama", "Jurusan",  "Total Waktu", "Total Insentif(60%)"];
    }

    public function map($user): array
    {
        // $kinerja = getLogbookPercentage($user->id, $this->month, $this->year);

        return [
            ++$this->number,
            $user->user_type_id == 1 ? ("'" . $user->nip) : ("'" . $user->nik),
            $user->nama,
            $user->unit ? $user->unit->name : '',
            // $kinerja['persentase_pokok_validasi'],
            // $kinerja['persentase_tambahan_validasi'],
            $user->logbook_percentage ? $user->logbook_percentage->score  : '',
            $user->logbook_percentage ? str_replace(".", ",", (($user->logbook_percentage->score * 0.6)) . '%') : '',
        ];
    }
}
