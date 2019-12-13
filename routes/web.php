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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
Route::get('/cars', 'CarsController@index');
Route::get('/map', 'MapController@index');
Route::get('/comments', 'CommentsController@index');
Route::get('/contracts', 'ContractsController@index');
Route::get('/customers', 'CustomersController@index');
Route::get('/workers', 'WorkersController@index');
Route::get('/worktime', 'WorkTimeController@index');
Route::get('/complaint', 'ComplaintController@index');
Route::get('/individual', 'IndividualController@index');
Route::get('/testdrive', 'TestdriveController@index');
Route::get('/tahistory', 'TAhistoryController@index');
Route::get('/parts', 'PartsController@index');
Route::get('/servicecustomers', 'ServicecustomersController@index');