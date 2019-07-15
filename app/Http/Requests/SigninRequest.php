<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SigninRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'password' => 'required',
        ];
    }

    public function messages(){
        return[
            'name.required' => 'יש להזין שם משתמש',
            'password.required' => 'יש להזין סיסמא',
        ];
    }
}
