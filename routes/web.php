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
Route::get('/','RecordController@index');
Route::get('/home','IndexController@index');
Route::get('/study/add','RecordController@todayStudyadd')->name('study.today_study_add');

Route::resource('/setup','SetupController');
