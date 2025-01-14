<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('user.dashboard');
            }
        }
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        // Buat pengguna baru
        $user = \App\Models\User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => \Illuminate\Support\Facades\Hash::make($request->input('password')),
            'role' => 'user', // Default role untuk registrasi
        ]);

        Auth::login($user);

        return redirect()->route('user.dashboard');
    }
}
