<?php
Route::get('/', "MainController@index")->name('index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profil', 'ProfileController@index')->name('profile.index');
Route::get('/profil/{id}', 'ProfileController@show')->name('profile.show')->where(['id' => '[0-9]+']);
Route::get('/profil/edytuj', 'ProfileController@edit')->name('profile.edit');
Route::post('/profil/store', 'ProfileController@store')->name('profile.store');

//do usunięcia póżniej
Route::get('/mojeMaterialy', 'MyMaterialsController@index')->name('myMaterials.index');
Route::get('/udostepnioneMaterialy', 'sharedMaterialsController@index')->name('sharedMaterials.index');
//---------------

Route::get('/materialy/moje', 'ResourcesController@index')->name('resources.index');
Route::get('/materialy/moje/dodaj', 'ResourcesController@add')->name('resources.add');
Route::get('/materialy/moje/{id}', 'ResourcesController@show')->name('resources.show')->where(['id' => '[0-9]+']);
Route::post('/materialy/moje/store', 'ResourcesController@store')->name('resources.store');
Route::delete('/materialy/moje/{resource}', 'ResourcesController@delete')->name('resources.delete');

Route::get('/oferty','OfferController@index')->name('offers.index');
Route::get('/oferty/dodaj', 'OfferController@add')->name('offers.add');
Route::post('/oferty/store', 'OfferController@store')->name('offers.store');

Route::post('/opinie/store', 'OpinionsController@store')->name('opinions.store');
Route::delete('/opinie/{opinion}', 'OpinionsController@delete')->name('opinions.delete');

Route::get('/login/fb','FacebookLoginController@redirectToProvider');
Route::get('/loggedin','FacebookLoginController@handleProviderCallback');
