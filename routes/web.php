<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// after adding, email verification
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'dashboardController@index')->name('dashboard');

Route::group(['prefix' => 'product'], function() {
    Route::get('/', 'ProductController@index');
    Route::get('/add', 'ProductController@create');
    Route::post('/', 'ProductController@save');
    Route::get('/{id}', 'ProductController@edit');
    Route::put('/{id}', 'ProductController@update');
    Route::delete('/{id}', 'ProductController@delete');
});

Route::group(['prefix' => 'customer'], function() {
    Route::get('/', 'CustomerController@index')->name('customer.list');
    Route::get('/add', 'CustomerController@create');
    Route::post('/', 'CustomerController@save');
    Route::get('/{id}', 'CustomerController@edit');
    Route::put('/{id}', 'CustomerController@update');
    Route::delete('/{id}', 'CustomerController@delete');
});

Route::group(['prefix' => 'invoice'], function() {
    //ROUTE UNTUK HALAMAN INVOICE
    Route::get('/add', 'InvoiceController@create')->name('invoice.create');

    //ROUTE UNTUK MENG-HANDLE DATA YANG DIKIRIM
    Route::post('/', 'InvoiceController@save')->name('invoice.save');
    Route::get('/{id}', 'InvoiceController@edit')->name('invoice.edit');

    Route::put('/{id}', 'InvoiceController@update')->name('invoice.update');
    Route::delete('/{id}', 'InvoiceController@deleteProduct')->name('invoice.delete_product');

});

