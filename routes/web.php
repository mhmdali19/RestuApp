<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/menu', 'App\Http\Controllers\PagesController@menu');
Route::get('/feedback', 'App\Http\Controllers\PagesController@feedback');
Route::get('/reservation', 'App\Http\Controllers\PagesController@reservation');
