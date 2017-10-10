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

Route::get('/', 'MagangController@index');
Route::get('/crmag', 'MagangController@crmag');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/updatep/{id}', 'HomeController@updatep');
Route::get('/savep', 'HomeController@savep');
Route::get('/updatepsukses', 'MagangController@updatepsukses');
Route::get('/pcrmag', 'MagangController@pcrmag');
Route::get('/magang', 'MagangController@magang');
Route::get('/posmag', 'MagangController@posmag');
Route::get('/savemag', 'MagangController@savemag');
Route::get('/updatemag/{id}', 'MagangController@updatemag');
Route::get('/delmag/{id}', 'MagangController@delmag');
Route::get('/magang/{id}', 'MagangController@showmag');

Route::get('/login', 'LoginController@index');

Auth::routes();


