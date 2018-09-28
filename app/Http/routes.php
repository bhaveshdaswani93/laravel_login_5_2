<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if(Auth::check())
    {
        return "User is logged in ";
    }
    else
    {
        return "Please Login.";
    }
//    return view('welcome');
//    if(Auth::attempt(['email'=>$email,'password'=>$password])) {
//        return redirect()->intended();
//    }
//    Auth::logout();
});

Route::auth();

Route::get('/home', 'HomeController@index');
