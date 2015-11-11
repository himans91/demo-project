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
// Route::resource('users', 'UsersController');

// Authentication routes
Route::get('/', 'Auth\AuthController@getLogin');
Route::post('/', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::group(["middleware" => "auth"], function() {
	/*-----------------------------------------------------------------------
		Project routes
	-----------------------------------------------------------------------*/
	Route::get('addproject', 'ProjectController@create');
	Route::post('addproject/store', 'ProjectController@store');
	Route::get('editproject/{id}', 'ProjectController@index');
	Route::post('editproject/{id}', 'ProjectController@edit');
	Route::post('projectsearch', 'ProjectController@show');
	
	/*-----------------------------------------------------------------------
		AsignUser routes
	-----------------------------------------------------------------------*/

	Route::get('assignusers', 'AssignUsersController@index');
	/*-----------------------------------------------------------------------
		Search routes
	-----------------------------------------------------------------------*/
	Route::post('search', 'SearchController@show');
	//Route::post('search', 'SearchController@display');
	//Route::get('search/user', 'SearchController@findbyfirstname');
	//Route::get('/search',['uses' => 'SearchController@getSearch','as' => 'search']);

	/*-----------------------------------------------------------------------
		Homepage routes
	-----------------------------------------------------------------------*/

	Route::get('homepage', 'Homepagecontroller@index');
	Route::get('search', 'Homepagecontroller@search');
	Route::get('projectsearch', 'Homepagecontroller@projectsearch');
	//Route::get('GetProjectUsers', 'Homepagecontroller@GetProjectUsers')
	/*-----------------------------------------------------------------------
		User routes
	-----------------------------------------------------------------------*/
	
	Route::get('edituser/{id}', 'UsersController@index');
	Route::post('edituser/{id}', 'UsersController@edit');
});