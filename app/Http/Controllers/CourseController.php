<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\CourseRequest;
use Illuminate\Http\Request;
use Session;

// use DB;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($page_id)
    {
        $courses = Course::where('page_id',  $page_id)->simplePaginate(10);
        return view('courses', compact('courses', 'page_id'));
    }

    public function create($page_id)
    {
        $title = 'הוספת סדנה';
        return view('add-course', compact('title', 'page_id'));
    }

    public function store(CourseRequest $request)
    {
        $course = new Course();
        $course->course_name = $request['course_name'];
        $course->city = $request['city'];
        $course->date = $request['date'];
        $course->to_email = $request['email'];
        $course->save();
        Session::flash('title', 'מזל טוב!');
        Session::flash('sm', 'עוד סדנה נולדה');
        Session::flash('smpos', 'toast-top-right');
//        Course::save_new($request); //calling the method only if pass validation MenuRequest
        return redirect('courses');
    }

    public function show($id)
    {
        self::$data['item_id'] = $id;
        self::$data['title'] = 'מחיקת סדנה';
        return view('delete_course', self::$data);
    }

    public function edit($id)
    {
        self::$data['course_item'] = Course::find($id)->toArray();
        self::$data['title'] = 'עריכת סדנה';
        return view('edit_course', self::$data);
    }

    public function update(CourseRequest $request, $id)
    {
        $course = Course::find($id);
        $course->course_name = $request['course_name'];
        $course->city = $request['city'];
        $course->date = $request['date'];
        $course->to_email = $request['email'];
        $course->save();
        Session::flash('sm', 'הסדנה עודכנה בהצלחה!');
        Session::flash('smpos', 'toast-top-right');

        return redirect('courses');
    }

    public function destroy($id)
    {
        Course::destroy($id);
        Session::flash('sm', 'הסדנה נמחקה בהצלחה!');
        Session::flash('smpos', 'toast-top-right');
        return redirect('courses');
    }
}
