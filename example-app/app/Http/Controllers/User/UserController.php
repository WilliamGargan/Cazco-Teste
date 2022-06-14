<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Resources\Views\frontend;
use App\Models\User;
use Mail;

class UserController extends Controller
{
    public function login()
    {
        return view('frontend.login');
    }

    public function forgotPassword(Request $request)
    {
        $data = [
            'subject' => "Recuperar Senha",
            'email' => 'william.gargan@outlook.com',
            'content' => "http://127.0.0.1:8000/user/password-recovery"
        ];
  
        Mail::send('email-template', $data, function($message) use ($data) {
            $message->to($data['email'])->subject($data['subject']);
        });
        

        return view('frontend.forgot-password');
    }

    public function passwordRecovery()
    {
        return view('frontend.password-recovery');
    }
}
