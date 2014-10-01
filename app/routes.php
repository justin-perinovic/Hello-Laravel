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

Route::get('users', function()
{
    return 'You are looking for users.  One moment, please...';
});

Route::get('timezone', function()
{
    return Config::Get('app.timezone');
});

Route::get('environment', function()
{
    return App::environment();
});

Route::get('mandatory-param/{val?}', function($val)
{
    return $val;
});

Route::get('optional-param/{val?}', function($val='stuff')
{
    return $val;
});

Route::get('multiParams/{id}/{name}', function($id,$name) {
	return 'ID: ' . $id . '<br />' .
		'Name: ' . $name;
})
->where(array('id' => '[0-9]+', 'name' => '[A-Za-z]+'));
