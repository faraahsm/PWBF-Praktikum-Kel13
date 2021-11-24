<?php

use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SantriController;
use Illuminate\Auth\Events\Login;
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

// Landing Page
Route::get('/',[HomeController::class,"index"])->middleware('guest');
Route::get('/tentang',[HomeController::class,"about"])->middleware('guest');

// Authentication
Route::get('/login', [LoginController::class, "index"])->name('login')->middleware('guest');
Route::post('/login/authenticate', [LoginController::class, "authenticate"]);
Route::get('/logout', [LoginController::class, 'logout']);

// Admin Dashboard
Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard',[DashboardController::class,"index"])->name('dashboard');

    // santri
    Route::get('/santri',[SantriController::class,"index"]);
    Route::get('/form-santri',[SantriController::class,"form"]);
    Route::post('/tambah-santri',[SantriController::class,"insert"]);
    Route::get('/hapus-santri/{id}',[SantriController::class, 'delete']);
    Route::get('/ubah-santri/{id}',[SantriController::class, 'formUpdate']);
    Route::post('/ubah-santri/{id}',[SantriController::class, 'update']);
});

// User Dashboard
Route::middleware('auth:user')->group(function () {
    // Landing Page User
    Route::get('/user',[HomeController::class, "index"])->name('MainUser');
    Route::get('/about',[HomeController::class,"about"]);
});



