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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    \App\User::find(2)->assignRole('RegisteredUser');
    \App\User::find(1)->assignRole('Admin');

});
Route::group(['middleware' => ['role:super-admin']], function () {
    //
});

//    Voor hulp met de roleplugin
//    https://github.com/spatie/laravel-permission#installation

//    Maak een route alleen voor 1 role beschikbaar
//    Route::group(['middleware' => ['role:admin']], function () {
//      //
//    });

//    Maak een route voor meerdere rollen beschikbaar
//    Route::group(['middleware' => ['role:super-admin|writer']], function () {
//      //
//    });
