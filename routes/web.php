<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\PageController@getNull');

Route::get('/{page}','App\Http\Controllers\PageController@get');

Route::post('/language','App\Http\Controllers\LanguageController@post');

Route::post('/comment','App\Http\Controllers\CommentController@post');

Route::post('/like','App\Http\Controllers\CommentController@like');

Route::post('/dislike','App\Http\Controllers\CommentController@dislike');

Route::post('/login','App\Http\Controllers\LoginController@login');

Route::post('/auth','App\Http\Controllers\LoginController@auth');