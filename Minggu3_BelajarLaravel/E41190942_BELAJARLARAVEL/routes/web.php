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

// ---------Praktikum Minggu 3 Pertemuan 2 --------------------------
// Route::get('user','ManagementUserController@index');
Route::resource('user','ManagementUserController');
//  -----------------------------------------------------------------

// ---------Praktikum Minggu 3 Pertemuan 3 --------------------------
Route::get('/home', function () {
    return view('home');
});
//  -----------------------------------------------------------------



