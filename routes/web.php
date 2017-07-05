<?php

Route::get('/', function () {
    return view('offer');
});

Route::get('/albums', 'AlbumController@index');
