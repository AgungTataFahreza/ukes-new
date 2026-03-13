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

        // 1. Cari data pendaftar di master data (beserta relasi periode-nya)
        $medical = ApplicantMedicalRecord::with('period')->where('nomor_peserta', $username)->first();

        // Jika tidak ada di data master
        if (!$medical) {
            return redirect()->back()->with('error', 'Anda tidak terdaftar sebagai peserta uji kesehatan.');
        }

        // 2. CEK STATUS AKSES LOGIN PERIODE
        // Jika relasi period tidak ada, atau can_applicant_login != 1, tolak loginnya
        if (!$medical->period || $medical->period->can_applicant_login != 1) {
            return redirect()->back()->with('error', 'Akses login untuk gelombang/periode Anda sedang ditutup.');
        }

        // 3. Cek apakah akun sudah pernah digenerate di tabel applicants
        $user = Applicant::where('username', $username)->first();

        // Jika belum punya akun (Login Pertama Kali)
        if (!$user) {
            // Jika sudah regis luring, tolak
            if ($medical->tgl_registrasi != null) {
                return redirect()->back()->with('error', 'Pemeriksaan Anda dilakukan luring di klinik.');
            }

            // Validasi password default (tgl lahir YYYYMMDD)
            $correct_pass = str_replace('-', '', $medical->tanggal_lahir);
            if ($password_input !== $correct_pass) {
                return redirect()->back()->with('error', 'Nomor Pendaftar atau Tanggal Lahir Salah.');
            }

            // Generate User baru
            $user = Applicant::create([
                'applicant_medical_record_id' => $medical->id,
                'username' => $username,
                'password' => Hash::make($password_input),
                'name' => $medical->nama
            ]);
        }

        // 4. Attempt Login (Untuk akun baru maupun akun lama)
        if (Auth::guard('applicant')->attempt(['username' => $username, 'password' => $password_input])) {
            $user->update(['last_login' => now()]);
            return redirect('/applicant/dashboard');
        }

        return redirect()->back()->with('error', 'Nomor Pendaftar atau Password salah.');
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
