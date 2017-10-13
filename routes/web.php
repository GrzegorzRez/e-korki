<?php
Route::get('/', "MainController@index")->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD


Route::get('/profile/edit','ProfileController@edit')->name('profile.edit');
Route::get('/profile', 'ProfileController@index')->name('profile.index');
Route::get('/profile/{id}', 'ProfileController@show')->name('profile.show');

=======
Route::get('/profil', 'ProfileController@index')->name('profile.index');
Route::get('/profile/{id}', 'ProfileController@show')->name('profile.show');
Route::get('/profil/edytuj', 'ProfileController@edit')->name('profile.edit');
Route::post('/profile/store', 'ProfileController@store')->name('profile.store');
>>>>>>> d8d7bbb2f0196d42acd7507da42b5cb62ce7a470

Route::get('/oferty','OfferController@index')->name('offers.index');
Route::get('/oferty/dodaj', 'OfferController@add')->name('offers.add');
Route::post('/oferty/store', 'OfferController@store')->name('offers.store');

Route::get('/opinie', 'OpinionsController@index')->name('opinions.index');
Route::get('/opinie/dodaj/{teacher}', 'OpinionsController@add')->name('opinions.add');
Route::post('/opinie/store', 'OpinionsController@store')->name('opinions.store');