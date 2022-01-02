<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Exception;

class GuruController extends Controller
{
    public function index(){
        try {
            $allGuru=Guru::all();
        } catch (Exception $err) {
            dd($err);
        }

        return view('Dashboard/guru',[
            'data' => $allGuru,
            "title" => "Guru"
        ]);
    }

    public function hapus($id){
        try {
            Guru::find($id)->delete();
            return redirect('/guru');
        } catch (Exception $e) {
            return redirect('/guru')->with( [ 'err' => true ] );
        }

    }

    public function form(){
        return view('Dashboard/form-guru',[
            "title" => "Tambah Guru"
        ]);
    }

    public function insert(Request $request){
        $validation = $request->validate([
            "nama_guru" => ["required"],
            "gender" => ["required", "in:L,P"],
            "hp" => ["required", "max:15"],
            "email" => ["required"],
            "aktif" => ["required"],
            "password" => ["min:6", "max:16"],
        ]);

        $validation["password"] = Hash::make("guru123");

        try{
            Guru::create($validation);
            return redirect("/guru");
        }catch(QueryException $err){
            dd($err);
        }
    }

    public function formUpdate(Request $request,$id){
        try {
            $guru = Guru::find($id);
        } catch (Exception $err) {
            dd($err);
        }
        return view('Dashboard/form-update-guru',[
            'data'=>$guru,
            "title" => "Ubah Guru"
        ]);
    }

    public function update(Request $request, $id){
        $validation = $request->validate([
            "nama_guru" => ["required"],
            "gender" => ["required", "in:L,P"],
            "hp" => ["required", "max:15"],
            "email" => ["required"],
            "aktif" => ["required"],
            "password" => ["min:6", "max:16"],
        ]);

        try {
            $pengurus = Guru::findOrFail($id);
            $pengurus->update($validation);
            return redirect("/guru");
        } catch (Exception $err) {
            dd($err);
        }
    }
}
