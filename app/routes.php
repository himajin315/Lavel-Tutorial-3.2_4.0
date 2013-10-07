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
Route::get('authors/new', array('as'=>'newAuthor', 'uses' => 'AuthorsController@getNew'));
Route::post('authors/create', array('before'=>'crsf', 'uses' => 'AuthorsController@postCreate'));
Route::get('author/{id}/edit', array('as'=>'editAuthor', 'uses' => 'AuthorsController@getEdit'));
Route::put('author/update', array('before'=>'crsf','uses' => 'AuthorsController@putUpdate'));
Route::delete('author/delete', array('before'=>'crsf','uses' => 'AuthorsController@deleteDestroy'));


// laravel 3.2
//Route::get('authors', array('uses' => 'author@index'));

Route::get('profile', array('before' => 'auth', function()
{
  // Only authenticated users may enter...
}));

Route::post('register', array('before' => 'csrf', function()
{
  return 'You gave a valid CSRF token!';
}));