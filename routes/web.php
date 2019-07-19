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
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'UsersController');
Route::resource('dashboard', 'DashboardController');
Route::get('/categories/edit', 'CategoriesController@adminIndex');
Route::resource('categories', 'CategoriesController');

Route::match(['get', 'post'], '/words/create', 'WordsController@create');
Route::get('/users/{id}/words', 'WordsController@userIndex');
Route::get('/users/{id}/lessons', 'CategoriesController@userIndex');
Route::post('/words', 'WordsController@store');

// relationships
Route::get('/follow', 'RelationshipsController@create');
Route::get('/users/{id}/relationships', 'RelationshipsController@show');


// quiz control
Route::post('/quizControl', 'QuizController');

Route::resource('category_sessions', 'Category_SessionsController');