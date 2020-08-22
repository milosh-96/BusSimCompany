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

Route::prefix('routes')->group(function() {
    Route::get('/create','RouteController@create')->name('routes.create');
    Route::post('/','RouteController@store')->name('routes.store');
    Route::get('/','HomeController@index')->name('routes.index');
    Route::get('/index','HomeController@index')->name('routes.index');
    Route::post('quick-share','RouteController@quickShare')->name('routes.post-quick-share');
    Route::prefix('{hash_id}')->group(function() {
        Route::get('/details','RouteController@details')->name('routes.details');
        Route::get('/edit','RouteController@edit')->name('routes.edit');
        Route::post('/update','RouteController@update')->name('routes.update');
    });
});

Auth::routes();

Route::prefix('/')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/share', 'HomeController@share')->name('share');
});

Route::prefix('stops')->group(function() {
    Route::get('/create','StopController@create')->name('stops.create');
    Route::post('/','StopController@store')->name('stops.store');
    Route::get('/','StopController@index')->name('stops.index');
    Route::get('/index','StopController@index')->name('stops.index');
    Route::prefix('{stop}/{slug}')->group(function() {
        Route::get('/details','StopController@details')->name('stops.details');
        Route::get('/edit','StopController@edit')->name('stops.edit');
    });
});
