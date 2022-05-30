<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Resources\Views\frontend;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('frontend.login');
    }

    public function forgotPassword()
    {
        return view('frontend.forgot-password');
    }

    public function passwordRecovery()
    {
        return view('frontend.password-recovery');
    }
}

