<?php

Route::post('/help', 'HelpController@store')->name('help.post');

Route::get('{page}', [
    'uses' => 'PagesController@show',
])->where(['page' => '.*']);