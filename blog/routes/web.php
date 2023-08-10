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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::match(['get','post'], '/', 'HomeController@index');

Auth::routes();

Route::match(['get','post'],'/first_page', 'PageController@first_page')->name('first_page');
