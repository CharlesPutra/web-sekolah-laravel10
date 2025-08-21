<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function ShowLogin() {
        return view('login admin.login');
    }

    public function login(Request $request) {
        $login = $request->only('name','password');

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->route('prestasi.index');
        }
        //ketika password dan username salah
        return back()->withErrors([
            'login' => 'Username atau Password salah'
        ])->withInput();
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
