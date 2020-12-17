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
    return view('index');
});

Route::get('dance-studio-templates', function () {
    return view('dance-studio-templates');
});

Route::get('deals', function () {
    return view('deals');
});

Route::get('seo', function () {
    return view('seo');
});

Route::post('/', 'ContactUsController@store')->name('contact.store');
