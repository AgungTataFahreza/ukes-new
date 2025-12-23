<?php

namespace App\Imports;

use App\Models\User;
use App\Models\GrossSalary;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GrossSalaryImport implements ToCollection, WithHeadingRow
{
    protected $year;
    protected $month;

    // Constructor untuk menerima year dan month dari controller
    public function __construct($year, $month)
    {
        $this->year = $year;
        $this->month = $month;
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            // Ambil NIP dan status kehadiran berdasarkan header kolom di Excel
            $nip = $row['nip'];
            $gaji_kotor = $row['gaji_kotor'];
            $kelebihan_kekurangan_bayar = $row['kelebihan_kekurangan_bayar'];

            // Cari id berdasarkan NIP dari tabel Pegawai
            $pegawai = User::where('nip', $nip)->first();
            if (!$pegawai) {
                $pegawai = User::where('nik', $nip)->first();
            }

            if ($pegawai) {
                // Cek apakah data kehadiran dengan id (user_id), year, dan month sudah ada
                $kehadiran = GrossSalary::where('user_id', $pegawai->id)
                    ->where('year', $this->year)
                    ->where('month', $this->month)
                    ->first();

                if ($kehadiran) {
                    // Jika sudah ada, update data kehadiran
                    $kehadiran->update([
                        "salary" => $gaji_kotor,
                        "payment_difference" => $kelebihan_kekurangan_bayar,
                        // Bisa gunakan tanggal dari Excel jika ada
                    ]);
                } else {
                    // Jika belum ada, buat entri baru
                    GrossSalary::create([
                        'user_id' => $pegawai->id,
                        'year' => $this->year,
                        'month' => $this->month,
                        "salary" => $gaji_kotor,
                        "payment_difference" => $kelebihan_kekurangan_bayar,
                    ]);
                }
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
    public function headings(): array
    {
        return [
            'NIP',             // Kolom untuk NIP
            'Status Kehadiran'  // Kolom untuk Status Kehadiran
            // Tambahkan kolom lain sesuai dengan kebutuhan absensi
        ];
    }
}
