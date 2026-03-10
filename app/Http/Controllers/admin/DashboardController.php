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

        // ==========================================
        // FUNGSI HELPER MENGAMBIL TOTAL & GROUP BY TANGGAL
        // (Tanpa limit, agar sisa data bisa masuk Tooltip)
        // ==========================================
        $getStats = function ($queryObj, $dateColumn = 'tgl_periksa') {
            $total = (clone $queryObj)->count();

            $grouped = (clone $queryObj)
                ->select(DB::raw("DATE($dateColumn) as tanggal"), DB::raw('count(*) as jumlah'))
                ->whereNotNull($dateColumn)
                ->groupBy(DB::raw("DATE($dateColumn)"))
                ->orderBy('tanggal', 'desc')
                ->pluck('jumlah', 'tanggal')
                ->toArray();

            return [
                'total' => $total,
                'details' => $grouped
            ];
        };

        // Query khusus agar tidak saling tumpang tindih
        $qRegistrasi = (clone $baseQuery)->whereNotNull('tgl_registrasi');
        $qAntropometri = (clone $baseQuery)->whereNotNull('tinggi_badan');
        $qFisik = (clone $baseQuery)->whereNotNull('buta_warna');
        $qFisik2 = (clone $baseQuery)->whereNotNull('status_jantung');
        $qGigi = (clone $baseQuery)->whereNotNull('status_gigi');
        $qNarkoba = (clone $baseQuery)->where(function ($q) {
            $q->whereNotNull('amp')->orWhereNotNull('mop')->orWhereNotNull('thc');
        });
        $qLengkap = (clone $baseQuery)->whereNotNull('tinggi_badan')
            ->whereNotNull('buta_warna')
            ->whereNotNull('status_jantung')
            ->whereNotNull('status_gigi')
            ->where(function ($q) {
                $q->whereNotNull('amp')->orWhereNotNull('mop')->orWhereNotNull('thc');
            });
        $qDapat = (clone $baseQuery)->where('rekomendasi', 'Dapat');
        $qTidakDapat = (clone $baseQuery)->where('rekomendasi', 'Tidak Dapat');

        return response()->json([
            // Tidak ada grouping karena ini total keseluruhan
            'jumlah_peserta'          => ['total' => (clone $baseQuery)->count(), 'details' => []],

            // Grouping berdasarkan tgl_registrasi
            'jumlah_bayar_ukes'       => $getStats((clone $baseQuery)->where('status_bayar', 1), 'tgl_registrasi'),
            'jumlah_sudah_registrasi' => $getStats($qRegistrasi, 'tgl_registrasi'),

            // Grouping berdasarkan tgl_periksa
            'jumlah_belum_periksa'        => ['total' => (clone $baseQuery)->whereNull('tgl_periksa')->count(), 'details' => []],
            'jumlah_periksa_lengkap'      => $getStats($qLengkap, 'tgl_periksa'),
            'jumlah_periksa_antropometri' => $getStats($qAntropometri, 'tgl_periksa'),
            'jumlah_periksa_fisik'        => $getStats($qFisik, 'tgl_periksa'),
            'jumlah_periksa_fisik_2'      => $getStats($qFisik2, 'tgl_periksa'),
            'jumlah_periksa_gigi'         => $getStats($qGigi, 'tgl_periksa'),
            'jumlah_periksa_narkoba'      => $getStats($qNarkoba, 'tgl_periksa'),
            'jumlah_hasil_dapat'          => $getStats($qDapat, 'tgl_periksa'),
            'jumlah_hasil_tidak_dapat'    => $getStats($qTidakDapat, 'tgl_periksa'),
        ]);
    }
}
