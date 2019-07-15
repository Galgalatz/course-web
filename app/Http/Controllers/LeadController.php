<?php

namespace App\Http\Controllers;
use App\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request){

        $request->validate([
            
            'name' => 'required',
            'email' =>  'required',
            'course' => 'required',
       
        ],

        [
            'name.required' => 'הזן שם',
            'email.required' => 'הזן כתובת מייל',
            
        ]);

      //ADDING FRONT VALIDATIONS (JQUERY+AJAX) - VALIDATION.JS

      //insert details to DB      
      //$lead = new Lead;
      //$lead->name = $request->input('name');
      //$lead->save();

      //return redirect to tnx page
     }
}
