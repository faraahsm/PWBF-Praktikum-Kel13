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

Route::get('/tentang', function () {
    return view('about', [
        "title" => "Tentang"
    ]);
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran', [
        "title" => "Pendaftaran"
    ]);
});

Route::get('/akun', function () {
    return view('akun', [
        "title" => "Akun"
    ]);
});

Route::get('/pengguna', function () {
    return view('pengguna', [
        "title" => "Pengguna"
    ]);
});

//santri
Route::get('/penggunasantri', [SantriController::class, 'index'] );
Route::delete('/delete-santri-{id}', [SantriController::class, 'destroy']);

//pengurus
Route::get('/penggunapengurus', [PengurusController::class, 'index'] );
Route::delete('/delete-pengurus-{id}', [PengurusController::class, 'destroy']);

//pendaftaran
Route::post('/pendaftaran', [PendaftaranController::class, 'store']);
