<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function ShowLogin()
    {
        return view('login admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('prestasi.index'); // ✅ arahkan ke halaman admin
        }

        return back()->withErrors([
            'login' => 'Username atau Password salah'
        ])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
