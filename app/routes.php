<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(array('prefix'=>'admin'),function(){
     Route::resource('answers','AdminAnswersController');
});

Route::resource('answers', 'AnswersController');
Route::resource('news', 'NewsController');

// Account
Route::get('login', 'AccountController@getLogin');
// Route::post('/login', 'AccountController@postLogin');
// Route::get('/register', 'AccountController@getRegister');
// Route::post('/register', 'AccountController@postRegister');
// Route::get('/logout', 'AccountController@getLogout');
// Route::controller('account', 'AccountController');
