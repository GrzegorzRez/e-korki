<?php
Route::get('/', "MainController@index")->name('index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profil', 'ProfileController@index')->name('profile.index');
Route::get('/profil/{user}', 'ProfileController@show')->name('profile.show')->where(['user' => '[0-9]+']);
Route::get('/profil/{user}/oferty', 'ProfileController@offers')->name('profile.offers')->where(['user' => '[0-9]+']);
Route::get('/profil/{user}/opinie', 'ProfileController@opinions')->name('profile.opinions')->where(['user' => '[0-9]+']);
Route::get('/profil/edytuj', 'ProfileController@edit')->name('profile.edit');
Route::post('/profil/store', 'ProfileController@store')->name('profile.store');

Route::get('/materialy/moje', 'ResourcesController@index')->name('resources.index');
Route::get('/materialy/moje/dodaj', 'ResourcesController@add')->name('resources.add');
Route::get('/materialy/moje/udostepnij/{user}', 'ResourcesController@shareForUser')->name('resources.shareForUser');
Route::post('/materialy/moje/udostepnij/{user}', 'ResourcesController@share')->name('resources.share');
Route::post('/materialy/moje/store', 'ResourcesController@store')->name('resources.store');
Route::get('/materialy/moje/{resource}', 'ResourcesController@show')->name('resources.show')->where(['resource' => '[0-9]+']);
Route::get('/materialy/moje/{resource}/edytuj', 'ResourcesController@edit')->name('resources.edit')->where(['resource' => '[0-9]+']);
Route::put('/materialy/moje/{resource}', 'ResourcesController@update')->name('resources.update');
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

Route::get('wiadomosci', 'MessageController@index')->name('messages.index');
Route::get('wiadomosci/odebrane', 'MessageController@receive')->name('messages.receive');
Route::get('wiadomosci/wyslane', 'MessageController@send')->name('messages.send');
Route::post('wiadomosci/store', 'MessageController@store')->name('messages.store');
Route::get('konwersacja/{receive_user_id}', 'MessageController@show')->name('messages.conversation')->where(['receive_user_id' => '[0-9]+']);