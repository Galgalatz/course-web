<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\CourseRequest;
use App\Pages;
use App\EmailsTivi;
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
        $courses = Course::where('page_id',  $page_id)->orderByRaw('`position`=0 asc')->orderBy('position', 'asc')->get();

        $page_name = $this->get_page_name($page_id);

        $page_url = $this->get_page_url($page_id);

        return view('courses', compact('courses', 'page_id', 'page_name', 'page_url'));
    }

    public function create($page_id)
    {
        $title = 'הוספת סדנה';

        if($page_id > 3){
            $tivi_emails = EmailsTivi::all();
            return view('add-course', compact('title', 'page_id', 'tivi_emails'));
        }else{
            return view('add-course', compact('title', 'page_id'));
        }
    }

    public function store(CourseRequest $request, $page_id)
    {
        $course = new Course();
        $course->page_id = $page_id;
        $course->course_name = $request['course_name'];
        $course->city = $request['city'];
        $course->date = $request['date'];
        if ($page_id > 3)
        {
            if($request['mail_text']){
                $course->mail_text = $request['mail_text'];
            }
        }
        else
        {
            $course->mail_text = '';
        }
        $course->to_email = $request['email'];
        $course->save();
        Session::flash('title', 'מזל טוב!');
        Session::flash('sm', 'עוד סדנה נולדה');
        Session::flash('smpos', 'toast-top-right');

        return redirect()->route('courses.create', ['page_id' => $page_id]);
    }

    public function edit($page_id, $id)
    {
        $course_item = Course::find($id)->toArray();
             
        $title = 'עריכת סדנה';

        if ($page_id > 3)
        {
             $tivi_emails = EmailsTivi::all();
             return view('edit_course', compact('course_item', 'title', 'page_id', 'id', 'tivi_emails'));
        }else{
            return view('edit_course', compact('course_item', 'title', 'page_id', 'id'));
        }
       
    }

    public function update(CourseRequest $request, $page_id, $id)
    {
        $course = Course::find($id);
        $course->course_name = $request['course_name'];
        $course->city = $request['city'];
        $course->date = $request['date'];
        if ($page_id > 3)
        {
            
            $course->mail_text = $request['mail_text'];
        }
        else
        {
            $course->mail_text = '';
        }
        $course->to_email = $request['email'];
        $course->save();
        Session::flash('sm', 'הסדנה עודכנה בהצלחה!');
        Session::flash('smpos', 'toast-top-right');

        return redirect()->route('courses', ['page_id' => $page_id]);
    }

    public function update_position(Request $request)
    {
        if($request->ajax())
        {
            $positions = $request->get('positions');

            foreach ($positions as $position)
            {
                $id = $position[0];
                $new_position = $position[1];

                $course = Course::find($id);
                $course->position = $new_position;
                $course->save();
            }
        }
    }

    public function destroy($page_id, $id)
    {
        Course::destroy($id);
        Session::flash('sm', 'הסדנה נמחקה בהצלחה!');
        Session::flash('smpos', 'toast-top-right');
        return redirect()->route('courses', ['page_id' => $page_id]);
    }

    private function get_page_name($id)
    {
        $page = Pages::find($id);

        return $page->name;
    }

    private function get_page_url($id)
    {
        $page = Pages::find($id);

        return $page->url;
    }

}
