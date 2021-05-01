<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('auth')->group(function () {
    Route::post('register', 'AuthController@register');   
    Route::post('login', 'AuthController@login');
    Route::get('refresh', 'AuthController@refresh');
    Route::group(['middleware' => 'auth:api'], function(){
        Route::post('user', 'AuthController@user');
	Route::post('logout', 'AuthController@logout') ; 
    });
});

Route::resource('contents', 'ContentController') ;
Route::resource('projects', 'ProjectController') ;
Route::resource('images', 'ImageController') ;
Route::resource('comments', 'CommentController') ;
Route::resource('visitors', 'VisitorController') ;
Route::resource('videos', 'VideosController') ;
Route::post('comments/check', 'CommentController@checkUser') ;
Route::post('contents/slide', 'ContentController@slideContent') ;
