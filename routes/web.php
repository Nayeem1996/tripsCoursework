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
Route::prefix('trip')->group(function (){
    Route::get('/create', 'TripController@create')->name('trips.create');    // Creating trips
    Route::get('/{id}', 'TripController@show')->name('trips.show');    // Specific trips (This must be last as {id} will be captured by trips/create otherwise)
    Route::get('', 'TripController@index')->name('trips.index');    // All trips
    Route::post('', 'TripController@store')->name('trips.store');    // Storing trips
});

// Users
// TODO: Make it so that only trip coordinators can see the user accounts
Route::prefix('user')->group(function (){
    Route::get('/{id}', 'UserController@show')->name('users.show');    // Specific users
    Route::get('', 'UserController@index')->name('users.index');    // All users
});

// TripCoordinators
Route::prefix('tripCoordinator')->group(function (){
    Route::get('/login', 'Auth\TripCoordinatorLoginController@showLoginForm')->name('tripcoordinators.login');
    Route::post('/login', 'Auth\TripCoordinatorLoginController@login')->name('tripcoordinators.login.submit');

    Route::get('/create', 'TripCoordinatorController@create')->name('tripcoordinators.create');    // Creating tripcoordinators
    Route::get('/{id}', 'TripCoordinatorController@show')->name('tripcoordinators.show'); // Specific trip coordinators

    Route::get('/home', 'TripCoordinatorController@index')->name('tripcoordinators.dashboard'); // All trip coordinators

    Route::get('/', 'TripCoordinatorController@index')->name('tripcoordinators.index'); // All trip coordinators
    Route::post('/', 'TripCoordinatorController@store')->name('tripcoordinators.store');    // Storing trip coordinators
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
