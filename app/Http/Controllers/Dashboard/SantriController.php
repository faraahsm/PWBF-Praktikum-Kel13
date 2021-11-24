<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelSantri;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;

class SantriController extends Controller
{
    public function index(){
        $allSantri=ModelSantri::all();
        return view('Dashboard/santri',["data_santri" => $allSantri,"title" => "santri"]);
    }

    public function form(){
        return view('Dashboard/form-santri');
    }

    public function delete($idSantri){
        ModelSantri::find($idSantri)->delete();
        return redirect('/santri');
    }

    public function formUpdate($idSantri){
        $santri = ModelSantri::where('id_santri', $idSantri)->first();
        if($santri == null){
            return redirect("/santri");
        }
        return view("Dashboard/form-update-santri", ["data" => $santri]);
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
            "password" => ["min:6", "max:16"],
        ]);

        try{
            $santri = ModelSantri::findOrFail($idSantri);
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
            "password" => ["min:6", "max:16"],
        ]);


        $validation["password"] = "santri123";
        $validation["password"] = Hash::make($validation["password"]);

        try{
            ModelSantri::create($validation);
            return redirect("/dashboard");
        }catch(QueryException $err){
            dd($err);
        }

    }
}