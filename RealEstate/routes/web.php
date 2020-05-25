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

Route::middleware('auth')->group(function(){
    Route::get('/realestates', 'RealEstatesController@index')->name('home');
    Route::get('/realestates/create', 'RealEstatesController@create');
    Route::get('/realestates/{realestate:address}', 'RealEstatesController@show')->name('realestate');
    Route::post('/realestates/create', 'RealEstatesController@store');
    Route::post('/realestates/send', 'RealEstatesController@send');
});

Auth::routes(['verify' => true]);

