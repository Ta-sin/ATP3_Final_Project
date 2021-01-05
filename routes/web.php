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

Route::get('/login','UserController@LoginIndex')->name('hotel.login');
Route::get('/registration','UserController@Registration')->name('hotel.registration');
Route::post('/registration','UserController@store')->name('hotel.register');
Route::get('/home','UserController@Home')->name('hotel.home');
Route::post('/login','UserController@Login');
Route::get('/logout','UserController@logout');

Route::group(['middleware'=>['session']], function(){
    
    
    Route::get('/dashboard','UserController@DashboardIndex')->name('hotel.dashboard');
    Route::get('/room','RoomController@index')->name('hotel.room');
    Route::get('/banquet','BanquetController@index')->name('hotel.banquet');
    // Route::get('/tour','TourController@index')->name('hotel.registration');
    Route::get('/profile','UserController@ProfileIndex')->name('hotel.profile');
    Route::get('/room/{id}','RoomController@edit');
    Route::get('/banquet/{id}','BanquetController@show');
    Route::get('/hmsg','MessageController@index');
    Route::get('/contact/{id}','MessageController@index');
    Route::get('/booked','RoomController@book');
    
    

    Route::post('/room','RoomController@store')->name('room.add');
    Route::post('/banquet','BanquetController@create')->name('banquet.add');
    Route::post('/profile','UserController@update')->name('profile.update');
    Route::post('/room/{id}','RoomController@update')->name('room.edit');
    Route::post('/banquet/{id}','BanquetController@update')->name('banquet.edit');


});



