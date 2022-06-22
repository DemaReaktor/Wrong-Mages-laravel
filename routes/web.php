<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\PageController@getNull');

Route::get('/{page}','App\Http\Controllers\PageController@get');

Route::post('/language','App\Http\Controllers\LanguageController@post');