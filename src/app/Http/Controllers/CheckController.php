<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index() {
        return view('index');
    }

    public function confirm() {
        return view('confirm');
    }

    public function thanks() {
        return view('thanks');
    }

    
}
