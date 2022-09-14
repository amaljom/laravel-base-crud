<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index')->name('home');


Route::get('/comics', 'ComicsController@index')->name('comics');
Route::post('/comics/store', 'ComicsController@store')->name('comics.store');
Route::get('/comics/create', 'ComicsController@create')->name('comics.create');
Route::get('/comics/{comic}', 'ComicsController@show')->name('comics.show');

// Route::resource('comics', 'ComicsController');