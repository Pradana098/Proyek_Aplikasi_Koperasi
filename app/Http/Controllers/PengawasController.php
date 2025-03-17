<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengawasController extends Controller
{
    public function PengawasView()
    {
        return view("pengawas.login");
    }

    public function PengawasDashboard()
    {
        return view("pengawas.dashboard");
    }


    public function PengawasLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi.',
            'password.required' => 'Password wajib diisi.'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('pengawas')->attempt($credentials)) {
            // Redirect ke dashboard jika login berhasil
            return redirect()->route('pengawas.dashboard');
        }

        // Jika gagal login, kembali ke halaman login dengan error
        return back()->withErrors(['email' => 'Email atau password salah!']);
    }

    public function PengawasLogout()
    {
        Auth::guard('pengawas')->logout();
        return redirect()->route('pengawas.login')->with('success', 'Logout Success');
    }
}
