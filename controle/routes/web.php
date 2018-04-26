<?php

Route::get('/', function () {
    return view('layout.index');
});

Route::get('coristas', 'CoristaController@index');
Route::get('coristas/{corista}', 'CoristaController@show');
Route::get('chamada', 'ChamadaController@index');

Route::get('/resources/assets/img/{filename}', function($filename){
    $path = resource_path() . '/assets/img/' . $filename;

    if(!File::exists($path)) {
        return response()->json(['message' => 'Image not found.'], 404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});