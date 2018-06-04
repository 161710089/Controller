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

Route::get('/tanggal',function(){
	return view('absensi_siswa.tanggal');
});

Route::get('/input',function(){
	return view('petugas_piket.input');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('absensi_siswa','AbsensiSiswaController');
Route::resource('petugas_piket','PetugasPiketController');
Route::resource('siswa','SiswaController');
Route::resource('kelas','KelasController');
	
	Route::get('/cek',function(){
		return view('layouts.admin');
	});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
