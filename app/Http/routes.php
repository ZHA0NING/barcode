<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('admin.layout.base');
    return view('admin.index.home');
    //return view('welcome');
});
Route::get('/index', function () {
    //return view('admin.layout.base');
    return view('admin.index.home');
    //return view('welcome');
});
Route::get('/user/signout', function () {

    //return view('admin.layout.base');
    return view('admin.user.signin');
    //return view('welcome');
});

Route::get('/changku/ruku', function () {

    //return view('admin.layout.base');
    return view('admin.index.ruku');
    //return view('welcome');
});
Route::get('/shengchan', function () {

    //return view('admin.layout.base');
    return view('admin.index.shengchan');
    //return view('welcome');
});

/*
|-------------------------------------------------------------------------- 
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
