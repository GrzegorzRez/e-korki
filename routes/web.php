<?php
Route::get('/', "MainController@index")->name('index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profil', 'ProfileController@index')->name('profile.index');
Route::get('/profil/{id}', 'ProfileController@show')->name('profile.show')->where(['id' => '[0-9]+']);
Route::get('/profil/edytuj', 'ProfileController@edit')->name('profile.edit');
Route::post('/profil/store', 'ProfileController@store')->name('profile.store');
Route::get('/profil/MojeMaterialy', 'MyMaterialsController@index');

Route::get('/oferty','OfferController@index')->name('offers.index');
Route::get('/oferty/dodaj', 'OfferController@add')->name('offers.add');
Route::post('/oferty/store', 'OfferController@store')->name('offers.store');

Route::post('/opinie/store', 'OpinionsController@store')->name('opinions.store');
Route::delete('/opinie/{opinion}', 'OpinionsController@delete')->name('opinions.delete');