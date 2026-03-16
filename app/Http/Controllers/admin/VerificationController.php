<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Period;
use App\Models\StudyProgram;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    private $key;
    private $permissions;

    public function __construct()
    {
        $this->key = 'Verifikasi Peserta Luar';
        $this->middleware(function ($request, $next) {
            $this->permissions = store_permissions();
            return $next($request);
        });
    }

    public function index()
    {
        session()->put('menu', 'medical-form');
        session()->put('title', 'Verifikasi Peserta Luar');
        session()->put('key', $this->key);

        $data['permissions'] = $this->permissions;
        $data['study_programs'] = StudyProgram::orderBy('name', 'asc')->get();
        $data['periods'] = Period::with('year')->orderBy('name', 'desc')->get();

        return view('admin.medical-form-verification', $data);
    }

    public function show(Request $request)
    {
        if (request()->ajax()) {
            $period_id = $request->period_id;
            $study_program_id = $request->study_program_id;

            // Query utama ke Applicant
            // Karena period_id dan study_program_id ada di tabel medical record, 
            // maka filter harus lewat whereHas
            $query = Applicant::with(['medical_record.period.year', 'medical_record.study_program'])
                ->whereNotNull('tanggal_input');

            // Filter periode melalui relasi medical_record
            if ($period_id) {
                $query->whereHas('medical_record', function ($q) use ($period_id) {
                    $q->where('period_id', $period_id);
                });
            }

            // Filter prodi melalui relasi medical_record
            if ($study_program_id) {
                $query->whereHas('medical_record', function ($q) use ($study_program_id) {
                    $q->where('study_program_id', $study_program_id);
                });
            }

            $result = $query->orderBy('name', 'asc')->get();

            return datatables()->of($result)
                ->addColumn('action', function ($result) {
                    $button = '';
                    if (can_access($this->permissions, $this->key, 'edit')) {
                        $button .= '<a target="_blank" href="' . url('admin/verification/edit/' . $result->id) . '" class="btn btn-success btn-sm btn-label waves-effect waves-light"><i class="ri-file-list-line label-icon align-middle fs-16 me-2"></i> Verifikasi</a>';
                    }
                    return $button;
                })
                ->addColumn('period_name', function ($result) {
                    // Ambil data dari relasi medical_record
                    if ($result->medical_record && $result->medical_record->period) {
                        return $result->medical_record->period->name . ' ' . $result->medical_record->period->year->name;
                    }
                    return '-';
                })
                ->addColumn('nomor_peserta', function ($result) {
                    return $result->medical_record->nomor_peserta ?? '-';
                })
                ->addColumn('study_program_name', function ($result) {
                    return $result->medical_record->study_program->name ?? '-';
                })
                ->editColumn('jenis_kelamin', function ($result) {
                    $jk = $result->medical_record->jenis_kelamin ?? '-';
                    return $jk == 'L' ? '<span class="badge bg-primary"> Laki-laki</span>' : '<span class="badge bg-danger"> Perempuan</span>';
                })
                ->editColumn('tanggal_input', function ($result) {
                    return $result->tanggal_input ? date('d-m-Y', strtotime($result->tanggal_input)) : '-';
                })
                ->addColumn('status', function ($result) {
                    // Logika centang: Jika data sudah diverifikasi masuk ke record permanen
                    // Kita bisa cek apakah kolom 'rekomendasi' sudah terisi di medical_record
                    if ($result->medical_record && $result->medical_record->rekomendasi) {
                        return '<span class="badge bg-success"><i class="ri-checkbox-circle-line align-middle me-1"></i> Terverifikasi</span>';
                    } else {
                        return '<span class="badge bg-warning"><i class="ri-question-line align-middle me-1"></i> Belum Diverifikasi</span>';
                    }

                    // // Status berdasarkan file yang diupload applicant
                    // $status = $result->status_file_kesehatan ?? 'Pending';
                    // $class = $status == 'Verified' ? 'success' : ($status == 'Rejected' ? 'danger' : 'warning');
                    // return '<span class="badge bg-' . $class . '">' . $status . '</span>';
                })
                ->rawColumns(['action', 'jenis_kelamin', 'status'])
                ->addIndexColumn()
                ->make(true);
        }
    }

    public function edit($id)
    {
        session()->put('menu', 'medical-form');

        // 1. Ambil data utama applicant
        $data['applicant'] = Applicant::with(['medical_record.period.year', 'medical_record.study_program'])->findOrFail($id);

        // 2. Ambil data pendukung untuk modal filter (agar tidak undefined variable)
        $data['periods'] = Period::with('year')->orderBy('name', 'desc')->get();
        $data['study_programs'] = StudyProgram::orderBy('name', 'asc')->get();

        // 3. Data tambahan untuk kebutuhan view
        $data['permissions'] = $this->permissions;
        $data['key'] = $this->key;
        $data['user'] = $data['applicant'];

        return view('admin.medical-form-verification-detail', $data);
    }

    public function updateAntropometri(Request $request, $id)
    {
        $applicant = Applicant::findOrFail($id);

        $data = $request->only([
            'tekanan_darah_sistolik',
            'tekanan_darah_diastolik',
            'nadi',
            'tinggi_badan',
            'berat_badan',
            'status_antropometri',
            'catatan_antropometri',
            'keterangan_antropometri'
        ]);

        // Sisipkan nilai default dari backend
        $data['dokter_id'] = 'Lainnya';
        $data['paramedis_1_id'] = 'Lainnya';
        $data['tempat_periksa'] = 'Lainnya';

        $applicant->medical_record()->update($data);

        return response()->json(['status' => true, 'message' => 'Revisi Antropometri berhasil disimpan.']);
    }

    /**
     * Update Tab Fisik 1
     */
    public function updateFisik(Request $request, $id)
    {
        $applicant = Applicant::findOrFail($id);

        $data = $request->only([
            'status_kulit',
            'catatan_kulit',
            'keterangan_kulit',
            'status_mata',
            'visus',
            'buta_warna',
            'catatan_mata',
            'keterangan_mata',
            'status_telinga',
            'telinga_kiri',
            'telinga_kanan',
            'catatan_telinga',
            'keterangan_telinga',
            'status_hidung',
            'catatan_hidung',
            'keterangan_hidung',
            'status_lidah',
            'catatan_lidah',
            'keterangan_lidah',
            'status_pharynx',
            'catatan_pharynx',
            'keterangan_pharynx',
            'status_tonsil',
            'catatan_tonsil',
            'keterangan_tonsil'
        ]);

        // Sisipkan nilai default dari backend
        $data['dokter_id']      = 'Lainnya';
        $data['paramedis_2_id'] = 'Lainnya';
        $data['tempat_periksa'] = 'Lainnya';

        $applicant->medical_record()->update($data);

        return response()->json(['status' => true, 'message' => 'Revisi Pemeriksaan Fisik berhasil disimpan.']);
    }

    /**
     * Update Tab Fisik 2
     */
    public function updateFisik2(Request $request, $id)
    {
        $applicant = Applicant::findOrFail($id);

        $data = $request->only([
            'status_thyroid',
            'catatan_thyroid',
            'keterangan_thyroid',
            'status_jantung',
            'catatan_jantung',
            'keterangan_jantung',
            'status_paru_paru',
            'catatan_paru_paru',
            'keterangan_paru_paru',
            'status_abdomen',
            'catatan_abdomen',
            'keterangan_abdomen',
            'status_refleks_pupil',
            'status_refleks_patela',
            'status_refleks_achiles',
            'catatan_refleks',
            'keterangan_refleks',
            'status_thorax',
            'catatan_thorax',
            'keterangan_thorax',
            'status_kemampuan_bicara',
            'catatan_kemampuan_bicara',
            'keterangan_kemampuan_bicara'
        ]);

        // Sisipkan nilai default dari backend
        $data['dokter_id']      = 'Lainnya';
        $data['paramedis_3_id'] = 'Lainnya';
        $data['tempat_periksa'] = 'Lainnya';

        $applicant->medical_record()->update($data);

        return response()->json(['status' => true, 'message' => 'Revisi Pemeriksaan Fisik Lanjutan berhasil disimpan.']);
    }

    /**
     * Update Tab Gigi
     */
    public function updateGigi(Request $request, $id)
    {
        $applicant = Applicant::findOrFail($id);

        $data = $request->only(['status_gigi', 'catatan_gigi', 'keterangan_gigi']);

        // Sisipkan nilai default dari backend
        $data['dokter_gigi_id']  = 'Lainnya';
        $data['perawat_gigi_id'] = 'Lainnya';
        $data['tempat_periksa']  = 'Lainnya';

        $applicant->medical_record()->update($data);

        return response()->json(['status' => true, 'message' => 'Revisi Pemeriksaan Gigi berhasil disimpan.']);
    }

    /**
     * Update Tab Narkoba
     */
    public function updateNarkoba(Request $request, $id)
    {
        $applicant = Applicant::findOrFail($id);

        $data = $request->only(['amp', 'mop', 'thc']);

        // Sisipkan nilai default dari backend
        $data['petugas_narkoba_id'] = 'Lainnya';
        $data['tempat_periksa']     = 'Lainnya';

        $applicant->medical_record()->update($data);

        return response()->json(['status' => true, 'message' => 'Revisi Pemeriksaan Narkoba berhasil disimpan.']);
    }

    /**
     * Keputusan Final (Valid / Tolak)
     */
    /**
     * Update Tab Berkas (Hanya status file)
     */
    public function updateBerkas(Request $request, $id)
    {
        $applicant = Applicant::findOrFail($id);

        //jika status file kesehatan atau narkoba == "Rejected" maka tanggal input di applicant dihapus (buka gembok form peserta)
        if ($request->status_file_kesehatan == 'Rejected' || $request->status_file_narkoba == 'Rejected') {
            $applicant->tanggal_input = null;
            $applicant->save();
        }

        $applicant->update($request->only([
            'status_file_kesehatan',
            'status_file_narkoba'
        ]));

        return response()->json(['status' => true, 'message' => 'Status berkas berhasil disimpan.']);
    }

    /**
     * Keputusan Final dan Kesimpulan Medis
     */
    public function updateStatus(Request $request, $id)
    {
        $applicant = Applicant::findOrFail($id);

        // 1. Update Tabel Applicant (Tanggal Verifikasi & Catatan)
        $applicant->tanggal_verifikasi = now();

        $applicant->save();

        // 2. Update Tabel Applicant Medical Record (Riwayat, Kesimpulan, Rekomendasi)
        $dataMedis = $request->only(['riwayat_penyakit', 'kesimpulan', 'rekomendasi']);
        $dataMedis['petugas_registrasi_id'] = 'Lainnya'; // Atau ID Admin yg login
        $dataMedis['tgl_periksa'] = now()->format('Y-m-d');
        $dataMedis['tgl_registrasi'] = now()->format('Y-m-d');

        $applicant->medical_record()->update($dataMedis);

        return response()->json([
            'status' => true,
            'message' => 'Keputusan verifikasi dan kesimpulan berhasil diperbarui.'
        ]);
    }

    public function getKesimpulan($id)
    {
        // Ambil data applicant dan relasi rekam medis + prodi
        $applicant = Applicant::with('medical_record.study_program')->findOrFail($id);
        $data = $applicant->medical_record;

        // Jika data belum ada sama sekali (belum disave di tab sebelumnya)
        if (!$data) {
            return response()->json([
                'status' => false,
                'hasil' => 'BELUM LENGKAP',
                'kesimpulan' => 'Data Belum Lengkap',
                'alasan' => 'Harap simpan data tinggi badan dan pemeriksaan mata terlebih dahulu.',
                'alasan_singkat' => 'Data Kosong',
                'parameter' => [],
                'riwayat_penyakit' => ''
            ]);
        }

        $parameter      = [
            'program_studi' => $data->study_program->name ?? '-',
            'tinggi_badan'  => ($data->tinggi_badan ?? 0) . ' cm',
            'buta_warna'    => $data->buta_warna ?? '-',
            'syarat_tinggi' => '≥ 145 cm'
        ];

        // Siapkan array penampung error
        $kendala_singkat = [];
        $kendala_detail  = [];

        /*
        |--------------------------------------------------------------------------
        | VALIDASI 1: BUTA WARNA
        |--------------------------------------------------------------------------
        */
        if (in_array($data->buta_warna, ['Parsial', 'Total'])) {
            $kendala_singkat[] = 'Buta warna';
            $kendala_detail[]  = 'mengalami buta warna ' . strtolower($data->buta_warna);
        }

        /*
        |--------------------------------------------------------------------------
        | VALIDASI 2: TINGGI BADAN
        |--------------------------------------------------------------------------
        */
        if ($data->tinggi_badan < 145) {
            $kendala_singkat[] = 'Tinggi Badan Kurang (' . ($data->tinggi_badan ?? 0) . ' cm)';
            $kendala_detail[]  = 'tinggi badan di bawah syarat minimal 145 cm';
        }

        /*
        |--------------------------------------------------------------------------
        | KESIMPULAN AKHIR
        |--------------------------------------------------------------------------
        */
        // Jika ada kendala (array tidak kosong), maka TIDAK LULUS
        if (count($kendala_singkat) > 0) {
            $status         = false;
            $hasil          = 'TIDAK LULUS';
            $kesimpulan     = 'Tidak Dapat';

            // Gabungkan kendala
            $alasan_singkat = implode(' & ', $kendala_singkat);
            $alasan         = 'Tidak lulus karena calon mahasiswa ' . implode(' dan ', $kendala_detail) . '.';
        }
        // Jika array kosong, berarti semua syarat terpenuhi (LULUS)
        else {
            $status         = true;
            $hasil          = 'LULUS';
            $kesimpulan     = 'Dapat';
            $alasan_singkat = 'Memenuhi syarat';
            $alasan         = 'Lulus karena calon mahasiswa memenuhi syarat tinggi badan minimal 145 cm dan bebas buta warna.';
        }

        return response()->json([
            'status'           => $status,
            'hasil'            => $hasil,
            'kesimpulan'       => $kesimpulan,
            'alasan'           => $alasan,
            'alasan_singkat'   => $alasan_singkat,
            'parameter'        => $parameter,
            'riwayat_penyakit' => $data->riwayat_penyakit ?? ''
        ]);
    }
}
