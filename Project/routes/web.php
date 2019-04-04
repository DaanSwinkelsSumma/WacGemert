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


// Basic pages
Route::get('/Competitie', ['middleware' => 'auth', 'uses' => 'PagesController@Competitie']);
Route::get('/Beker', ['middleware' => 'auth', 'uses' => 'PagesController@Beker']);
Route::get('/Teams', ['middleware' => 'auth', 'uses' => 'PagesController@Teams']);
Route::get('/Organisatie', ['middleware' => 'auth', 'uses' => 'PagesController@Organisatie']);
Route::get('/Historie', ['middleware' => 'auth', 'uses' => 'PagesController@Historie']);
Route::get('/Profiel', ['middleware' => 'auth', 'uses' => 'PagesController@Profiel']);

