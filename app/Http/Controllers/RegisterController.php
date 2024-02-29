<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    public function index()
    {
        return view('Auth.Register', ["title" => "Register Form"]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'          => 'required|max:255',
            'email'         => 'required|email|unique:users,email', 
            'password'      => 'required|min:5|max:15',
        ]);
    
        // Hash password
        $validateData['password'] = Hash::make($validateData['password']);
    
        // Simpan data
        User::create($validateData);
    
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat, Silahkan login.');
    }
}
