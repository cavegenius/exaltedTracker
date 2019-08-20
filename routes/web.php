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
Route::get('/', 'CharacterController@index')->name('character');
Route::get('/character', 'CharacterController@index')->name('character');

// AJAX Routes
Route::post('/character/characterDetails', 'CharacterController@characterDetails');

Route::post('/character/submit', 'CharacterController@store');