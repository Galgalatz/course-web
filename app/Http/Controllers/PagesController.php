<?php

namespace App\Http\Controllers;
use App\Course;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\SigninRequest;
use App\User;

class PagesController extends MainController
{

    public function home(){
        self::$data['title'] = 'סדנאות';    
        self::$data['courses'] = Course::all()->toArray();
        return view('home', self::$data);
     }

    public function getSignin(){

    if (!Session::has('is_admin')){
        self::$data['title'] = 'כניסת אדמין';        
        return view('signin', self::$data);
    }else{
        return redirect('courses');
    }
         
    }

    public function postSignin(SigninRequest $request){

        if( User::validUser($request['name'], $request['password']) ){
            Session::put('is_admin', true);
            Session::flash('sm', 'ברוך שובך!');
            Session::flash('smpos', 'toast-top-right');
            self::$data['title'] = 'אדמין פאנל';
            return redirect('courses');
           
        }else{
          return self::getSignin();
         }
    }



}
