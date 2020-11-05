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

Route::get('/', 'pelanggan\indexController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(
//     ['namespace' => 'Pelanggan', 'prefix' => 'pelanggan'],
//     function () {
//         Route::get('', '');
//     }
// );
