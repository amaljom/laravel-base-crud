<?php

use Illuminate\Support\Facades\Route;


 Route::get('/', 'HomeController@index')->name('home');


  // Route::get('/comics', 'ComicsController@index')->name('comics');
  // Route::post('/comics/store', 'ComicsController@store')->name('comics.store');
  // Route::get('/comics/create', 'ComicsController@create')->name('comics.create');
  // Route::get('/comics/{comic}', 'ComicsController@show')->name('comics.show');
  // Route::PUT('/comics/{comic}/update', 'ComicsController@update')->name('comics.update');
  // Route::DELETE('/comics', 'ComicsController@destroy')->name('comics.destroy');
  // Route::get('/comics/{comic}/edit', 'ComicsController@edit')->name('comics.edit');

  Route::resource('comics', 'ComicsController');