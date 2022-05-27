<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Resources\Views\frontend;

class UsuariosController extends Controller
{
    public function create()
    {
        return view('frontend.createusers');
    }

    public function edit()
    {
        return view('frontend.editusers');
    }

    public function users()
    {
        return view('frontend.listusers');
    }
}
