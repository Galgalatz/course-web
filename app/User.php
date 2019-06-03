<?php

namespace App;
use Session;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  
    static public function validUser($name, $password){

        $valid = false;

        if(strtolower($name) === 'admin'){
            if( $password === 'gal'){
                $valid = true;
            }
        }
        return $valid;
    }
}
