<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller {
    public function showLoginForm()
    {
        return view('Auth.Login', ["title" => "Login Form"]);
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]); 

    if (Auth::attempt($credentials)) {
        return redirect('/dashboard/all')->with('success', 'Selamat datang! Anda berhasil login.');
    }

    return redirect()->back()->withInput()->withErrors([
        'email' => 'Email atau kata sandi salah.',
    ]);
}

    public function out(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home')->with('success', 'Logged out successfully.');
    }
}
