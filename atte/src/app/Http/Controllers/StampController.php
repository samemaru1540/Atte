<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StampController extends Controller
{
    public function index()
    {
        return view('stamp');
    }

    public function confirm()
    {
        
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
