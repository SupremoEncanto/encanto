<?php

Route::get('/', function () {
    return view('layout.index');
});

Route::get('coristas', 'CoristaController@index');
Route::get('coristas/{corista}', 'CoristaController@show');