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

Route::get('/', 'HomeController@index');
Route::get('/blog', 'HomeController@blog');
Route::get('/listing', 'HomeController@listing');
Route::get('/search', 'SearchController@index');

/*
ROUTE AFTER LOGIN
*/
Route::get('/dashboard', 'InsideController@home');
Route::get('/updateprof/{id}', 'InsideController@updateprof');
Route::get('/updprofsuk', 'InsideController@updprofsuk');
Route::get('/mylisting', 'InsideController@mylisting');
Route::get('/addlisting', 'InsideController@addlisting');
Route::post('/savelist', 'InsideController@savelist');


/*
GAGAL
*/
// Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/test', 'HomeController@test');
Route::get('/filter', 'SearchController@index');
Route::get('/how', 'HomeController@how');
Route::get('/cari', 'HomeController@cari');
Route::get('/profilev/{id}', 'HomeController@profilev');
Route::get('/summary', function() {
    return View::make('layouts.summary');
});
Route::get('/bride', function() {
    return View::make('layouts.bride');
});
Route::get('/addven', 'InsideController@addven');
Route::get('/updateven/{id}', 'InsideController@updateven');
Route::post('/saveupdven', 'InsideController@saveupdven');
Route::get('/delven/{id}', 'InsideController@delven');
Route::get('/post', 'HomeController@post');
Route::get('/listing2', function() {
    return View::make('layouts.listing2');
});

Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
