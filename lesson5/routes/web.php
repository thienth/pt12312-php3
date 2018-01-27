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
use Illuminate\Http\Request;
Route::get('/', 'Client\HomeController@index')->name('homepage');
Route::get('product-add', 'Client\HomeController@add')->name('product.add');
Route::get('product/update/{id}', 'Client\HomeController@update')->name('product.update');
Route::get('product/remove/{id}', 'Client\HomeController@remove')->name('product.remove');
Route::post('product/save', 'Client\HomeController@save')->name('product.save');

