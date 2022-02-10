<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function auth(){
        return view('authentication');
    }
    public function registration(){
        return view('layouts._registration');
    }
    public function login(){
        return view('layouts._login');
    }

    public function master(){
        return view('master');
    }
}
