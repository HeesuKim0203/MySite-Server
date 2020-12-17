<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
	function index($token) {
        $user = new \App\User() ;
        
        $result = $user->check_token($token) ;
        return $result ;
	}

	function login ($email, $password) {

        $user = new \App\User() ;
        $token = Str::random(60) ;
		$result = $user->add_token($email, $password, $token) ;
        
        return $result ;
	
	}
}
