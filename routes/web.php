<?php

use App\Http\Controllers\Dashboard\BukuController;
use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SantriController;
use App\Http\Controllers\Dashboard\PengurusController;
use App\Http\Controllers\Dashboard\KemajuanController;
use App\Http\Controllers\Dashboard\GuruController;
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

    //pengurus
    Route::get('/pengurus',[PengurusController::class, "index"]);
    Route::get('/hapus-pengurus/{id}',[PengurusController::class, "hapus"]);
    Route::get('/form-pengurus',[PengurusController::class, "form"]);
    Route::post('/tambah-pengurus',[PengurusController::class,"insert"]);
    Route::get('/ubah-pengurus/{id}',[PengurusController::class,"formUpdate"]);
    Route::post('/update-pengurus/{id}',[PengurusController::class,"update"]);

    //guru
    Route::get('/guru',[GuruController::class, "index"]);
    Route::get('/hapus-guru/{id}',[GuruController::class, "hapus"]);
    Route::get('/form-guru',[GuruController::class, "form"]);
    Route::post('/tambah-guru',[GuruController::class,"insert"]);
    Route::get('/ubah-guru/{id}',[GuruController::class,"formUpdate"]);
    Route::post('/update-guru/{id}',[GuruController::class,"update"]);
    });

// User Dashboard
Route::middleware('auth:user')->group(function () {
    // Landing Page User
    Route::get('/user',[HomeController::class, "index"])->name('MainUser');
    Route::get('/about',[HomeController::class, "about"]);

    //melihat data santri
    Route::get('/user-dashboard', function(){
        $data = App\Models\Kemajuan::with(['detailKemajuans',
                                'detailKemajuans.detailKemajuanBabs.Buku',
                                'kemajuanPenguruses',
                                'kemajuanSantris'
                            ])
                ->where('FK_Id_santri', Auth::user()->id_santri)
                ->get();
        return view('santri-dashboard', ["title" => "Data Kemajuan", "data" => $data]);
    });

    //melihat data buku
    Route::get('/user-buku', function(){
        $data = App\Models\Buku::with(['Bab'])
                ->get();
        return view('user-buku', ["title" => "Data Buku", "data" => $data]);
    });

    //melihat detail bab

    // Route::get('/user-show-bab/{id}', function(){
    //     $data = App\Models\Bab::with(['Buku'])
    //             ->get();
    //     return view('user-show-bab', ["title" => "Data Bab", "data" => $data]);
    // });
    
    Route::get('/user-show-bab/{id}',[BukuController::class, "showUserBab"])->name('userbab');

    //melihat data pengurus
    Route::get('detail-pengurus', function(){
        $allPengurus = App\Models\Pengurus::all();
        return view('detail-pengurus', ["title" => "Data Pengurus",'data' => $allPengurus]);
    });
});


// Guru Dashboard
Route::middleware('auth:guru')->group(function () {
    Route::get('/guru-dashboard',[DashboardController::class,"index"])->name('DashGuru');

  // santri
  Route::get('view-santri', function(){
    $allSantri = App\Models\Santri::all();
    return view('view-santri', ["title" => "Data Santri",'data' => $allSantri]);
  });
  
  // pengurus
  Route::get('view-pengurus', function(){
    $allPengurus = App\Models\Pengurus::all();
    return view('view-pengurus', ["title" => "Data Pengurus",'data' => $allPengurus]);
  });

  // guru
  Route::get('view-guru', function(){
    $allGuru = App\Models\Guru::all();
    return view('view-guru', ["title" => "Data Guru",'data' => $allGuru]);
  });

});

// Admin dan Guru
Route::middleware('auth:admin,guru')->group(function () {
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

});