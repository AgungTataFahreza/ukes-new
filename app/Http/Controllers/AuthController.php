<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (!$validated) {
            return redirect()->back();
        } else {
            $credentials = $request->only('username', 'password');
            if (Auth::attempt($credentials, $request->boolean('remember'))) {
                return redirect('/admin/dashboard');
            } else {
                Session::flash('error', 'Wrong Username/Password');
                return redirect()->route('admin.login');
            }
        }
    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('admin.login');
    }
}
