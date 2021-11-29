<?php

use App\Http\Controllers\Dashboard\BukuController;
use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SantriController;
use App\Http\Controllers\Dashboard\PengurusController;
use App\Http\Controllers\Dashboard\KemajuanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

    // buku
    Route::get('/buku', [BukuController::class, 'index']);
    Route::get('/form-buku',[BukuController::class, "form"]);
    Route::post('/tambah-buku',[BukuController::class,"tambahBuku"]);
    Route::get('/hapus-buku/{id}',[BukuController::class, 'hapusBuku']);
    Route::get('/ubah-buku/{id}',[BukuController::class, 'show']);
    Route::post('/ubah-buku/{id}',[BukuController::class, 'update']);

    // bab
    Route::get('/show-bab/{id}',[BukuController::class, "showBab"])->name('bab');
    Route::get('/form-bab',[BukuController::class, "bab"]);
    Route::post('/tambah-bab',[BukuController::class,"tambahBab"]);
    Route::get('/hapus-bab/{id}',[BukuController::class, 'hapusBab']);

    // kemajuan
    Route::get('/form-kemajuan',[KemajuanController::class, "form"]);
    Route::post('/tambah-kemajuan',[KemajuanController::class, "tambah"]);
    Route::get('/kemajuan', [KemajuanController::class, "index"]);
    Route::get('/hapus-kemajuan/{id}',[KemajuanController::class, 'hapus']);


    //pengurus
    Route::get('/pengurus',[PengurusController::class, "index"]);
    Route::get('/hapus-pengurus/{id}',[PengurusController::class, "hapus"]);
    Route::get('/form-pengurus',[PengurusController::class, "form"]);
    Route::post('/tambah-pengurus',[PengurusController::class,"insert"]);
    Route::get('/ubah-pengurus/{id}',[PengurusController::class,"formUpdate"]);
    Route::post('/update-pengurus/{id}',[PengurusController::class,"update"]);

});

// User Dashboard
Route::middleware('auth:user')->group(function () {
    // Landing Page User
    Route::get('/user',[HomeController::class, "index"])->name('MainUser');
    Route::get('/about',[HomeController::class, "about"]);
    Route::get('/user-dashboard', function(){
        $data = App\Models\Kemajuan::with(['detailKemajuans',
                                'detailKemajuans.detailKemajuanBabs.Buku',
                                'kemajuanPenguruses',
                                'kemajuanSantris'
                            ])
                ->where('FK_Id_santri', Auth::user()->id_santri)
                ->get();
        return view('santri-dashboard', ["title" => "Dashboard-Santri", "data" => $data]);
    });
    Route::get('detail-pengurus', function(){
        $allPengurus = App\Models\Pengurus::all();
        return view('detail-pengurus', ["title" => "Detail-Pengurus",'data' => $allPengurus]);
    });
});



