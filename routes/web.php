<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@home') -> name('home');
Route::get('/movie/show/{id}', 'HomeController@show') -> name('show');

Route::get('/movie/create', 'HomeController@create') -> name('create');
Route::post('/movie/store', 'HomeController@store') -> name('store');

Route::get('/movie/edit/{id}', 'HomeController@edit') -> name('edit');
Route::post('/movie/update/{id}', 'HomeController@update') -> name('update');

Route::get('/movie/delete/{id}', 'HomeController@delete') -> name('delete');
