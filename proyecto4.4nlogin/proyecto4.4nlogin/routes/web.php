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
//Auth::routes();

Route::get('/dash','RecordsController@index')->name('dash');

Route::get('/location', function () {
    return view('location');
})->name('location');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/store','RecordsController@store')->name('store');

Route::post('/fetch','RecordsController@fetch')->name('fetch');

Route::get('/home', 'RecordsController@index')->name('home');

Route::get('nuevaruta','RecordsController@updateChart')->name('nr');

Route::get('/not_signal','RecordsController@not_signal')->name('nr');

Route::get('/signal_recovered','RecordsController@signal_recovered')->name('nr');
