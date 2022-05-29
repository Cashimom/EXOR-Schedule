<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showLogin()
    {
        return "Login View";
    }

    public function showRegister()
    {
        return "Register View";
    }
}
