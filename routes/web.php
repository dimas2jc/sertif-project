<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
	
	Route::get('password/reset', function(){
	    return view('auth.passwords.reset');
	})->name('password/reset');

	Route::get('logout', 'Auth\LoginController@logout')->name('logout');
	Route::post('/change-pass', 'HomeController@changepass');

	Route::get('/admin-acara', 'Admin\AcaraController@index')->name('admin-acara');
	Route::get('/admin/buat-acara', 'Admin\AcaraController@buat_acara');
	Route::get('/admin/detail-acara/{id}', 'Admin\AcaraController@detail_acara');
	Route::post('/admin/req-data-jenis-kegiatan', 'Admin\AcaraController@req_data_jenis_kegiatan');
	Route::post('/admin/buat-acara', 'Admin\AcaraController@store_acara');
	Route::post('/update/{id}', 'Admin\AcaraController@update_peserta');

	Route::get('/mahasiswa-acara', 'Mahasiswa\AcaraController@index')->name('mahasiswa-acara');
});

//route untuk nyoba encrypt
Route::get('/get-encrypt/{nim};{id_acara}', 'Mahasiswa\AcaraController@getEncrypted');

//route untuk cek sertif
Route::get('/cek-sertif/{encrypted}', 'Mahasiswa\AcaraController@getDecrypted');