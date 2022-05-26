<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CriarController extends Controller
{
    public function criar()
    {
        return view('frontend.CriaçãoUsuarios');
    }
}
