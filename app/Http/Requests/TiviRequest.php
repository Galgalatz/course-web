<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class TiviRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'email' => 'required|email',
            'city' => 'required'
        ];
    }

    public function messages(){
        return[
            'city.required' => 'חובה להזין עיר ',
            'email.required' => 'חובה להזין מייל לקוח'
        ];
    }
}
