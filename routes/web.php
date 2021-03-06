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

Route::get('/', 'LoginController@index')->name('login');
Route::post('/auth', 'LoginController@login')->name('auth');
Route::post('/logout', 'LoginController@logout')->name('logout');
Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
