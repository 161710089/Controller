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

Route::get('/CreateKelas',function(){
	return view('kelas.create');

});

Route::get('/ViewKelas',function(){
	return view('kelas.index');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

	
	
	Route::get('/cek',function(){
		return view('layouts.admin');
	});

Auth::routes();

Route::get('/kelas/{id}', 'AbsensiSiswaController@kelasAjax');

Route::group(['prefix'=>'member' ,'middleware'=>['auth','role:member']], 
	function (){

Route::get('/absen', 'AbsensiSiswaController@absen');
Route::get('/siswa', 'SiswaController@siswa');
Route::get('/index', 'AbsensiSiswaController@index');
Route::get('/index', 'AbsensiSiswaController@index');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin' ,'middleware'=>['auth','role:admin']], 
	function (){

Route::get('/', function () {
    return view('welcome');
});
Route::get('/temp',function(){
		return view('absensi_siswa.template');
	});


Route::resource('laporan_absensi_siswa','LaporanAbsensiSiswaController');
Route::resource('petugas_piket','PetugasPiketController');
Route::resource('siswa','SiswaController');
Route::resource('guru','GuruController');
Route::resource('kelas','KelasController');
Route::get('carisiswa','AbsensiSiswaController@search');

	});


Route::group(['prefix'=>'petugaspiket' ,'middleware'=>['auth','role:petugas']], 
	function (){

Route::get('/', function () {
    return view('welcome');


	});

Route::resource('absensi_siswa','AbsensiSiswaController');
Route::resource('absensi_guru','AbsensiGuruController');

});
// Templates
Route::group(array('prefix'=>'/templates/'),function(){
    Route::get('{template}', array( function($template)
    {
        $template = str_replace(".html","",$template);
        View::addExtension('html','php');
        return View::make('templates.'.$template);
    }));
});