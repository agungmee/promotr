<?php

use Illuminate\Support\Facades\Route;


// Route Auth
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// Route Customers
Route::get('list-customers','CustomerController@index')->name('list-customers');
Route::get('list-customers/search','CustomerController@search')->name('customer-search');
Route::get('customer-export', 'CustomerController@export')->name('customer-export');
Route::post('customer-import', 'CustomerController@import')->name('customer-import');

// Route Customer Dokumentasi
Route::get('doc-customer','CustomerController@docIndex')->name('doc-index');
Route::post('doc-upload','CustomerController@docUpload')->name('doc-upload');
Route::get('doc-customer/delete/{id}','CustomerController@delete');

// Route Promo
Route::get('ledclub2020','PromoController@ledclubIndex')->name('ledclub20');