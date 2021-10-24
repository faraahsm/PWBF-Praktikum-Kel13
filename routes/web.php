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
        "title" => "Tentang"
    ]);
});

Route::get('/daftar', function () {
    return view('register', [
        "title" => "Daftar"
    ]);
});

Route::get('/akun', function () {
    return view('Akun', [
        "title" => "Akun"
    ]);
});


Route::get('/pengguna', function () {
    return view('pengguna', [
        "title" => "Pengguna"
    ]);
});

Route::get('/pengguna/santri', function () {
    return view('santri', [
        "title" => "Santri"
    ]);
});


Route::get('/pengguna/pengurus', function () {
    return view('pengurus', [
        "title" => "Pengurus"
    ]);
});
