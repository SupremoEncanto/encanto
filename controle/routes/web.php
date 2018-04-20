<?php

Route::get('/', function () {
    return view('layout.index');
});

Route::get('corista', function () {
    return view('corista.index');
});
