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

Route::get('/datatable', 'App\Http\Controllers\TableController@index');

Route::get('/bible', 'App\Http\Controllers\BibleController@index');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

Route::get('/', function () {
    return view('welcome');
});