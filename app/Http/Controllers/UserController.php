<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
	function test(Request $request) {
        $user = new \App\User() ;
        
        $result = $user->check_token($request->input('token')) ;
        
        return $result ? true : false ;
    }
    
    function logout(Request $request) {
        $user = new \App\User() ;

        $result = $user->logout($request->input('token')) ;

        return $result ;
    }

	function login(Request $request) {

        $user = new \App\User() ;
        $token = Str::random(60) ;
		$result = $user->add_token(
            $request->input('email'),
            $request->input('password'),
            $token
        ) ;
        
        return $result ? $token : false ;
	}
}
