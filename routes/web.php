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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', 'AnkitController@index');

Route::get('/daytwo', 'daytwoController@index');

Route::get('/demo', 'daytwoController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
