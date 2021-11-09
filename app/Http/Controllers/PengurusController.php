<?php

namespace App\Http\Controllers;

use App\Models\pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PengurusController extends Controller
{
    public function index()
    {
        // mengambil data dari table tbl_siswa
        $pengurus = DB::table('pengurus')->get();

        // mengirim data siswa ke view index
        return view('pengurus',['data_pengurus' => $pengurus,"title" => "Pengurus"]);
    }

    public function create()
    {
        return view('createpengurus');
    }

    public function destroy($id)
    {
        $pengurus = pengurus::find($id);
        $pengurus->delete();
        // pengurus::find($id)->delete();

        return redirect('/penggunapegurus')->with('deletePengurus','Delete success!');
    }
}
