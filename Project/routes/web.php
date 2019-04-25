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

Auth::routes();
// Basic pages
Route::get('/', 'PageController@index');
Route::get('/home', 'PageController@index')->name('home');
Route::get('/Competitie', ['middleware' => 'auth', 'uses' => 'PageController@Competitie']);
Route::get('/Beker', ['middleware' => 'auth', 'uses' => 'PageController@Beker']);
Route::get('/Teams', ['middleware' => 'auth', 'uses' => 'PageController@Teams']);
Route::get('/Organisatie', ['middleware' => 'auth', 'uses' => 'PageController@Organisatie']);
Route::get('/Historie', ['middleware' => 'auth', 'uses' => 'PageController@Historie']);
Route::get('/Profiel', ['middleware' => 'auth', 'uses' => 'PageController@Profiel']);
Route::get('/CMS', ['middleware' => 'auth', 'uses' => 'PageController@CMS']);

//User
Route::get('/Logout', '\App\Http\Controllers\UserController@Logout');


//Calendar
Route::get('events', 'CompetitieController@index');


