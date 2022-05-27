<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Resources\Views\frontend;

class UserController extends Controller
{
    public function login()
    {
        return view('frontend.login');
    }

    public function forgotpassword()
    {
        return view('frontend.forgotpassword');
    }

    public function passwordrecovery()
    {
        return view('frontend.passwordrecovery');
    }
}
