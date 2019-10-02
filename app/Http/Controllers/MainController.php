<?php

namespace App\Http\Controllers;
use App\Course;

use Illuminate\Http\Request;

class MainController extends Controller
{

    static public $data = ['err_top' => true];

    function __construct(){
        self::$data['courses'] = Course::all()->toArray();
    }
}
