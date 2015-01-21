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

/*Route::get('/', function()
{
	return View::make('hello');
});*/

//Admin Route
Route::get('admin/login', array('uses' => 'AdminController@login'));
Route::post('admin/login', array('uses' => 'AdminController@doLogin'));
Route::get('admin/logout', array('uses' => 'AdminController@doLogout'));
Route::get('admin', 'AdminController@index')->before('auth.admin');
Route::get('admin/profile', 'AdminController@profile')->before('auth.admin');
Route::get('admin/formsederhana', 'AdminController@form')->before('auth.admin');
Route::get('admin/search', array('uses' => 'AdminController@search'))->before('auth.admin');
Route::Post('admin/search', array('uses' => 'AdminController@dosearch'))->before('auth.admin');

//Main Route
Route::get('/', 'AdminController@index')->before('auth.admin');