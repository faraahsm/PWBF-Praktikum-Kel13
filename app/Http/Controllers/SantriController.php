<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SantriController extends Controller
{
    public function index()
    {
        // mengambil data dari table tbl_siswa
        $santri = DB::table('santri')->get();

        // mengirim data siswa ke view index
        return view('santri',['data_santri' => $santri,"title" => "Pengguna"]);
    }
}
