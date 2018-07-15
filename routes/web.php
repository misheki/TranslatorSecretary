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

//public pages

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/features', 'PagesController@features');
Route::get('/pricing', 'PagesController@pricing');

//member pages

Auth::routes();
Route::get('/home', 'DashboardController@home');
Route::resource('clients','ClientController');

