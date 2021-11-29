<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengurus;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Exception;

class PengurusController extends Controller
{
    public function index(){
        try {
            $allPengurus=Pengurus::all();
        } catch (Exception $err) {
            dd($err);
        }

        return view('Dashboard/pengurus',['data' => $allPengurus]);
    }

    public function hapus($id){
        try {
            Pengurus::find($id)->delete();
            return redirect('/pengurus');
        } catch (Exception $e) {
            return redirect('/pengurus')->with( [ 'err' => true ] );
        }

    }

    public function form(){
        return view('Dashboard/form-pengurus');
    }

    public function insert(Request $request){
        $validation = $request->validate([
            "nama_pengurus" => ["required"],
            "gender" => ["required", "in:L,P"],
            "hp" => ["required", "max:15"],
            "email" => ["required"],
            "aktif" => ["required"],
            "password" => ["min:6", "max:16"],
        ]);

        $validation["password"] = Hash::make("admin123");

        try{
            Pengurus::create($validation);
            return redirect("/pengurus");
        }catch(QueryException $err){
            dd($err);
        }
    }

    public function formUpdate(Request $request,$id){
        try {
            $pengurus = Pengurus::find($id);
        } catch (Exception $err) {
            dd($err);
        }
        return view('Dashboard/form-update-pengurus',['data'=>$pengurus]);
    }

    public function update(Request $request, $id){
        $validation = $request->validate([
            "nama_pengurus" => ["required"],
            "gender" => ["required", "in:L,P"],
            "hp" => ["required", "max:15"],
            "email" => ["required"],
            "aktif" => ["required"],
            "password" => ["min:6", "max:16"],
        ]);

        try {
            $pengurus = Pengurus::findOrFail($id);
            $pengurus->update($validation);
            return redirect("/pengurus");
        } catch (Exception $err) {
            dd($err);
        }
    }
}
