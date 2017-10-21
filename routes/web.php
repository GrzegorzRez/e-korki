<?php
Route::get('/', "MainController@index")->name('index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profil', 'ProfileController@index')->name('profile.index');
Route::get('/profil/{id}', 'ProfileController@show')->name('profile.show')->where(['id' => '[0-9]+']);
Route::get('/profil/edytuj', 'ProfileController@edit')->name('profile.edit');
Route::post('/profil/store', 'ProfileController@store')->name('profile.store');

Route::get('/materialy/moje', 'ResourcesController@index')->name('resources.index');
Route::get('/materialy/moje/dodaj', 'ResourcesController@add')->name('resources.add');
Route::get('/materialy/moje/{id}', 'ResourcesController@show')->name('resources.show')->where(['id' => '[0-9]+']);
Route::post('/materialy/moje/store', 'ResourcesController@store')->name('resources.store');
Route::delete('/materialy/moje/{resource}', 'ResourcesController@delete')->name('resources.delete');

Route::get('/oferty','OfferController@index')->name('offers.index');
Route::get('/oferty/{id}', 'OfferController@show')->name('offers.show')->where(['id' => '[0-9]+']);
Route::get('/oferty/{offer}/edytuj', 'OfferController@edit')->name('offers.edit');
Route::post('/oferty/update', 'OfferController@update')->name('offers.update');
Route::get('/oferty/dodaj', 'OfferController@add')->name('offers.add');
Route::post('/oferty/store', 'OfferController@store')->name('offers.store');
Route::get('/oferty/{offer}/usun', 'OfferController@delete')->name('offers.delete');

Route::post('/opinie/store', 'OpinionsController@store')->name('opinions.store');
Route::delete('/opinie/{opinion}', 'OpinionsController@delete')->name('opinions.delete');

//facebook login
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook.login');
Route::get('/loggedin', 'Auth\LoginController@handleProviderCallback');

Route::get('wiadomosci/lista', 'MessageController@show')->name('messages.messageslist');
Route::get('konwersacja/{id}', 'MessageController@showConversation')->name('conversation')->where(['id' => '[0-9]+']);
Route::post('/message/send', 'MessageController@send')->name('message.send');