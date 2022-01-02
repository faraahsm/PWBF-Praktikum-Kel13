<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\DetailKemajuan;
use Illuminate\Http\Request;
use App\Models\Santri;
use App\Models\Kemajuan;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;

class SantriController extends Controller
{
    public function index(){
        $allSantri=Santri::all();
        return view('Dashboard/santri',[
            "data_santri" => $allSantri,
            "title" => "Santri"]);
    }

    public function form(){
        return view('Dashboard/form-santri',[
            "title" => "Tambah Santri"
        ]);
    }

    public function delete($idSantri){
        try {
            Santri::find($idSantri)->delete();
            return redirect('/santri');
        } catch (Exception $err) {
            dd($err);
        }
    }

    public function formUpdate($idSantri){
        $santri = Santri::find($idSantri);
        if($santri == null){
            return redirect("/santri");
        }
        return view("Dashboard/form-update-santri",[
            "data" => $santri,
            "title" => "Ubah Santri"
        ]);
    }

    public function update(Request $request,$idSantri){
        $validation = $request->validate([
            "nama_santri" => ["required"],
            "gender" => ["required", "in:L,P"],
            "tanggal_lhr" => ["required", "date"],
            "kota_lhr" => ["required", "min:3"],
            "nama_ortu" => ["required"],
            "alamat_ortu" => ["required"],
            "hp" => ["required", "max:15"],
            "email" => ["required"],
            "tanggal_masuk" => ["required", "date"],
            "aktif" => ["required"],
            "password" => ["min:6", "max:100"],
        ]);

        try{
            $santri = Santri::find($idSantri);
            $santri->update($validation);

            return redirect("/santri");
        }catch(QueryException $err){
            dd($err->errorInfo);
        }
    }

    public function insert(Request $request){
        $validation = $request->validate([
            "nama_santri" => ["required"],
            "gender" => ["required", "in:L,P"],
            "tanggal_lhr" => ["required", "date"],
            "kota_lhr" => ["required", "min:3"],
            "nama_ortu" => ["required"],
            "alamat_ortu" => ["required"],
            "hp" => ["required", "max:15"],
            "email" => ["required"],
            "tanggal_masuk" => ["required", "date"],
            "aktif" => ["required"],
            "password" => ["min:6", "max:100"],
        ]);


        $validation["password"] = "santri123";
        $validation["password"] = Hash::make($validation["password"]);

        try{
            Santri::create($validation);
            return redirect("/santri");
        }catch(QueryException $err){
            dd($err);
        }

    }
}
