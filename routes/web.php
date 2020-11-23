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
Route::get('customer-export', 'CustomerController@export')->name('customer-export');
Route::post('customer-import', 'CustomerController@import')->name('customer-import');