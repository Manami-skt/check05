<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function admin() {
        return view('admin');
    }

    public function register() {
        return view('auth.login');
    }

    public function login() {
        return view('admin');
    }
}
