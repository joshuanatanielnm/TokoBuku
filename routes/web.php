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

//CRUD ANGGOTA
Route::get('/anggota', 'anggotaController@index');
Route::get('/anggota/tambah', 'anggotaController@tambah');
Route::get('/anggota/hapus/{id}', 'anggotaController@hapus');
Route::get('/anggota/update/{id}', 'anggotaController@update');

Route::post('/anggota/store', 'anggotaController@store');
Route::post('/anggota/updated', 'anggotaController@updated');
//END CRUD ANGGOTA


//CRUD Buku
Route::get('/buku', 'bukuController@index');
Route::get('/buku/tambah', 'bukuController@tambah');
Route::get('/buku/hapus/{id}', 'bukuController@hapus');
Route::get('/buku/update/{id}', 'bukuController@update');

Route::post('/buku/store', 'bukuController@store');
Route::post('/buku/updated', 'bukuController@updated');
//END CRUD Buku


Route::get('/formlogin', 'formController@formlogin');
Route::get('/formsignup', 'formController@formsignup');

Route::post('/login', 'formController@login');
Route::post('/signup', 'formController@signup');
Route::get('/logout', 'formController@logout');
