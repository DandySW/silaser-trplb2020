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

// default
/* Route::get('/', function () {
     return view('welcome');
     });
*/

//Admin
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', /*'middleware' => ['auth']*/], function () {
     Route::get('/', 'homeController@index');
     Route::resource('produk', 'produkController');
});


//Pelanggan
Route::group(['namespace' => 'Pelanggan'], function () {
     Route::get('/', 'homeController@index');
});

/* Route default login/register
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
*/