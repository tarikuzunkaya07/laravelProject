<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('frontend.layouts.default');
});
Route::get('/car', function () {
    return view('partials.carousel');
});

Auth::routes();

Route::get('/admin', 'HomeController@index');
Route::get('/admin/urunler', 'FileUploadController@index');
Route::post('/admin/urunler', 'FileUploadController@store');
