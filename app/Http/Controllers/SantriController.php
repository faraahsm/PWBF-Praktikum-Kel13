<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\santrii;


class SantriController extends Controller
{
    public function index()
    {
        // mengambil data dari table tbl_siswa
        $santri = DB::table('santri')->get();

        // mengirim data siswa ke view index
        return view('santri',['data_santri' => $santri,"title" => "Santri"]);
    }

    public function destroy($id)
    {
        $santri = santrii::find($id);
        $santri->delete();
        // santrii::find($id)->delete();

        return redirect('/penggunasantri')->with('deleteSantri','Delete success!');
    }
}
