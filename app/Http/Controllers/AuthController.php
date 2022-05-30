<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function login()
    {
        return redirect()->route('register');
    }

    public function register()
    {
        return redirect()->route('index');
    }

    public function logout()
    {
        return redirect()->route('login');
    }
}
