<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Bab;
use App\Models\DetailKemajuan;
use App\Models\Santri;
use Illuminate\Support\Facades\DB;
use App\Models\Kemajuan;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class KemajuanController extends Controller
{
    public function index(){
        $data = Kemajuan::with(['detailKemajuans',
                                'detailKemajuans.detailKemajuanBabs.Buku',
                                'kemajuanGurus',
                                'kemajuanSantris'
                            ])
                ->where('FK_Id_guru', Auth::user()->id_guru)
                ->get();
        return view('Dashboard.kemajuan',[
            'data' => $data,
            "title" => "Kemajuan"
        ]);
    }

    public function form(){
        $santri = Santri::all();
        $bab = Bab::all();
        return view('Dashboard.form-kemajuan',[
            "title" => "Tambah Kemajuan"
        ], compact('santri', 'bab'));
    }

    public function tambah(Request $request){

        $kemajuan = $request->validate([
            "FK_Id_guru" => ["numeric", "required"],
            "FK_Id_santri" => ["numeric", "required"],
            "tanggal" => ["date", "required"],
            "status" => ["max:1", "required"]
        ]);

        $detailKemajuan = $request->validate([
            "FK_Id_kemajuan" => ["min:1"],
            "FK_Id_buku" => ["min:1"],
            "FK_Id_bab" => ["min:1"],
            "keterangan" => ["required", "max:50"]
        ]);

        $data = explode("&", $request->FK_Id_bab);
        $detailKemajuan["FK_Id_buku"] = $data[0];
        $detailKemajuan["FK_Id_bab"] = $data[1];


        try {
            $idKemajuan = Kemajuan::create($kemajuan);
            $detailKemajuan["FK_Id_kemajuan"] = $idKemajuan->id;

            DetailKemajuan::create($detailKemajuan );
            return redirect('/kemajuan');
        } catch (Exception $err) {
            dd($err);
        }
    }

    public function hapus($id){
        $kemajuan = Kemajuan::findOrFail($id);
        try {
            $kemajuan->detailKemajuans()->delete();
            $kemajuan->delete();
            return redirect('/kemajuan');
        } catch (Exception $err) {
            dd($err);
        }
    }
}
