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

Route::get('dance-studio-websites', function () {
    return view('dance-studio-websites');
});

Route::get('deals', function () {
    return view('deals');
});

Route::get('seo', function () {
    return view('seo');
});

Route::get('example-studio', function () {
    return view('example-studio');
});

Route::get('cdmc', function () {
    return view('cdmc');
});

Route::get('ecpac', function () {
    return view('ecpac');
});

Route::get('s3d', function () {
    return view('s3d');
});

Route::get('kpdc', function () {
    return view('kpdc');
});

Route::get('edt', function () {
    return view('edt');
});

Route::get('dupac', function () {
    return view('dupac');
});

Route::get('animation', function () {
    return view('animation');
});

Route::get('animation-2', function () {
    return view('animation-2');
});

Route::get('animation-3', function () {
    return view('animation-3');
});

Route::get('dance-studio-website-template', function () {
    return view('dance-studio-website-template');
});

Route::get('/newsletters/june-2021', function () {
    return view('/newsletters/june-2021');
});

Route::get('/newsletters', function () {
    return view('/newsletters/index');
});

Route::post('/', 'ContactUsController@store')->name('contact.store');
