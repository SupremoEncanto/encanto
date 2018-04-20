<?php

Route::get('/', function () {
    return view('layout.index');
});

Route::get('corista', 'CoristaController@index');