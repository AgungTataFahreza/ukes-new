<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BehaviorScoreExport implements FromCollection, WithHeadings, WithMapping
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
            ->with(['behavior_score' => function ($query) {
                $query->where('month', $this->month)
                    ->where('year', $this->year);
            }]);

        if ($this->path !== 'behavior-assessment-all') {
            $user->where(function ($query) {
                $query->where('user_id', auth()->id())
                    ->orWhere('id', auth()->id()); // Menambahkan kondisi untuk user itu sendiri
            });
        }

        return $user->get();
    }

    public function headings(): array
    {
        return ["No", "NIP", "Nama", "Unit Kerja", "Berorientasi Pelayanan", "Akuntabel", "Kompeten", "Harmonis", "Loyal", "Adaptif", "Kolaboratif", "Total", "Rata-rata", "Total Insentif"];
    }

    public function map($user): array
    {
        return [
            ++$this->number,
            $user->user_type_id == 1 ? ("'" . $user->nip) : ("'" . $user->nik),
            $user->nama,
            $user->unit ? $user->unit->name : '',
            $user->behavior_score ? ($user->behavior_score->berorientasi_pelayanan) : '',
            $user->behavior_score ? ($user->behavior_score->akuntabel) : '',
            $user->behavior_score ? ($user->behavior_score->kompeten) : '',
            $user->behavior_score ? ($user->behavior_score->harmonis) : '',
            $user->behavior_score ? ($user->behavior_score->loyal) : '',
            $user->behavior_score ? ($user->behavior_score->adaptif) : '',
            $user->behavior_score ? ($user->behavior_score->kolaboratif) : '',
            $user->behavior_score ? ($user->behavior_score->berorientasi_pelayanan + $user->behavior_score->akuntabel + $user->behavior_score->kompeten + $user->behavior_score->harmonis + $user->behavior_score->loyal + $user->behavior_score->adaptif + $user->behavior_score->kolaboratif) : '',
            $user->behavior_score ? $user->behavior_score->percentage : '',
            $user->behavior_score ? str_replace(".", ",", ((round(($user->behavior_score->percentage * 0.4), 2)) . '%')) : '',
        ];
    }
}
