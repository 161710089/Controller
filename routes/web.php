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


Route::get('/LoginMember', 'AuthController@getLogin');
Route::post('/LoginMember', 'AuthController@postLogin')->name('loginMember');
// Route::get('/RegisterMember', 'AuthController@getRegister');
// Route::post('/RegisterMember', 'AuthController@postRegister')->name('registerMember');
Route::get('/regis', 'SiswaController@create');

Route::get('/tes', function () {
    return dd(Auth::guard('siswa'));
})->name('tess');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::group(['prefix'=>'siswalog'],function(){
    Route::get('/login','AuthSiswa\LoginController@showLoginForm')->name('loginsiswa');
    Route::post('/login','AuthSiswa\LoginController@login')->name('siswa.login.submit');
	Route::get('/', 'SiswaLogController@index')->name('siswa');
	Route::get('/absen', 'SiswaController@absen');

});

Route::get('/tanggal',function(){
	return view('absensi_siswa.tanggal');
});

Route::get('/tesssss',function(){
	return view('date');
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


Route::get('/home', 'HomeController@index')->name('home');

	
	
	Route::get('/cek',function(){
		return view('layouts.admin');
	});

Auth::routes();

Route::get('/kelas/{id}', 'AbsensiSiswaController@kelasAjax');

Route::group(['prefix'=>'member' ,'middleware'=>['auth','role:member']], 
	function (){

Route::get('/absen', 'AbsensiSiswaController@absen');
Route::get('/absenGuru', 'AbsensiGuruController@absen');

Route::get('/siswa', 'SiswaController@siswa');
Route::get('/index', 'AbsensiSiswaController@index');
Route::get('/index', 'AbsensiSiswaController@index');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin' ,'middleware'=>['auth','role:admin']], 
	function (){

Route::get('/',function(){
		return view('admin.index');
	});

Route::get('/', 'HomeController@index')->name('home');

Route::resource('PetugasPiket','PetugasPiketController');
Route::resource('siswa','SiswaController');
Route::resource('guru','GuruController');
Route::resource('kelas','KelasController');
Route::resource('jurusan','jurusanController');

	});


Route::group(['prefix'=>'petugaspiket' ,'middleware'=>['auth','role:petugas']], 
	function (){

Route::get('/', function () {
    return view('welcome');


	});

Route::resource('absensi_siswa','AbsensiSiswaController');
Route::resource('absensi_guru','AbsensiGuruController');
Route::resource('Rekap','RekapController');
});
Route::post('/laporanabsensi' , 'RekapController@index2');

Route::get('/filter/kelas/{id}', 'AbsensiSiswaController@filter');

// Templates
Auth::routes();

