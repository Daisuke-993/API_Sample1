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

Route::get('/sample', 'Controller@index')->name('index');
Route::get('/sample/{location}','Controller@weather')->name('weather');
Route::post('sample/request', 'Controller@request')->name('request');
