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

Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');

Route::resource('players', 'PlayerController')->middleware('auth');
//Route::get('/players', 'PlayerController@index');
//Route::get('/players/create', 'PlayerController@createForm');
//Route::get('/players/{player}', 'PlayerController@show');
//Route::get('/players/{player}/edit', 'PlayerController@edit');
//
//Route::post('/players', 'PlayerController@create');
//Route::patch('/players/{player}', 'PlayerController@update');
//Route::delete('/players/{player}', 'PlayerController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
