<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\homeController@home')->name('home');
Route::post('/regestration','App\Http\Controllers\homeController@create')->name('registration');
Route::get('/admin','App\Http\Controllers\homeController@admin')->name('admin');
Route::get('/clist','App\Http\Controllers\homeController@clist')->name('clist');
Route::get('/all_product','App\Http\Controllers\homeController@all_product')->name('all_product');
Route::get('/new_product','App\Http\Controllers\homeController@new_product')->name('new_product');
Route::get('/productlist','App\Http\Controllers\homeController@productlist')->name('productlist');
Route::get('/cart','App\Http\Controllers\homeController@cart')->name('cart');
Route::get('/login','App\Http\Controllers\homeController@login')->name('login');
Route::post('/admincheck','App\Http\Controllers\homeController@admincheck')->name('admincheck');
Route::post('/add_product','App\Http\Controllers\homeController@add_product')->name('add_product');
Route::post('/add_catagory','App\Http\Controllers\homeController@add_catagory')->name('add_catagory');
Route::get('/new_catagory','App\Http\Controllers\homeController@new_catagory')->name('new_catagory');
Route::get('/catagory_product/{id}','App\Http\Controllers\homeController@catagory_product')->name('catagory_product');