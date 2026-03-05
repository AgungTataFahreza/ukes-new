<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant;
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
        $user = Applicant::find(Auth::guard('applicant')->id());

        $rules = [
            'tinggi_badan' => 'required|numeric|max:300',
            'berat_badan'  => 'required|numeric',
        ];

        // Membuat pesan kustom dalam bahasa Indonesia
        $messages = [
            'tinggi_badan.required' => 'Tinggi badan wajib diisi.',
            'tinggi_badan.numeric'  => 'Tinggi badan harus berupa angka.',
            'tinggi_badan.max'      => 'Tinggi badan tidak boleh lebih dari 300 cm.',
            'berat_badan.required'  => 'Berat badan wajib diisi.',
            'berat_badan.numeric'   => 'Berat badan harus berupa angka.',
        ];

        $attributes = [
            'tinggi_badan' => 'Tinggi Badan',
            'berat_badan'  => 'Berat Badan',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if ($validator->fails()) {
            // Ambil pesan error pertama saja sebagai string agar SweetAlert tidak bingung
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ]);
        }

        $user->update($request->except('_token'));

        return response()->json(['status' => true, 'message' => 'Data Antropometri Disimpan']);
    }

    // --- 2. SIMPAN FISIK 1 (Kulit, Mata, Telinga, Hidung, Lidah, Pharynx, Tonsil) ---
    public function updateFisik(Request $request)
    {
        $user = Applicant::find(Auth::guard('applicant')->id());
        $user->update($request->except('_token'));

        return response()->json(['status' => true, 'message' => 'Data Pemeriksaan Fisik Bagian 1 Disimpan']);
    }

    // --- 3. SIMPAN FISIK 2 (Thyroid, Jantung, Paru, Abdomen, Refleks, Thorax, Bicara) ---
    public function updateFisik2(Request $request)
    {
        $user = Applicant::find(Auth::guard('applicant')->id());
        $user->update($request->except('_token'));

        return response()->json(['status' => true, 'message' => 'Data Pemeriksaan Fisik Bagian 2 Disimpan']);
    }

    // --- 4. SIMPAN GIGI ---
    public function updateGigi(Request $request)
    {
        $user = Applicant::find(Auth::guard('applicant')->id());
        $user->update($request->except('_token'));

        return response()->json(['status' => true, 'message' => 'Data Pemeriksaan Gigi Disimpan']);
    }

    // --- 5. SIMPAN NARKOBA ---
    public function updateNarkoba(Request $request)
    {
        $user = Applicant::find(Auth::guard('applicant')->id());
        $user->update($request->except('_token'));

        return response()->json(['status' => true, 'message' => 'Data Hasil Narkoba Disimpan']);
    }

    // --- 6. SIMPAN BERKAS & KUNCI FORM ---
    public function updateBerkas(Request $request)
    {
        $user = Applicant::find(Auth::guard('applicant')->id());

        // Validasi File (Wajib jika sebelumnya belum pernah upload)
        $rules = [];
        if (!$user->file_kesehatan) {
            $rules['file_kesehatan'] = 'required|mimes:pdf,jpg,jpeg,png|max:2048';
        }
        if (!$user->file_narkoba) {
            $rules['file_narkoba'] = 'required|mimes:pdf,jpg,jpeg,png|max:2048';
        }

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()]);
        }

        try {
            $dataUpdate = [];

            // Proses Upload File Kesehatan
            if ($request->hasFile('file_kesehatan')) {
                if ($user->file_kesehatan && Storage::disk('public')->exists($user->file_kesehatan)) {
                    Storage::disk('public')->delete($user->file_kesehatan);
                }
                $dataUpdate['file_kesehatan'] = $request->file('file_kesehatan')->store('uploads/kesehatan', 'public');
                $dataUpdate['status_file_kesehatan'] = 'Pending';
            }

            // Proses Upload File Narkoba
            if ($request->hasFile('file_narkoba')) {
                if ($user->file_narkoba && Storage::disk('public')->exists($user->file_narkoba)) {
                    Storage::disk('public')->delete($user->file_narkoba);
                }
                $dataUpdate['file_narkoba'] = $request->file('file_narkoba')->store('uploads/narkoba', 'public');
                $dataUpdate['status_file_narkoba'] = 'Pending';
            }

            // KUNCI FORM (Tandai waktu input)
            $dataUpdate['tanggal_input'] = now();

            // Kembalikan status ke Pending jika sebelumnya direject tapi user tidak ubah file (hanya klik kirim ulang)
            if (!isset($dataUpdate['status_file_kesehatan']) && $user->status_file_kesehatan == 'Rejected') {
                $dataUpdate['status_file_kesehatan'] = 'Pending';
            }
            if (!isset($dataUpdate['status_file_narkoba']) && $user->status_file_narkoba == 'Rejected') {
                $dataUpdate['status_file_narkoba'] = 'Pending';
            }

            // Simpan Perubahan Final
            $user->update($dataUpdate);

            return response()->json(['status' => true, 'message' => 'Seluruh data dan berkas berhasil dikirim untuk verifikasi.']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => ['Terjadi kesalahan server saat mengunggah file.']]);
        }
    }
}
