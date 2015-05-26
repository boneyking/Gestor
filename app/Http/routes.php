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

/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::controllers([
	'validacion/login' => 'Validacion\ValidacionController',
	'/' => 'Admin\AdminController'
]);
*/
Route::get('/','Admin\AdminController@index');
Route::get('validacion/login', 'Validacion\ValidacionController@index');
//Route::get('validacion', 'HomeController@index');


Route::controllers([
	'validacion' => 'HomeController'
]);
