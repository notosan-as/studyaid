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

Route::get('guest', 'Auth\LoginController@guestLogin')->name('login.guest');

Route::prefix('login')->name('login.')->group(function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('{provider}');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('{provider}.callback');
});
    Route::prefix('register')->name('register.')->group(function () {
        Route::get('/{provider}', 'Auth\RegisterController@showProviderUserRegistrationForm')->name('{provider}');
        Route::post('/{provider}', 'Auth\RegisterController@registerProviderUser')->name('{provider}');
});

Route::get('/','IndexController@toppage');
Route::get('/home','IndexController@index');

Route::resource('/study','RecordController')->middleware('auth');
Route::resource('/setup','SetupController')->middleware('auth');
Route::resource('/post','PostController')->middleware('auth');
Route::resource('/comment','CommentsController',['only' => ['store']])->middleware('auth');

Route::prefix('post')->name('post.')->group(function () {
    Route::put('/{post}/like', 'PostController@like')->name('like')->middleware('auth');
    Route::delete('/{post}/like', 'PostController@unlike')->name('unlike')->middleware('auth');
});

Route::get('/mypage','UserinformationController@index')->name('mypage');
