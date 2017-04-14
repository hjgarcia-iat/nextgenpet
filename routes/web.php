<?php

Route::post('/help', 'HelpController@store')->name('help.post');

Route::get('/login', 'Auth\LoginController@create')->name('login.create');
Route::post('/login','Auth\LoginController@store')->name('login.store');
Route::post('/logout','Auth\LoginController@destroy')->name('login.destroy');

//Auth::routes();

Route::get('/my-account','AccountController@edit')->name('my-account')->middleware('auth');
Route::post('/my-account','AccountController@update')->name('my-account-update')->middleware('auth');

Route::get('{page}', [
    'uses' => 'PagesController@show',
])->where(['page' => '.*']);

