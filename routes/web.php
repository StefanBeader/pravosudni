<?php

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::namespace('Frontend')->group(function () {

    Route::get('/', 'PagesController@home');

});

Route::group(['namespace' => 'Backend', 'middleware' => 'auth'], function () {

    Route::get('/admin', 'AdminController@dashboard');

});