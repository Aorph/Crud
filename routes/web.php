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

Route::get('/', 'DataController@showData');
Route::get('/addData', 'DataController@addData');

Route::post('/insertData', 'DataController@insertData');
Route::post('/update', 'DataController@update');
Route::post('/updateData', 'DataController@updated');
Route::post('/delete', 'DataController@delete');
