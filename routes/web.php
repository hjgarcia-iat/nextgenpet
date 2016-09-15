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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home.index');
});

Route::get('about/flexibility', function () {
    return view('home.flexibility');
});

Route::get('about/research-based', function () {
    return view('home.research-based');
});

Route::get('about/module-and-units', function(){
    return view('home.modules');
});

Route::get('about/overview-of-extensions', function () {
    return view('home.extensions');
});

Route::get('about/overview-of-teaching-and-learning-activities', function () {
    return view('home.teaching-and-learning');
});

Route::get('about/engineering-design-activities', function () {
    return view('home.engineering');
});

Route::get('about/ngss-and-next-gen-pet', function () {
    return view('home.ngss');
});

Route::get('about/implementation-versions', function () {
    return view('home.implementation');
});

Route::get('workshops', function () {
    return view('home.workshops');
});

Route::get('about/development-staff', function () {
    return view('home.staff');
});

//Route::get('/resources', function () {
//    return view('pages.resource');
//});

Route::get('/help', function () {
    return view('pages.help');
});

Route::post('/help', function (Request $request) {




    return redirect()->to('help');
});

Route::get('/lecture-style-class', function () {
    return view('class-style.lecture');
});

Route::get('/studio-style-class', function () {
    return view('class-style.studio');
});
