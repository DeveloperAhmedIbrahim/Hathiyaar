<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Testing...
    public function login()
    {
        return view('client.auth.login');
    }

    public function register()
    {
        return view('client.auth.register');
    }

    public function forgot()
    {
        return view('client.auth.forgot');
    }
}
