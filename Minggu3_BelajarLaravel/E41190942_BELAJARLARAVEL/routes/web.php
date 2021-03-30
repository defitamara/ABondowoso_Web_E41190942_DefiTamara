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

// ---------Praktikum Minggu 4 Pertemuan 1 dan 2 --------------------------
Route::group(['namespace' => 'Frontend'], function () {
    Route::resource('home', 'HomeController');
});
//  -----------------------------------------------------------------

// ---------Praktikum Minggu 4 Pertemuan 3 dan 4 --------------------------
Route::group(['namespace' => 'Backend'], function () {
    Route::resource('dashboard', 'DashboardController');
});
//  -----------------------------------------------------------------



