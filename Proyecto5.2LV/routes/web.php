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

Route::get('devices', 'DevicesController@fetch')->name('devices-for-history');
Route::get('vehicles','VehiclesController@fetch')->name('vehicles-for-history');
Route::get('deliveries','DeliveriesController@fetch')->name('deliveries');
Route::get('deliveries/add','DeliveriesController@form')->name('deliveries');
Route::get('deliveries/store','DeliveriesController@store')->name('delivery_store');


Route::get('set-device','DevicesController@setDevice');//no se accede porque me lo manda la placa
Route::get('set-device-off','DevicesController@setDeviceOff');
Route::get('fill-delivery-data/{id}','DeliveriesController@fillDeliveryData')->name('fill-delivery-data');

Route::get('deliveries/set-delivery-data','DeliveriesController@setDeliveryData')->name('set-delivery-data');

Route::get('monitoring/','MonitoringCenterController@index')->name('monitoring-center');
Route::get('monitoring/{delivery_id}','MonitoringCenterController@index')->name('monitoring-center-for');
Route::get('monitoring-device/{device_id}','MonitoringCenterController@device')->name('monitoring-center-for-device');

Route::get('records/store', 'RecordsController@store');

Route::get('history', 'DeliveriesController@history')->name('delivery-history');
Route::get('history/fetchBetweenDates', 'DeliveriesController@fetchBetweenDates')->name('fetch-between-dates');
Route::get('history/search/{id}', 'DeliveriesController@search')->name('search-records-for-history');

Route::get('/config','DeliveriesController@config')->name('config');

Route::get('/contact', function(){
  return view('Contact.contact');
})->name('contact-us');

Route::get('/about', function(){
  return view('About.about');
})->name('about-us');

Route::get('nuevaruta','RecordsController@updateChart')->name('nr');
