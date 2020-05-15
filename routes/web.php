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

Route::get('/', function () {
    return view('welcome');
});

Route::get('mechanics/edit/{id}', 'MechanicController@edit');
Route::get('mechanics/create', 'MechanicController@create');
Route::get('mechanics/delete/{id}', 'MechanicController@delete');
Route::get('mechanics', 'MechanicController@index');
Route::get('mechanics/show/{id}', 'MechanicController@show');
Route::post('mechanics', 'MechanicController@store');
Route::post('mechanics/edit/', 'MechanicController@editStore');

Route::get('clients', 'ClientController@index');
Route::get('clients/delete/{id}', 'ClientController@delete');
Route::get('clients/edit/{id}', 'ClientController@edit');
Route::get('clients/show/{id}', 'ClientController@show');
Route::post('clients', 'ClientController@store');
Route::post('clients/edit/', 'ClientController@editStore');

Route::get('visits', 'VisitController@index');
Route::get('visits/create', 'VisitController@create');
Route::get('visits/{id}', 'VisitController@show');
Route::get('visits/delete/{id}', 'VisitController@delete');
Route::get('visits/edit/{id}', 'VisitController@edit');
Route::post('visits', 'VisitController@store');
Route::post('visits/edit/', 'VisitController@editStore');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

