<?php

Route::get('/help', 'HelpController@create');
Route::post('/help', 'HelpController@store');

Auth::routes();

Route::get('{page}', [
    'uses' => 'PagesController@show',
])->where(['page' => '.*']);

