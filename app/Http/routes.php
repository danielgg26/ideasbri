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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::resource('user','UserController');

Route::group(['middleware' => 'auth'], function()
{
	Route::resource('user','UserController');
	//Route::resource('user', 'UserController', ['only' => ['index']]);
    //Route::resource('todo', 'TodoController', ['only' => ['index']]);
});

Route::group(['middleware' => 'auth'], function()
{
	Route::resource('comida', 'ComidaController',['except' => ['index', 'show']]);
	Route::get('comida/todos','ComidaController@all');
	Route::resource('hogar', 'HogarController',['except' => ['index','show']]);
	Route::get('hogar/todos','HogarController@all');
	Route::resource('moda', 'ModaController',['except' => ['index','show']]);
	Route::get('moda/todos','ModaController@all');
	Route::resource('salud', 'SaludController',['except' => ['index','show']]);
	Route::get('salud/todos','SaludController@all');
	Route::resource('tecnologia','TecnologiaController',['except' => ['index','show']]);
	Route::get('tecnologia/todos','TecnologiaController@all');
});

Route::resource('comida','ComidaController',['only'=> ['index','show']]);
Route::resource('hogar','HogarController',['only'=> ['index','show']]);
Route::resource('moda','ModaController',['only'=>['index','show']]);
Route::resource('salud','SaludController',['only'=>['index','show']]);
Route::resource('tecnologia','TecnologiaController',['only'=>['index','show']]);

/*Route::get('register',['middleware' => 'auth',function(){
	return View::make('auth.register');
}]);

Route::get('logout', function()
{
	Auth::logout();
	return Redirect::to('/');
});


Route::get('admin',array('before'=>'auth',function()
{
	return View::make('package.index');
}));*/