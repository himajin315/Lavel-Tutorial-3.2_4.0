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

// laravel 4.0
Route::get('authors', array('as'=>'authors', 'uses' => 'AuthorsController@getIndex'));
Route::get('author/{id}', array('as'=>'author', 'uses' => 'AuthorsController@getView'));


// laravel 3.2
//Route::get('authors', array('uses' => 'author@index'));

