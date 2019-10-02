<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use App\Course;
use App\Pages;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'דף נחיתה';
        $pages = Pages::all();
        return view('landing', compact('title', 'pages'));
    }

    public function show_courses($page_id)
    {
        $title = 'סדנאות';
        $courses = Course::all()->toArray();
        return view('courses', compact('title', 'courses'));
    }
=======
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
            Session::flash('fm', 'שם משתמש/סיסמא שגויים');
            Session::flash('fmpos', 'toast-top-right');
            return self::getSignin();
         }
    }



>>>>>>> b1164325b7d11e19e4c0349af0cd50d85802827d
}
