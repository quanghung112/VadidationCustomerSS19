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
Route::get('/','CustomerController@index')->name('Customer.index');

Route::group(['prefix'=>'customers'], function (){
    Route::get('/', 'CustomerController@showList')->name('Customer.list');
    Route::get('/create', 'CustomerController@create')->name('Customer.create');
    Route::post('/create','CustomerController@store')->name('Customer.store');
    Route::get('/{id}/delete','CustomerController@delete')->name('Customer.delete');
    Route::get('/{id}/detail','CustomerController@detail')->name('Customer.detail');
    Route::get('/{id}/edit','CustomerController@edit')->name('Customer.edit');
    Route::post('/{id}/upgrade','CustomerController@upgrade')->name('Customer.upgrade');
});
