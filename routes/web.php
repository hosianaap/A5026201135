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


// Tugas 4
Route::get('tugas_4', function () {
    return view('Tugas4');
});

//Tugas 5
Route::get('tugas_5', function () {
    return view('Tugas5');
});

// Praktikum 2
Route::get('praktikum_2', function () {
    return view('Praktikum2');
});

// ETS
Route::get('ETS', function () {
    return view('htmlETS');
});

// Tugas PHP
Route::get('isianLinearSearch', "ViewController@FormLinearSearch");
Route::post('hasilLinearSearch', "ViewController@ResultLinearSearch");


// Route::get('isiannama', "ViewController@showForm") ;
// Route:: post('greetings', "ViewController@resultGreetings") ;

// route CRUD pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

// route CRUD absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');

// route CRUD beras
Route::get('/beras','BerasController@index');
Route::get('/beras/tambah','BerasController@tambah');
Route::post('/beras/store','BerasController@store');
Route::get('/beras/edit/{id}','BerasController@edit');
Route::post('/beras/update','BerasController@update');
Route::get('/beras/hapus/{id}','BerasController@hapus');
Route::get('/beras/cari','BerasController@cari');
Route::get('/beras/view/{id}','BerasController@detail');

// route CRUD Karyawan 1
Route::get('/karyawan1','Karyawan1Controller@index');
Route::get('/karyawan1/edit/{id}','Karyawan1Controller@edit');
Route::post('/karyawan1/update','Karyawan1Controller@update');
Route::get('/karyawan1/view/{id}','Karyawan1Controller@detail');
