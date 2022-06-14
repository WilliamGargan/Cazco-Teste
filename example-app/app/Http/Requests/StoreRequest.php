<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'name'                  => 'required|max:255',
            'email'                 => 'required|email|max:255|unique:users,email,'. request('id'),
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ];
    }

    public function attributes()
    {
        return [
            'name'                      => 'nome',
            'email'                     => 'email',
            'password'                  => 'password',
            'password_confirmation'     => 'password_confirmation'
        ];
    }
}