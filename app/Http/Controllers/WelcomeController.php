<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        // return response()->json([
        //     'name' => 'myProject Api',
        //     'message' => 'Welcome to myProject Api. This is a base endpoint.',
        //     'version' => 'n/a',
        //     'links'   => [
        //         [
        //             'rel'  => 'self',
        //             'href' => route(\Route::currentRouteName())
        //         ],
        //         [
        //             'rel'  => 'api.v1.index',
        //             'href' => route('api.v1.index')
        //         ],
        //     ],
        // ]) ;
    }
}
