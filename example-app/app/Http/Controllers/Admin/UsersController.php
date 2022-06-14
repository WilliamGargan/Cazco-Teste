<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use Resources\Views\frontend;
use App\Models\User;
use App\Models\Report;
use Mail;

class UsersController extends Controller
{

    public function create()
    {
        return view('frontend.create-users');
    }

    public function store(StoreRequest $request)
    {
        $user = array(
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => $request->input("password"),
        );

        $newUser = User::create($user);

        if ($newUser){
            $users = User::all();        
            return view('frontend.list-users', ['users' => $users]);
        }
    
        return redirect()->back()->withInput($request->all());
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('frontend.edit-users', ['user' =>  $user]);
    }

    public function update(UpdateRequest $request, $id)
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

    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->input("id"));
        foreach($user->reports as $report){
            $report->delete();
        }        
        $user->delete();
        $users = User::all();        
        return view('frontend.list-users', ['users' => $users])->with('msg', 'Usuário excluido com sucesso!');
    }

    public function reports()
    {
        return view('frontend.reports-users');
    }

    public function show($id)
    {
        $user = User::FindOrFail($id);
        return view('frontend.reports-users', ['reports' => $user->reports]);
    }
}
