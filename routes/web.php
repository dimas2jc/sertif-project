<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout')->middleware('auth')->name('logout');

Route::get('/admin-acara', function () {
    return view('admin.acara');
})->middleware('auth')->name('admin-acara');

Route::get('/mahasiswa-acara', function () {
    return view('mahasiswa.acara');
})->middleware('auth')->name('mahasiswa-acara');
