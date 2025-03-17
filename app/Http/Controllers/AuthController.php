<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session(['user' => $user]);

            if ($user->role == 'pengurus') {
                return redirect()->route('dashboard.pengurus');
            } elseif ($user->role == 'pengawas') {
                return redirect()->route('dashboard.pengawas');
            }
        }

        return back()->with('error', 'Email atau password salah!');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/login')->with('success', 'Logout berhasil!');
    }
}
