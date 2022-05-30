<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Resources\Views\frontend;

class UsersController extends Controller
{
    public function create()
    {
        return view('frontend.create-users');
    }

    public function edit()
    {
        return view('frontend.edit-users');
    }

    public function users()
    {
        return view('frontend.list-users');
    }
}
