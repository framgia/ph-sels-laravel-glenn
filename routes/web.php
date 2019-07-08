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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/dashboard', 'DashboardController@index')->name('home');
<<<<<<< HEAD
=======
=======

>>>>>>> [SELS-TASK] User Profile Page
Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> [SELS-TASK] User Registration, Login, and Logout
=======
>>>>>>> [SELS-TASK] User Dashboard
=======
Route::view('/', 'welcome');
Route::get('/dashboard', 'DashboardController@index');
>>>>>>> [SELS-TASK] User Edit Page and Home Page
=======
=======

>>>>>>> [SELS-TASK] User Profile Page
Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> [SELS-TASK] User Registration, Login, and Logout
=======
Route::get('/dashboard', 'DashboardController@index')->name('home');
>>>>>>> [SELS-TASK] User Dashboard
Route::resource('users', 'UsersController');