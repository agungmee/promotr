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
Route::post('doc-upload','CustomerController@docUpload')->name('doc-upload')->middleware('userauth');
Route::get('doc-customer/delete/{id}','CustomerController@delete')->middleware('userauth');

// Route Promo LEDClub 2021
Route::get('philips2021','PromoController@philips2021Index')->name('philips2021')->middleware('userauth');
Route::post('philips2021import','PromoController@philips2021Upload')->name('philips2021import')->middleware('userauth');
Route::get('dataledclub2021','PromoController@dataLedclubIndex')->name('dataledclub2021')->middleware('userauth');
Route::post('philips2021upload','PromoController@dataLedclubUpload')->name('philips2021upload')->middleware('userauth');