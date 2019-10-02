<?php

namespace App;
<<<<<<< HEAD

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App
 */
class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;
=======
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
>>>>>>> b1164325b7d11e19e4c0349af0cd50d85802827d
}
