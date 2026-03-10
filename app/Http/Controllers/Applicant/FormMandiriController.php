<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\ApplicantMedicalRecord;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FormMandiriController extends Controller
{
    public function index()
    {
        $user = Auth::guard('applicant')->user();
        return view('applicant.form-mandiri', compact('user'));
    }

    // --- 1. SIMPAN ANTROPOMETRI ---
    public function updateAntropometri(Request $request)
    {
        try {
            $user = Applicant::find(Auth::guard('applicant')->id());

            $rules = [
                'tekanan_darah_sistolik'  => 'required|numeric',
                'tekanan_darah_diastolik' => 'required|numeric',
                'nadi'                    => 'required|numeric',
                'tinggi_badan'            => 'required|numeric|max:300',
                'berat_badan'             => 'required|numeric',
                'status_antropometri'     => 'required',
            ];

            $messages = [
                'required' => ':attribute wajib diisi.',
                'numeric'  => ':attribute harus berupa angka.',
                'max'      => ':attribute tidak boleh lebih dari :max cm.',
            ];

            $attributes = [
                'tekanan_darah_sistolik'  => 'Sistolik',
                'tekanan_darah_diastolik' => 'Diastolik',
                'nadi'                    => 'Nadi',
                'tinggi_badan'            => 'Tinggi Badan',
                'berat_badan'             => 'Berat Badan',
                'status_antropometri'     => 'Status Antropometri',
            ];

            $validator = Validator::make($request->all(), $rules, $messages, $attributes);

            if ($validator->fails()) {
                return response()->json(['status' => false, 'message' => $validator->errors()->first()]);
            }

            $user->update($request->except('_token'));
            return response()->json(['status' => true, 'message' => 'Data Antropometri Berhasil Disimpan']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Terjadi kesalahan sistem: ' . $e->getMessage()]);
        }
    }

    // --- 2. SIMPAN FISIK 1 ---
    public function updateFisik(Request $request)
    {
        try {
            $user = Applicant::find(Auth::guard('applicant')->id());

            $rules = [
                'status_kulit'   => 'required',
                'status_mata'    => 'required',
                'visus'          => 'required',
                'buta_warna'     => 'required',
                'status_telinga' => 'required',
                'status_hidung'  => 'required',
                'status_lidah'   => 'required',
                'status_pharynx' => 'required',
                'status_tonsil'  => 'required',
            ];

            $messages = ['required' => 'Pemeriksaan :attribute wajib diisi/dipilih.'];

            $attributes = [
                'status_kulit'   => 'Kulit',
                'status_mata'    => 'Mata',
                'visus'          => 'Visus',
                'buta_warna'     => 'Buta Warna',
                'status_telinga' => 'Telinga',
                'status_hidung'  => 'Hidung',
                'status_lidah'   => 'Lidah',
                'status_pharynx' => 'Pharynx',
                'status_tonsil'  => 'Tonsil',
            ];

            $validator = Validator::make($request->all(), $rules, $messages, $attributes);

            if ($validator->fails()) {
                return response()->json(['status' => false, 'message' => $validator->errors()->first()]);
            }

            $user->update($request->except('_token'));
            return response()->json(['status' => true, 'message' => 'Data Pemeriksaan Fisik 1 Berhasil Disimpan']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Terjadi kesalahan sistem: ' . $e->getMessage()]);
        }
    }

    // --- 3. SIMPAN FISIK 2 ---
    public function updateFisik2(Request $request)
    {
        try {
            $user = Applicant::find(Auth::guard('applicant')->id());

            $rules = [
                'status_thyroid'           => 'required',
                'status_jantung'           => 'required',
                'status_paru_paru'         => 'required',
                'status_abdomen'           => 'required',
                'status_refleks_pupil'     => 'required',
                'status_refleks_patela'    => 'required',
                'status_refleks_achiles'   => 'required',
                'status_thorax'            => 'required',
                'status_kemampuan_bicara'  => 'required',
            ];

            $messages = ['required' => 'Bagian :attribute wajib diisi.'];

            $attributes = [
                'status_thyroid'           => 'Thyroid',
                'status_jantung'           => 'Jantung',
                'status_paru_paru'         => 'Paru-paru',
                'status_abdomen'           => 'Abdomen',
                'status_refleks_pupil'     => 'Refleks Pupil',
                'status_refleks_patela'    => 'Refleks Patela',
                'status_refleks_achiles'   => 'Refleks Achiles',
                'status_thorax'            => 'Thorax',
                'status_kemampuan_bicara'  => 'Kemampuan Bicara',
            ];

            $validator = Validator::make($request->all(), $rules, $messages, $attributes);

            if ($validator->fails()) {
                return response()->json(['status' => false, 'message' => $validator->errors()->first()]);
            }

            $user->update($request->except('_token'));
            return response()->json(['status' => true, 'message' => 'Data Pemeriksaan Fisik 2 Berhasil Disimpan']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Terjadi kesalahan sistem: ' . $e->getMessage()]);
        }
    }

    // --- 4. SIMPAN GIGI ---
    public function updateGigi(Request $request)
    {
        try {
            $user = Applicant::find(Auth::guard('applicant')->id());

            $validator = Validator::make(
                $request->all(),
                ['status_gigi' => 'required'],
                ['required' => 'Status pemeriksaan gigi wajib dipilih.'],
                ['status_gigi' => 'Gigi']
            );

            if ($validator->fails()) {
                return response()->json(['status' => false, 'message' => $validator->errors()->first()]);
            }

            $user->update($request->except('_token'));
            return response()->json(['status' => true, 'message' => 'Data Gigi Berhasil Disimpan']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Terjadi kesalahan sistem: ' . $e->getMessage()]);
        }
    }

    // --- 5. SIMPAN NARKOBA ---
    public function updateNarkoba(Request $request)
    {
        try {
            $user = Applicant::find(Auth::guard('applicant')->id());

            // Tambahkan validasi agar tidak kosong
            $rules = [
                'amp' => 'required',
                'mop' => 'required',
                'thc' => 'required',
            ];

            $validator = Validator::make($request->all(), $rules, ['required' => 'Hasil :attribute wajib dipilih.']);

            if ($validator->fails()) {
                return response()->json(['status' => false, 'message' => $validator->errors()->first()]);
            }

            $user->update($request->except('_token'));
            return response()->json(['status' => true, 'message' => 'Data Hasil Narkoba Berhasil Disimpan']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Terjadi kesalahan sistem: ' . $e->getMessage()]);
        }
    }

    // --- 6. HANYA UPLOAD BERKAS ---
    public function updateBerkas(Request $request)
    {
        try {
            $user = Applicant::find(Auth::guard('applicant')->id());

            // Validasi File
            $rules = [
                'file_kesehatan' => ($user->file_kesehatan ? 'nullable' : 'required') . '|mimes:pdf,jpg,jpeg,png|max:2048',
                'file_narkoba'   => ($user->file_narkoba ? 'nullable' : 'required') . '|mimes:pdf,jpg,jpeg,png|max:2048',
            ];

            $validator = Validator::make($request->all(), $rules, [
                'required' => 'File :attribute wajib dipilih.',
                'mimes'    => 'Format :attribute harus PDF, JPG, atau PNG.',
                'max'      => 'Ukuran :attribute maksimal 2MB.',
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => false, 'message' => $validator->errors()->first()]);
            }

            $identitas = str_replace('/', '-', $user->nomor_peserta); // Bersihkan nomor peserta dari karakter '/'
            $dataUpdate = [];

            // Proses File Kesehatan
            if ($request->hasFile('file_kesehatan')) {
                if ($user->file_kesehatan) {
                    Storage::disk('public')->delete('uploads/kesehatan/' . $user->file_kesehatan);
                }
                $file = $request->file('file_kesehatan');
                $name = $user->username . '_Kesehatan_' . time() . '.' . $file->extension();
                $file->storeAs('uploads/kesehatan', $name, 'public');
                $dataUpdate['file_kesehatan'] = $name;
                $dataUpdate['status_file_kesehatan'] = 'Pending';
            }

            // Proses File Narkoba
            if ($request->hasFile('file_narkoba')) {
                if ($user->file_narkoba) {
                    Storage::disk('public')->delete('uploads/narkoba/' . $user->file_narkoba);
                }
                $file = $request->file('file_narkoba');
                $name = $user->username . '_Narkoba_' . time() . '.' . $file->extension();
                $file->storeAs('uploads/narkoba', $name, 'public');
                $dataUpdate['file_narkoba'] = $name;
                $dataUpdate['status_file_narkoba'] = 'Pending';
            }

            $user->update($dataUpdate);
            return response()->json(['status' => true, 'message' => 'Berkas berhasil diunggah.']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Gagal upload: ' . $e->getMessage()]);
        }
    }

    // --- 7. FINALISASI (Kunci Form & Isi tanggal_input) ---
    public function finalisasi(Request $request)
    {
        try {
            $user = Applicant::find(Auth::guard('applicant')->id());

            // 1. Cek Kelengkapan Data Medis (Tab 1 - 5)
            $kolomKosong = $this->checkSemuaPemeriksaan($user->id);

            if ($kolomKosong) {
                $label = [
                    'tekanan_darah_sistolik' => 'Sistolik',
                    'tekanan_darah_diastolik' => 'Diastolik',
                    'nadi' => 'Nadi',
                    'tinggi_badan' => 'Tinggi Badan',
                    'berat_badan' => 'Berat Badan',
                    'status_antropometri' => 'Status Antropometri',
                    'status_kulit' => 'Pemeriksaan Kulit',
                    'status_mata' => 'Pemeriksaan Mata',
                    'visus' => 'Pemeriksaan Visus',
                    'buta_warna' => 'Pemeriksaan Buta Warna',
                    'status_telinga' => 'Pemeriksaan Telinga',
                    'status_hidung' => 'Pemeriksaan Hidung',
                    'status_lidah' => 'Pemeriksaan Lidah',
                    'status_pharynx' => 'Pemeriksaan Pharynx',
                    'status_tonsil' => 'Pemeriksaan Tonsil',
                    'status_thyroid' => 'Pemeriksaan Thyroid',
                    'status_jantung' => 'Pemeriksaan Jantung',
                    'status_paru_paru' => 'Pemeriksaan Paru-paru',
                    'status_abdomen' => 'Pemeriksaan Abdomen',
                    'status_refleks_pupil' => 'Refleks Pupil',
                    'status_refleks_patela' => 'Refleks Patela',
                    'status_refleks_achiles' => 'Refleks Achiles',
                    'status_thorax' => 'Pemeriksaan Thorax',
                    'status_kemampuan_bicara' => 'Kemampuan Bicara',
                    'status_gigi' => 'Pemeriksaan Gigi',
                    'amp' => 'Narkoba (AMP)',
                    'mop' => 'Narkoba (MOP)',
                    'thc' => 'Narkoba (THC)',
                ];

                $namaField = $label[$kolomKosong] ?? $kolomKosong;
                return response()->json([
                    'status' => false,
                    'message' => "Gagal Finalisasi. Data [$namaField] belum diisi. Silakan lengkapi data pemeriksaan terlebih dahulu."
                ]);
            }

            // 2. Cek Kelengkapan Berkas (Tab 6)
            // Mengecek apakah kolom file_kesehatan dan file_narkoba di database masih kosong
            if (empty($user->file_kesehatan)) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal Finalisasi. Anda belum mengunggah Berkas Hasil Uji Kesehatan.'
                ]);
            }

            if (empty($user->file_narkoba)) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal Finalisasi. Anda belum mengunggah Berkas Hasil Lab Narkoba.'
                ]);
            }

            // ApplicantMedicalRecord::where('id', $user->applicant_medical_record_id)->update(['tgl_registrasi' => now()]);

            // 3. Jika semua lengkap, isi tanggal_input untuk mengunci form
            $user->update(['tanggal_input' => now()]);

            return response()->json([
                'status' => true,
                'message' => 'Data pemeriksaan dan berkas Anda berhasil difinalisasi. Terima kasih.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Gagal melakukan finalisasi: ' . $e->getMessage()]);
        }
    }

    // Fungsi internal untuk validasi kelengkapan data sebelum kunci form
    private function checkSemuaPemeriksaan($userId)
    {
        // Menggunakan find agar mendapatkan data terbaru dari database
        $user = Applicant::find($userId);

        // Daftar kolom wajib (Pastikan nama kolom ini sama persis dengan di Navicat Anda)
        $requiredColumns = [
            'tekanan_darah_sistolik',
            'tekanan_darah_diastolik',
            'nadi',
            'tinggi_badan',
            'berat_badan',
            'status_antropometri',
            'status_kulit',
            'status_mata',
            'visus',
            'buta_warna',
            'status_telinga',
            'status_hidung',
            'status_lidah',
            'status_pharynx',
            'status_tonsil',
            'status_thyroid',
            'status_jantung',
            'status_paru_paru',
            'status_abdomen',
            'status_refleks_pupil',
            'status_refleks_patela',
            'status_refleks_achiles',
            'status_thorax',
            'status_kemampuan_bicara',
            'status_gigi',
            'amp',
            'mop',
            'thc'
        ];

        foreach ($requiredColumns as $column) {
            // Pengecekan null, string kosong, atau string "null" (antisipasi error javascript)
            if (is_null($user->$column) || $user->$column === '' || $user->$column === 'null') {
                return $column;
            }
        }

        return null; // Semua data lengkap
    }
}
