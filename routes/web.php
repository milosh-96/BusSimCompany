<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/login/google','Auth\LoginController@redirectToProvider');
Route::get('/login/google/handle','Auth\LoginController@handleProviderCallback');

Route::group(["prefix"=>"user","middleware"=>["auth","hasCompany"]],function() {
    Route::get('driving-schedule','HomeController@drivingSchedule')->name('user.driving-schedule');
});

Route::prefix('routes')->group(function() {
    Route::get('/create','HomeController@share')->name('routes.create')->middleware(['auth','hasCompany']);
    Route::post('/','RouteController@store')->name('routes.store');
    Route::get('/','RouteController@index')->name('routes.index')->middleware(['auth','hasCompany']);
    Route::get('/index','RouteController@index')->name('routes.index')->middleware(['auth','hasCompany']);
    Route::post('quick-share','RouteController@quickShare')->name('routes.post-quick-share');
    Route::prefix('{hash_id}')->group(function() {
        Route::get('/details','RouteController@details')->name('routes.details');
        Route::get('/edit','RouteController@edit')->name('routes.edit')->middleware('auth');
        Route::post('/update','RouteController@update')->name('routes.update')->middleware(['auth']);
    });
});

Route::group(["prefix"=>"companies","middleware"=>"auth"],function() {
    Route::get('/create','CompanyController@create')->name('companies.create')->middleware('user');
    Route::post('/','CompanyController@store')->name('companies.store')->middleware('user');
    Route::get('/','CompanyController@index')->name('companies.index');
    Route::get('/index','CompanyController@index')->name('companies.index');
    Route::post('quick-share','CompanyController@quickShare')->name('companies.post-quick-share');
    Route::prefix('{hash_id}')->group(function() {
        Route::get('/details','CompanyController@details')->name('companies.details');
        Route::get('/drivers/sheet','CompanyController@details')->name('companies.driver-sheet');
        Route::get('/edit','CompanyController@edit')->name('companies.edit');
        Route::post('/update','CompanyController@update')->name('companies.update');
    });
});

Auth::routes();

Route::prefix('/')->group(function() {


    Route::get('/', 'HomeController@index')->name('home')->middleware('hasCompany');
    Route::get('/welcome', 'HomeController@welcome')->name('welcome.guest');
    Route::get('/share', 'HomeController@share')->name('share');
});

Route::prefix('stops')->group(function() {
  //  Route::get('/create','StopController@create')->name('stops.create');
  //  Route::post('/','StopController@store')->name('stops.store');
    Route::get('/','StopController@index')->name('stops.index');
    Route::get('/index','StopController@index')->name('stops.index');
    Route::prefix('{stop}/{slug}')->group(function() {
      Route::get('/details','StopController@details')->name('stops.details');
   //     Route::get('/edit','StopController@edit')->name('stops.edit');
    });
});


/*Route::get('mail-test',function() {
    Mail::send('welcome', [], function($message) {
        $message->to('milosjovanovic042@gmail.com')->subject('Testing mails');
    });
});*/

Route::middleware(['auth:sanctum', 'verified','hasCompany'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


