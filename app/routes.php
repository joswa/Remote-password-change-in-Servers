<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when postURI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');
Route::get('/studentform', 'HomeController@showStudent');
Route::post('/studentmanage', 'HomeController@studentManage');
Route::get('/Login', 'HomeController@Loginfunction');
Route::post('/LoginCheck', 'HomeController@Logincheck');
Route::post('/usermaster', 'HomeController@usermaster');
