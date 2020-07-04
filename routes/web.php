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

//USER
Route::get('/', 'userController@index');
Route::get('/cart/{id_buku}/{id_anggota}', 'userController@store');
Route::get('/cart/{id}', 'userController@cart');
Route::get('/delete/{id_buku}/{id_anggota}', 'userController@delete');
Route::get('cart/sewa/{id_buku}/{id_anggota}', 'userController@store');


//END USER

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


//FORM ADMIN VALIDATION ADMIN
Route::get('/formloginAdmin', 'formAdminController@formlogin');
Route::post('/loginAdmin', 'formAdminController@login');
Route::get('/logoutAdmin', 'formAdminController@logout');
//END FORM ADMIN VALIDATION ADMIN

//FORM USER VALIDATION USER
Route::get('/formloginUser', 'formUserController@formlogin');
Route::get('/formsignupUser', 'formUserController@formsignup');
Route::post('/formsignupUser/store', 'formUserController@store');
Route::post('/loginUser', 'formUserController@login');
Route::get('/logoutUser', 'formUserController@logout');
//END FORM USER VALIDATION USER
