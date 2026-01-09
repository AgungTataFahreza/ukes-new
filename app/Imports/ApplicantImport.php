<?php

namespace App\Imports;

use App\Models\ApplicantMedicalRecord;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ApplicantImport implements ToCollection, WithHeadingRow
{
    protected $period_id;
    protected $study_program_id;

    // Constructor untuk menerima period_id dan study_program_id dari controller
    public function __construct($period_id, $study_program_id)
    {
        $this->period_id = $period_id;
        $this->study_program_id = $study_program_id;
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {

            // Skip baris keterangan / kosong
            if (
                empty($row['nomor_peserta']) ||
                strtolower($row['tanggal_lahir']) === 'yyyy-mm-dd' ||
                str_contains(strtolower($row['jenis_kelamin']), 'laki')
            ) {
                continue;
            }

            $nomor_peserta = $row['nomor_peserta'];
            $nama = $row['nama'];
            $tanggal_lahir = $row['tanggal_lahir'];
            $jenis_kelamin = strtoupper($row['jenis_kelamin']);

            // Validasi jenis kelamin
            if (!in_array($jenis_kelamin, ['L', 'P'])) {
                continue;
            }

            $peserta = ApplicantMedicalRecord::where('nomor_peserta', $nomor_peserta)->first();

            if ($peserta) {
                $peserta->update([
                    'nama' => $nama,
                    'tanggal_lahir' => $tanggal_lahir,
                    'jenis_kelamin' => $jenis_kelamin,
                    'period_id' => $this->period_id,
                    'study_program_id' => $this->study_program_id,
                ]);
            } else {
                ApplicantMedicalRecord::create([
                    'nomor_peserta' => $nomor_peserta,
                    'nama' => $nama,
                    'tanggal_lahir' => $tanggal_lahir,
                    'jenis_kelamin' => $jenis_kelamin,
                    'period_id' => $this->period_id,
                    'study_program_id' => $this->study_program_id,
                ]);
            }
        }
    }


    public function array(): array
    {
        return [
            // Ini bisa berisi contoh data, atau bisa dibiarkan kosong untuk template
        ];
    }
}
