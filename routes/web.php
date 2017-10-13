<?php
Route::get('/', "MainController@index")->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile.index');
Route::get('/profile/{id}', 'ProfileController@show')->name('profile.show');

Route::get('/oferty','OfferController@index')->name('offers.index');
Route::get('/oferty/dodaj', 'OfferController@add')->name('offers.add');
Route::post('/oferty/store', 'OfferController@store')->name('offers.store');

Route::get('/opinie', 'OpinionsController@index')->name('opinions.index');
Route::get('/opinie/dodaj/{teacher}', 'OpinionsController@add')->name('opinions.add');
Route::post('/opinie/store', 'OpinionsController@store')->name('opinions.store');