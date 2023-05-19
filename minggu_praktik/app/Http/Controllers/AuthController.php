<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    //fungsi untuk menampilkan auth/register.blade.php
    public function register()
    {
        return view('auth/register');
    }


    //fungsi untuk menyimpan data register ke database
    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'Admin'
        ]);

        return redirect()->route('login');
    }

    //fungsi untuk menampilkan login
    public function login()
    {
        return view('auth/login');
    }

    //fungsi untuk melakukan aksi login dan menyimpan ke session
    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }

    // public function logout(Request $request)
    // {
    //     Auth::guard('web')->logout();

    //     $request->session()->invalidate();

    //     return redirect('/login');
    // }


    //fungsi untuk ke tampilan profile
    public function profile()
    {
        return view('profile');
    }
}
