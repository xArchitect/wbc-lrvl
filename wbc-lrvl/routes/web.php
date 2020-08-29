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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// WebUrlInf
// Route::get('/create', 'HomeController@index')->name('home');
Route::resource('/wbcurlinf', 'WbcUrlInfController');

Route::get('/wbcitminf/index','WbcItmInfController@index')->name('wbcitminf.index');
Route::get('/wbcitminf/create','WbcItmInfController@create')->name('wbcitminf.create');
Route::post('/wbcitminf/store','WbcItmInfController@store')->name('wbcitminf.store');
Route::get('/wbcitminf/edit','WbcItmInfController@edit')->name('wbcitminf.edit');
Route::post('/wbcitminf/update','WbcItmInfController@update')->name('wbcitminf.update');
Route::delete('/wbcitminf/destory','WbcItmInfController@destroy')->name('wbcitminf.destroy');

// Route::resource('/wbcitminf', 'WbcItmInfController');

//show insert form and store data into database
// Route::get('/wbcurlinf','WbcUrlInfController@index');

// Route::get('/wbcurlinf/create','WbcUrlInfController@create');
// Route::post('/wbcurlinf','WbcUrlInfController@store')->name('wbcurlinf.store');

// Route::get('/wbcurlinf', 'WbcUrlInfController@index');
Route::get('/admin','AdminController@index');