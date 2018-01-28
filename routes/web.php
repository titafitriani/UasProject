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
    return view('auth.login');
});

Route::get('/input-data', 'BarangController@create')->name('input.data');
Route::post('/input-data', 'BarangController@store')->name('data.store');
Route::get('/barang','BarangController@index')->name('barang.index');
Route::get('/barang/{barang}/edit','BarangController@edit')->name('barang.edit');
Route::patch('/barang/{barang}/edit', 'BarangController@update')->name('barang.update');
Route::delete('/barang/{barang}/delete', 'BarangController@destroy')->name('barang.delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
