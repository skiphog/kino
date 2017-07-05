<?php

Route::get('/', function () {
    return view('offer');
});

Route::get('/albums', 'AlbumController@index');
Route::get('/articles', 'ArticleController@index');
Route::get('/articles/article/{article}', 'ArticleController@show')->name('article');
