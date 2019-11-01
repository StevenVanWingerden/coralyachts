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

Route::put('yachts/update_rent/{id}', 'YachtsController@update_rent');
Route::resource('ports', 'PortsController');
Route::resource('customers', 'CustomersController');
Route::resource('reservations', 'ReservationsController');
Route::resource('yachttypes', 'YachtTypesController');
Route::resource('yachts', 'YachtsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

