<?php

use Illuminate\Support\Facades\Route;

// Route Auth
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Route Customers
Route::get('list-customers','CustomerController@index')->name('list-customers')->middleware('userauth');
Route::get('list-customers/search','CustomerController@search')->name('customer-search')->middleware('userauth');
Route::get('customer-export', 'CustomerController@export')->name('customer-export')->middleware('userauth');
Route::post('customer-import', 'CustomerController@import')->name('customer-import')->middleware('userauth');

// Route Customer Dokumentasi
Route::get('doc-customer','CustomerController@docIndex')->name('doc-index')->middleware('userauth');
Route::post('doc-customer/update/{id}','CustomerController@docUpload')->middleware('userauth');
Route::get('doc-customer/delete/{id}','CustomerController@destroy')->middleware('userauth');

// Route Promo LEDClub 2021
Route::get('philips-promo','PromoController@promoPhilipsIndex')->middleware('userauth');
Route::post('philips2021import','PromoController@philips2021Upload')->name('philips2021import')->middleware('userauth');
Route::get('philips-promo/data','PromoController@dataPromoPhilipsIndex')->middleware('userauth');
Route::post('philips-promo/upload','PromoController@dataPromoPhilipsUpload')->middleware('userauth');
Route::get('philips-promo/delete/{id}','PromoController@destroy')->middleware('userauth');
Route::post('philips-promo/validasi/{id}','PromoController@validasi')->middleware('userauth');
Route::get('philips-promo/search','PromoController@search')->middleware('userauth');


