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
Route::get('/Competitie', ['middleware' => 'auth', 'uses' => 'CompetitieController@Competitie']);
Route::get('/Beker', ['middleware' => 'auth', 'uses' => 'PageController@Beker']);
Route::get('/Teams', ['middleware' => 'auth', 'uses' => 'TeamController@Teams']);
Route::get('/Organisatie', ['middleware' => 'auth', 'uses' => 'PageController@Organisatie']);
Route::get('/Sponsors', ['middleware' => 'auth', 'uses' => 'PageController@Sponsors']);
Route::get('/Historie', ['middleware' => 'auth', 'uses' => 'PageController@Historie']);
Route::get('/Profiel', ['middleware' => 'auth', 'uses' => 'PageController@Profiel']);
Route::get('/Standen', ['middleware' => 'auth', 'uses' => 'CMSController@getScores']);
Route::post('/wedstrijd/scoreupdate/{wedstrijd}', ['middleware' => 'auth', 'uses' => 'CMSController@updateScore']);


//User
Route::get('/Logout', '\App\Http\Controllers\UserController@Logout');


//Calendar
Route::get('events', 'CompetitieController@index');

//new competitie
Route::get('/Competitie/new', ['middleware' => 'auth', 'uses' => 'CompetitieController@newcomp']);

//wedstrijd detail
Route::get('/competitie/wedstrijd/{wedstrijd}', ['middleware' => 'auth', 'uses' => 'CompetitieController@wedstrijddetail']);

//Teams per klasse
Route::post('/Teams/klasse', ['middleware' => 'auth', 'uses' => 'TeamController@Klasses']);

//Wedstijd handmatig toevoegen
Route::get('/Wedstrijd/newpage', ['middleware' => 'auth', 'uses' => 'CompetitieController@wedstijdtoevoegen']);

//Teams detail
Route::get('/Teams/{team}', ['middleware' => 'auth', 'uses' => 'TeamController@TeamDetail']);

//Team nav aanpassen
Route::get('/Teams/aanpassen/{team}', ['middleware' => 'auth', 'uses' => 'TeamController@TeamAanpassen']);

//Team Update
Route::patch('/Team/update/{team}', ['middleware' => 'auth', 'uses' => 'TeamController@update']);

//Standen tabel
Route::get('/Standen/wedstrijd', ['middleware' => 'auth', 'uses' => 'CMSController@getScores']);

//Standen detail
Route::get('/Standen/{wedstrijd}', ['middleware' => 'auth', 'uses' => 'CMSController@wedstrijdDetail']);

//Standen aanpassen
Route::get('/Standen/aanpassen/{wedstrijd}', ['middleware' => 'auth', 'uses' => 'CMSController@scoreAanpassen']);

//Standen Update
Route::patch('/Standen/update/{wedstrijd}', ['middleware' => 'auth', 'uses' => 'CMSController@updateScore']);

//Nieuwe wedstrijd aanmaken
Route::post('/wedstrijd/store/new', ['middleware' => 'auth', 'uses' => 'CompetitieController@newwedstrijd']);

