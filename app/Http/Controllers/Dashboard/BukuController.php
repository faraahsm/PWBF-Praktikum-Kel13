<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Bab;
use Illuminate\Http\Request;
use App\Models\Buku;
use Exception;
use Illuminate\Support\Facades\DB;


class BukuController extends Controller
{
    public function index(){
        $buku = Buku::all();
        return view('Dashboard.buku',[
            'data' => $buku,
            "title" => "Buku"
        ]);
    }

    public function show($id){
        try {
            $buku = Buku::findOrFail($id);
            return view('Dashboard.form-update-buku',[
                'data' => $buku,
                "title" => "Ubah Buku"
            ]);
        } catch (Exception $err) {
            dd($err);
        }
    }

    public function form(){
        return view('Dashboard.form-buku',[
            "title" => "Tambah Buku"
        ]);
    }

    public function bab(){
        $buku = Buku::all();
        return view('Dashboard.form-bab',[
            'data' => $buku
        ]);
    }

    public function showBab($id){
        $data = Buku::all();
        $bab = Bab::where('FK_Id_buku', $id)->with('Buku')->get();
        return view('Dashboard.buku', [
            "title"=> "Detail Buku",

        ] ,compact('data', 'bab'));

      
    }

    public function tambahBuku(Request $request){

        $validation = $request->validate([
            "buku" => ["required", "min:3", "max:49"],
            "keterangan" => ["required"],
            "gambar" => 'image|file|max:1024'

        ]);

        $file = $request->file('gambar');
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $file->move($target_dir,$file->getClientOriginalName());


        DB::table('buku')->insert([
            'buku'              => $validation['buku'],
            'keterangan'        => $validation['keterangan'],
            'gambar'             => basename($_FILES["gambar"]["name"]),
            ]);
            
        return redirect('/buku');
    
        // try {
        //     Buku::create($validation);
        //     return redirect('/buku');
        // } catch (Exception $err) {
        //     dd($err);
        // }
    }

    public function update(Request $request, $id){
        $buku = Buku::findOrFail($id);

        $validation = $request->validate([
            "buku" => ["required", "min:3", "max:49"],
            "keterangan" => ["required"],
            "gambar" => 'image|file|max:1024'

        ]);

        try {
            $buku->update($validation);
            return redirect('/buku');
        } catch (Exception $err) {
            return redirect('/buku');
        }
    }

    public function tambahBab(Request $request){
        $validation = $request->validate([
            "FK_Id_buku" => ["required"],
            "bab" => ["required", "max:49"],
            "judul" => ["required", "max:49"],
            "keterangan" => ["required"]
        ]);

        try {
            Bab::create($validation);
            return redirect('/buku');
        } catch (Exception $err) {
            dd($err);
        }
    }

    public function hapusBuku($id){
       $buku = Buku::findOrFail($id);
       try {
           $buku->Bab()->delete();
           $buku->delete();
           return redirect('/buku');
       } catch (Exception $err) {
        return redirect('/buku')->with( [ 'err' => true ] );
       }
    }

    public function hapusBab($id){
        $bab = Bab::findOrFail($id);
        try {
            $bab->delete();
            return back();
        } catch (Exception $err) {
            dd($err);
        }
    }
}
