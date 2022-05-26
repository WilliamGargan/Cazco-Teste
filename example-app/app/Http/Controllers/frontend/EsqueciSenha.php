<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EsqueciSenha extends Controller
{
    public function esquecisenha()
    {
        return view('frontend.EsqueciMinhaSenha');
    }
}
