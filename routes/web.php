<?php

Route::get('/', function () {
    return view('offer');
});

Route::get('/albums', 'AlbumController@index');
Route::get('/login', 'Auth\LoginController@show')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'articles'], function () {

    Route::get('/', 'ArticleController@index');

    Route::get('/article/{article}', 'ArticleController@show')->name('article');
});

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'Admin\IndexController@index');

    Route::resource('/articles', 'Admin\ArticleController');
});
