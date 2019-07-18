<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CourseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        return [
            'course_name' => 'required',
            'city' => 'required',
            'date' => 'required',
            // 'date' => ['required', 'regex:/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$*/'],
            'email' => 'required'
        ];

    }

    public function messages(){
        return[
            'course_name.required' => 'חובה להזין שם לסדנה',
            'city.required' => 'חובה להזין עיר / כתובת',
            'date.required' => 'חובה להזין תאריך',
            'email.required' => 'חובה להזין מייל לקוח'
        ];
    }
}
