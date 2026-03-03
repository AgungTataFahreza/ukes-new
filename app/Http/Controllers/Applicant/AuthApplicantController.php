<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\ApplicantMedicalRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthApplicantController extends Controller
{
    public function getLogin()
    {
        return view('applicant.login');
    }

    public function postLogin(Request $request)
    {
        $username = $request->username; // No Pendaftar
        $password_input = $request->password; // Format YYYYMMDD

        // 1. Cek tabel login
        $user = Applicant::where('username', $username)->first();

        if (!$user) {
            // 2. Cari di master data
            $medical = ApplicantMedicalRecord::where('nomor_peserta', $username)->first();

            if (!$medical) {
                return redirect()->back()->with('error', 'Anda tidak terdaftar sebagai peserta uji kesehatan.');
            }

            // 3. Jika sudah regis luring, tolak
            if ($medical->tgl_registrasi != null) {
                return redirect()->back()->with('error', 'Pemeriksaan Anda dilakukan luring di klinik.');
            }

            // 4. Validasi password default (tgl lahir YYYYMMDD)
            $correct_pass = str_replace('-', '', $medical->tanggal_lahir);
            if ($password_input !== $correct_pass) {
                return redirect()->back()->with('error', 'Nomor Pendaftar atau Tanggal Lahir Salah.');
            }

            // 5. Generate User
            $user = Applicant::create([
                'applicant_medical_record_id' => $medical->id,
                'username' => $username,
                'password' => Hash::make($password_input),
                'name' => $medical->nama
            ]);
        }

        // 6. Attempt Login
        if (Auth::guard('applicant')->attempt(['username' => $username, 'password' => $password_input])) {
            $user->update(['last_login' => now()]);
            return redirect('/applicant/dashboard');
        }

        return redirect()->back()->with('error', 'Login Gagal.');
    }

    public function logout()
    {
        Auth::guard('applicant')->logout();
        return redirect('/applicant/login');
    }

    public function dashboard()
    {
        // Kita panggil relasi medical_record yang sudah kita buat di Model Applicant
        $user = Auth::guard('applicant')->user();
        return view('applicant.dashboard', compact('user'));
    }
}
