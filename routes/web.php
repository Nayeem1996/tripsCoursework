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

Route::get('/home', function(){
    return view('home');
});

// Trips
Route::get('trips', 'TripController@index')->name('trips.index');    // All trips
Route::get('trips/create', 'TripController@create')->name('trips.create');    // Creating trips
Route::post('trips', 'TripController@store')->name('trips.store');    // Storing trips
Route::get('trips/{id}', 'TripController@show')->name('trips.show');    // Specific trips (This must be last as {id} will be captured by trips/create otherwise)



// Users
// TODO: Make it so that only trip coordinators can see the user accounts
Route::get('users', 'UserController@index')->name('users.index');    // All users
Route::get('users/create', 'UserController@create')->name('users.create');    // Creating users
Route::post('users', 'UserController@store')->name('users.store');    // Storing users
Route::get('users/{id}', 'UserController@show')->name('users.show');    // Specific users (This must be last as {id} will be captured by users/create otherwise)
