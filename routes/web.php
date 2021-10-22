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
    return view('welcome', [
        "title" => "Beranda"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about"
    ]);
});

Route::get('/daftar', function () {
    return view('register', [
        "title" => "Daftar"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Masuk"
    ]);
});


Route::get('pengguna', function () {
    return view('pengguna', [
    ]);
});

Route::get('/santri', function () {
    return view('santri', [
    ]);
});


Route::get('/pengurus', function () {
    return view('pengurus', [
    ]);
});
