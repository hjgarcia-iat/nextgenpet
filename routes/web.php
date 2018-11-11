<?php

Route::post('/help', 'HelpController@store')->name('help.post');

Route::get('/login', 'Auth\LoginController@create')->name('login.create');
Route::post('/login','Auth\LoginController@store')->name('login.store');
Route::post('/logout','Auth\LoginController@destroy')->name('login.destroy');

Route::get('/recover/password','Auth\ForgotPasswordController@create')->name('password.create');
Route::post('/recover/password','Auth\ForgotPasswordController@store')->name('password.store');
Route::get('/password/reset/{email}/{token}','Auth\ResetPasswordController@edit')->name('recover.password.edit');
Route::post('/password/update','Auth\ResetPasswordController@update')->name('recover.password.update');

Route::get('/register','Auth\RegisterController@create')->name('register.create');
Route::post('/register','Auth\RegisterController@store')->name('register.store');

Route::get('/my-account','AccountController@edit')->name('my-account');
Route::post('/my-account','AccountController@update')->name('my-account-update');

Route::get('file','FileController@show')->name('file.show');

Route::get('{page}', [
    'uses' => 'PagesController@show',
])->where(['page' => '.*']);

