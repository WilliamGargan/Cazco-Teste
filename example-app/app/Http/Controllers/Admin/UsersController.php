<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Resources\Views\frontend;
use App\Models\User;

class UsersController extends Controller
{
    public function store(Request $request)
    {
        $user = array(
            "name" => $request->input("Nome"),
            "email" => $request->input("Email"),
            "password" => $request->input("senha"),
        );

        $newUser = User::create($user);

        if ($newUser)
            $users = User::all();        
            return view('frontend.list-users', ['users' => $users]);
    }

    public function create(Request $request)
    {
        return view('frontend.create-users');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('frontend.edit-users', ['user' =>  $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id)->update(["name" => $request->input("name"), "email" =>  $request->input("email")]);
        $users = User::all();        
        return view('frontend.list-users', ['users' => $users]);
    }

    public function users()
    {
        $users = User::all();        
        return view('frontend.list-users', ['users' => $users]);
    }

    public function reports()
    {
        return view('frontend.reports-users');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        $users = User::all();        
        return view('frontend.list-users', ['users' => $users])->with('msg', 'Usuário excluido com sucesso!');
    }
}
