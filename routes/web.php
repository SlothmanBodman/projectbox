<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//routes url info to controller functions
Route::get('/', 'PagesController@index');

Route::get('/feed', 'PagesController@feed');

Route::get('/briefs', 'PagesController@briefs');

Route::get('/login', 'PagesController@profile');

Route::post('/newUser', 'UserController@store');
