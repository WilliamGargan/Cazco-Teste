<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecuperarSenha extends Controller
{
    public function recuperarsenha()
    {
        return view('frontend.Recuperação');
    }
}
