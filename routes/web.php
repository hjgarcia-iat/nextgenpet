<?php

Route::post('/help', 'HelpController@store')->name('help.post');

Auth::routes();

Route::get('/my-account','AccountController@edit')->name('my-account')->middleware('auth');
Route::post('/my-account','AccountController@update')->name('my-account-update')->middleware('auth');

Route::get('{page}', [
    'uses' => 'PagesController@show',
])->where(['page' => '.*']);

