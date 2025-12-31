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
            // Ambil NIP dan status kehadiran berdasarkan header kolom di Excel
            $nomor_peserta = $row['nomor_peserta'];
            $nama = $row['nama'];
            $jenis_kelamin = $row['jenis_kelamin'];
            // Cari id berdasarkan NIP dari tabel Pegawai
            $peserta = ApplicantMedicalRecord::where('nomor_peserta', $nomor_peserta)->first();

            if ($peserta) {
                // Jika sudah ada, update data kehadiran
                $peserta->update([
                    "nama" => $nama,
                    "jenis_kelamin" => $jenis_kelamin,
                    "period_id" => $this->period_id,
                    "study_program_id" => $this->study_program_id,
                ]);
            } else {
                // Jika belum ada, buat entri baru
                ApplicantMedicalRecord::create([
                    'nomor_peserta' => $nomor_peserta,
                    'nama' => $nama,
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

    // Header kolom yang akan muncul di template Excel
    // public function headings(): array
    // {
    //     return [
    //         'NIP',             // Kolom untuk NIP
    //         'Status Kehadiran'  // Kolom untuk Status Kehadiran
    //         // Tambahkan kolom lain sesuai dengan kebutuhan absensi
    //     ];
    // }
}
