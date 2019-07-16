<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Course extends Model
{
    protected $fillable = [
        'page_id', 'course_name', 'city', 'date', 'to_email'
    ];
}
