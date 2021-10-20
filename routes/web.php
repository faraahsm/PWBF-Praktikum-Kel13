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

Route::get('/tentang', function () {
    return view('about', [
        "title" => "Tentang"
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