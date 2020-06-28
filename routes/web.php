<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/login', function () {
    return view('cart');
});

//CRUD ADMIN
Route::get('/admin', 'adminController@index');
Route::get('/admin/tambah', 'adminController@tambah');
Route::get('/admin/hapus/{id}', 'adminController@hapus');
Route::get('/admin/update/{id}', 'adminController@update');

Route::post('/admin/store', 'adminController@store');
Route::post('/admin/updated', 'adminController@updated');
//END CRUD ADMIN
