<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'name'  => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,'. request('id')
        ];
    }

    public function attributes()
    {
        return [
            'name'  => 'nome',
            'email' => 'email'
        ];
    }
}