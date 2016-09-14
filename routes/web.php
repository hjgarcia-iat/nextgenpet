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
    return view('home.index');
});

//Route::get('/resources', function () {
//    return view('pages.resource');
//});

Route::get('/help', function () {
    return view('pages.help');
});

Route::get('/lecture-style-class', function () {
    return view('class-style.lecture');
});

Route::get('/studio-style-class', function () {
    return view('class-style.studio');
});
