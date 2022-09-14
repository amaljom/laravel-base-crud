<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index')->name('home');


Route::get('/comics', 'ComicsController@index')->name('comics');
Route::get('/comics/{comic}', 'ComicsController@show')->name('comics.show');
Route::get('/create', 'ComicsController@create')->name('create');
