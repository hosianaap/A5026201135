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
    return view('htmlTugas4');
});

// ETS
Route::get('ETS', function () {
    return view('htmlETS');
});


Route::get('isiannama', "ViewController@showForm") ;
Route:: post('greetings', "ViewController@resultGreetings") ;
