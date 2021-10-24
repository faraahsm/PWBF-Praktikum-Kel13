<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PengurusController extends Controller
{
    public function index()
    {
        // mengambil data dari table tbl_siswa
        $pengurus = DB::table('pengurus')->get();

        // mengirim data siswa ke view index
        return view('pengurus',['data_pengurus' => $pengurus,"title" => "Pengguna"]);
    }
}
