<?php

Route::get('/help', 'HelpController@create');
Route::post('/help', 'HelpController@store');
Route::post('/online-learning','HelpController@storeOnlineLearning');

Route::get('{page}', [
    'uses' => 'PagesController@show',
])->where(['page' => '.*']);