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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('admin', 'AdminController@index');
Route::post('admin', 'AdminController@run_team_assign_algorithm');
Route::get('admin/getTeam/{teamname}', 'AdminController@getCurrentTeam');
Route::get('admin/getStudent/{username}', 'AdminController@getCurrentStudent');
Route::post('admin/deleteStudent/{username}', 'AdminController@deleteCurrentStudent');

Route::resource('users', 'UserController');

//authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::controllers([
    'password' => 'Auth\PasswordController',
]);
