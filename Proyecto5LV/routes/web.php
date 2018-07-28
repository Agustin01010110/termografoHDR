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


//Route::get('vehicles','VehiclesController@fetch')->name('vehicles');
/////DELIVERY///
Route::get('deliveries','DeliveriesController@fetch')->name('deliveries');//para entrar desde el navegador
Route::get('deliveries/add','DeliveriesController@form')->name('deliveries');//para entrar desde el navegador
Route::get('deliveries_store','DeliveriesController@store')->name('delivery_store');
Route::get('deliveries/edit','DeliveriesController@change')->name('deliveries/edit');//para entrar desde el navegador
Route::get('delivery_edit','DeliveriesController@edit')->name('delivery_edit');
Route::get('deliveries/delete','DeliveriesController@erase')->name('deliveries/delete');//para entrar desde el navegador
Route::get('delivery_delete','DeliveriesController@delete')->name('delivery_delete');



// Route::get('search','DeliveriesController@filterBy')->name('search');
// Route::get('filter','DeliveriesController@filter')->name('filter');
// Route::get('add','DeliveriesController@form')->name('add');
// Route::get('index','DeliveriesController@fetch')->name('index');

//////////DEVICES
Route::get('devices','DevicesController@fetch')->name('devices');//desde el mismo navegador
Route::get('devices/add','DevicesController@form')->name('devices/add');//desde el mismo navegador
Route::get('device_store','DevicesController@store')->name('device_store');
Route::get('devices/edit','DevicesController@change')->name('devices/edit');//desde el mismo navegador
Route::get('device_edit','DevicesController@edit')->name('device_edit');
Route::get('devices/delete','DevicesController@erase')->name('devices/delete');//desde el mismo navegador
Route::get('device_delete','DevicesController@delete')->name('device_delete');
////////////

//////////VEHICLES
Route::get('vehicles','VehiclesController@fetch')->name('vehicles');//desde el mismo navegador
Route::get('vehicles/add','VehiclesController@form')->name('vehicles/add');//desde el mismo navegador
Route::get('vehicle_store','VehiclesController@store')->name('vehicle_store');
Route::get('vehicles/edit','VehiclesController@change')->name('vehicles/edit');//desde el mismo navegador
Route::get('vehicle_edit','VehiclesController@edit')->name('vehicle_edit');
Route::get('vehicles/delete','VehiclesController@erase')->name('vehicles/delete');//desde el mismo navegador
Route::get('vehicle_delete','VehiclesController@delete')->name('vehicle_delete');
///////
