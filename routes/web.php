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
Auth::routes();

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

// Logging in as users or coordinators
Route::get('/login/coordinator', 'Auth\LoginController@showCoordinatorLoginForm')->name('login.coordinator');
Route::get('/login/user', 'Auth\LoginController@showUserLoginForm')->name('login.user');
Route::get('/register/coordinator', 'Auth\RegisterController@showCoordinatorRegisterForm');
Route::get('/register/user', 'Auth\RegisterController@showUserRegisterForm');

Route::post('/login/coordinator', 'Auth\LoginController@coordinatorLogin');
Route::post('/login/user', 'Auth\LoginController@userLogin');
Route::post('/register/coordinator', 'Auth\RegisterController@createCoordinator')->name('register.coordinator');
Route::post('/register/user', 'Auth\RegisterController@createUser')->name('register.user');

Route::view('/home', 'home')->middleware('auth');
Route::view('/coordinator', 'coordinator');
Route::view('/user', 'user');
Route::view('userLoginOrRegister', 'auth.userLoginOrRegister')->name('loginOrRegister.user');
Route::view('coordinatorLoginOrRegister', 'auth.coordinatorLoginOrRegister')->name('loginOrRegister.coordinator');


