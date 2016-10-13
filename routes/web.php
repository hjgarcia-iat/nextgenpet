<?php

Route::get('/help', 'HelpController@create');
Route::post('/help', 'HelpController@store');

Route::get('{page}', [
    'uses' => 'PagesController@show',
])->where(['page' => '.*']);
