<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
// use DB;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;

class CourseController extends MainController
{
    public function index(){
        self::$data['courses'] = Course::orderBy('date')->simplePaginate(10);
        return view('courses', self::$data);
       }

       public function create(){
          self::$data['title'] = 'הוספת סדנה';
         return view('add-course', self::$data);
         }

         public function store(CourseRequest $request){
            Course::save_new($request); //calling the method only if pass validation MenuRequest
            return redirect('courses');
        }

       public function show($id){
        self::$data['item_id'] = $id;
        self::$data['title'] = 'מחיקת סדנה';
        return view('delete_course', self::$data);
     }

       public function edit($id){
        self::$data['course_item'] = Course::find($id)->toArray();
        self::$data['title'] = 'עריכת סדנה';
        return view('edit_course', self::$data);
     }

     public function update(CourseRequest $request, $id){
      Course::update_item($request, $id);
      return redirect('courses');
  }

     public function destroy($id){
        Course::destroy($id);
        Session::flash('sm', 'הסדנה נמחקה בהצלחה!');
        Session::flash('smpos', 'toast-top-right');
        return redirect('courses');
     }
}
