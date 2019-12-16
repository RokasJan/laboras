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
Route::get('/cars', 'CarsController@index')->name('cars');
Route::get('/buy', 'SutartisController@index')->name('buy');
Route::post('/buypatvirtinimas', 'SutartisController@prideti')->name('buypatv');
Route::get('/registerfortestdrive', 'TestdriveController@registertest')->name('reg');
Route::post('/registerfortestdrivepatv', 'TestdriveController@pridejimas')->name('regpatv');
Route::get('/map', 'MapController@index');
Route::get('/comments', 'CommentsController@index');
Route::get('/addcomment', 'CommentsController@Komentaras')->name('comp');
Route::post('/compatvirtinimas', 'CommentsController@pridejimas')->name('patv');
Route::get('/contracts', 'ContractsController@index');
Route::get('/customers', 'CustomersController@index');
Route::get('/workers', 'WorkersController@index');
Route::get('/workers/register', 'WorkersController@registruoti');
Route::post('/workers/register/done', 'WorkersController@baigtiRegistruoti');
Route::get('/workers/redaguoti/{darbuotojo_id}', 'WorkersController@redaguoti');
Route::post('/workers/redaguoti/{darbuotojo_id}/done', 'WorkersController@baigtiRedaguoti');
Route::get('/worktime', 'WorkTimeController@index');
Route::get('/complaint', 'ComplaintController@index');
Route::get('/addcomplaint', 'ComplaintController@Skundai')->name('skund');
Route::post('/skundpatvirtinimas', 'ComplaintController@pridejimas')->name('skund_patv');
Route::get('/individual', 'IndividualController@index');
Route::get('/testdrive', 'TestdriveController@index');
Route::get('/tahistory', 'TAhistoryController@index');
Route::get('/parts', 'PartsController@index');
Route::get('/servicecustomers', 'ServicecustomersController@index');
