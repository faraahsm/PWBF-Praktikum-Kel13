<?php

use App\Http\Controllers\SantriController;
use App\Http\Controllers\PengurusController;
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

Route::get('/daftar', function () {
    return view('pendaftaran', [
        "title" => "Pendaftaran"
    ]);
});

//santri
Route::get('/penggunasantri', [SantriController::class, 'index'] );

//pengurus
Route::get('/penggunapengurus', [PengurusController::class, 'index'] );

