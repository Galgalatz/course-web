<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> b1164325b7d11e19e4c0349af0cd50d85802827d

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
<<<<<<< HEAD

    public function user()
    {
        return Auth::user();
    }
=======
>>>>>>> b1164325b7d11e19e4c0349af0cd50d85802827d
}
