<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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

    public $itemstamps = false ;



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ]; 


    function add_token($email, $password, $token) {
        
        $result = self::where([
                [ 'email', '=', $email ], 
                [ 'password',  '=', $password]
            ])
            ->update(['remember_token' => $token]) ;
        
        return $result ;
    	
    }

    function check_token($token) {
    
        $result = self::where('remember_token', '=', '$token') ;

        return $result ;
    }

}
