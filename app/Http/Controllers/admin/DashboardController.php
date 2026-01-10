<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ApplicantMedicalRecord;
use App\Models\EducationalStaff;
use App\Models\Expense;
use App\Models\OperationalBalance;
use App\Models\Period;
use App\Models\Revenue;
use App\Models\StudyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    private $key;

    public function __construct()
    {
        $this->key = 'Dashboard';
    }

    public function index()
    {
        session()->flash('menu', 'dashboard');
        session()->flash('title', 'Dashboard');
        $data['user'] = auth()->user();
        $data['study_programs'] = StudyProgram::orderBy('name', 'asc')->get();
        $data['periods'] = Period::orderBy('name', 'desc')->get();
        return view('admin.dashboard', $data);
        // echo "berhasil login";
    }

    public function summary(Request $request)
    {
        $periodId = $request->period_id;
        $studyProgramId = $request->study_program_id;

        $baseQuery = ApplicantMedicalRecord::query();

        if ($periodId) {
            $baseQuery->where('period_id', $periodId);
        }

        if ($studyProgramId) {
            $baseQuery->where('study_program_id', $studyProgramId);
        }

        return response()->json([

            // PESERTA
            'jumlah_peserta' => (clone $baseQuery)->count(),

            // REGISTRASI & PEMBAYARAN
            'jumlah_bayar_ukes' => (clone $baseQuery)
                ->where('status_bayar', 1)
                ->count(),

            'jumlah_sudah_registrasi' => (clone $baseQuery)
                ->whereNotNull('tgl_registrasi')
                ->count(),

            // PEMERIKSAAN
            'jumlah_belum_periksa' => (clone $baseQuery)
                ->whereNull('tgl_periksa')
                ->count(),

            'jumlah_periksa_antropometri' => (clone $baseQuery)
                ->whereNotNull('tinggi_badan')
                ->count(),

            'jumlah_periksa_fisik' => (clone $baseQuery)
                ->whereNotNull('buta_warna')
                ->count(),

            'jumlah_periksa_fisik_2' => (clone $baseQuery)
                ->whereNotNull('status_jantung')
                ->count(),

            'jumlah_periksa_gigi' => (clone $baseQuery)
                ->whereNotNull('status_gigi')
                ->count(),

            'jumlah_periksa_narkoba' => (clone $baseQuery)
                ->where(function ($q) {
                    $q->whereNotNull('amp')
                        ->orWhereNotNull('mop')
                        ->orWhereNotNull('thc');
                })
                ->count(),

            // LENGKAP
            'jumlah_periksa_lengkap' => (clone $baseQuery)
                ->whereNotNull('tinggi_badan')
                ->whereNotNull('buta_warna')
                ->whereNotNull('status_jantung')
                ->whereNotNull('status_gigi')
                ->where(function ($q) {
                    $q->whereNotNull('amp')
                        ->orWhereNotNull('mop')
                        ->orWhereNotNull('thc');
                })
                ->count(),

            // HASIL AKHIR
            'jumlah_hasil_dapat' => (clone $baseQuery)
                ->where('rekomendasi', 'Dapat')
                ->count(),

            'jumlah_hasil_tidak_dapat' => (clone $baseQuery)
                ->where('rekomendasi', 'Tidak Dapat')
                ->count(),
        ]);
    }
}
