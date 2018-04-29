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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/blog', 'HomeController@blog');
Route::get('/post', 'HomeController@post');
Route::get('/filter', 'SearchController@index');

Route::get('/how', 'HomeController@how');

Route::get('/cari', 'HomeController@cari');
Route::get('/profilev/{id}', 'HomeController@profilev');
Route::get('/summary', 'HomeController@summary');
Route::get('/search', 'SearchController@index');
Route::get('/bride', 'HomeController@bride');

/*
ROUTE AFTER LOGIN
*/
Route::get('/home', 'HomeController@home');
Route::get('/addven', 'InsideController@addven');
Route::get('/updateven/{id}', 'InsideController@updateven');
Route::post('/saveupdven', 'InsideController@saveupdven');
Route::get('/delven/{id}', 'InsideController@delven');


/*
END ROUTE AFTER LOGIN
*/
