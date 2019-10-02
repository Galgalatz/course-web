<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Course extends Model
{
<<<<<<< HEAD
    protected $fillable = [
        'page_id', 'course_name', 'city', 'date', 'to_email'
    ];
=======
    static public function save_new($request){

        $course = new self();
        $course->course_name = $request['course_name'];
        $course->city = $request['city'];
        $course->date = $request['date'];
        $course->to_email = $request['email'];
        $course->save();
        Session::flash('title', 'מזל טוב!');
        Session::flash('sm', 'עוד סדנה נולדה');
        Session::flash('smpos', 'toast-top-right');
       }
       static public function update_item($request, $id){

        $course = self::find($id);
        $course->course_name = $request['course_name'];
        $course->city = $request['city'];
        $course->date = $request['date'];
        $course->to_email = $request['email'];
        $course->save();
        Session::flash('sm', 'הסדנה עודכנה בהצלחה!');
        Session::flash('smpos', 'toast-top-right');
    
       }

>>>>>>> b1164325b7d11e19e4c0349af0cd50d85802827d
}
