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

//Route::get('/applypassword', 'UsersController@index');// als er resource wordt gebruikt, moet er ook een index, create, edit method make


Route::get('register', 'UsersController@create');
Route::get('applypassword', 'UsersController@applypassword');
Route::get('edituser/{id}', 'UsersController@index');
Route::post('edituser/{id}', 'UsersController@edit');

// Route::resource('users', 'UsersController');

//homepage routes
Route::get('homepage', 'Homepagecontroller@index');
Route::get('search', 'Homepagecontroller@search');



// Authentication routes
Route::get('/', 'Auth\AuthController@getLogin');
Route::post('/', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Project routes
Route::get('addproject', 'ProjectController@create');
Route::post('addproject/store', 'ProjectController@store');

//Search routes
Route::get('search/user', 'SearchController@finduserbyname');