<?php

namespace App\Http\Controllers;

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
}
