<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Resources\Views\frontend;

class UserController extends Controller
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
