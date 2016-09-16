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

use App\Http\Requests\HelpRequest;
use App\Mail\Help;

Route::get('/', function () {
    return view('home.index')
        ->with('pageTitle', 'Home');
});

Route::get('about/flexibility', function () {
    return view('home.flexibility')
        ->with('pageTitle', 'Flexibility');
});

Route::get('about/research-based', function () {
    return view('home.research-based')
        ->with('pageTitle', 'Research-Based');
});

Route::get('about/module-and-units', function(){
    return view('home.modules')
        ->with('pageTitle', 'Modules &amp; Units');
});

Route::get('about/overview-of-extensions', function () {
    return view('home.extensions')
        ->with('pageTitle', 'Overview of Extensions');
});

Route::get('about/overview-of-teaching-and-learning-activities', function () {
    return view('home.teaching-and-learning')
        ->with('pageTitle', 'Overview of Teaching &amp; Learning Activities');
});

Route::get('about/engineering-design-activities', function () {
    return view('home.engineering')
        ->with('pageTitle', 'Engineering Design Activities');
});

Route::get('about/ngss-and-next-gen-pet', function () {
    return view('home.ngss')
        ->with('pageTitle', 'NGSS &amp; Next Gen PET');
});

Route::get('about/implementation-versions', function () {
    return view('home.implementation')->with('pageTitle', 'Implementation Versions');
});

Route::get('workshops', function () {
    return view('home.workshops')->with('pageTitle', 'Workshops for Faculties and PD Providers');
});

Route::get('about/development-staff', function () {
    return view('home.staff')->with('pageTitle', 'About the Development Staff');
});

//Route::get('/resources', function () {
//    return view('pages.resource');
//});

Route::get('/help', 'HelpController@create');
Route::post('/help', 'HelpController@store');

Route::get('/lecture-style-class', function () {
    return view('class-style.lecture')->with('pageTitle', 'Lecture Style Class');
});

Route::get('/studio-style-class', function () {
    return view('class-style.studio')->with('pageTitle', 'Studio Style Class');
});
