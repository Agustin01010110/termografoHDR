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

Route::get('search','DeliveriesController@filterBy')->name('search');
Route::get('filter','DeliveriesController@filter')->name('filter');
Route::get('add','DeliveriesController@form')->name('add');
Route::get('index','DeliveriesController@fetch')->name('index');
Route::get('vehicles','VehiclesController@fetch')->name('vehicles');
Route::get('deliveries','DeliveriesController@fetch')->name('deliveries');
Route::get('deliveries/add','DeliveriesController@form')->name('deliveries');
Route::get('deliveries/store','DeliveriesController@store')->name('delivery_store');
