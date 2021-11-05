<?php

namespace App\Http\Controllers;

use App\Models\pendaftaran;
use App\Models\santrii;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        // mengirim data siswa ke view index
        return view('pendaftaran',['title' => 'Pendaftaran', 'active' => 'pendaftaran']);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nama Lengkap' => 'required|max:255',
            'Jenis Kelamin' => 'required',
            'Tanggal Lahir' => 'required',
            'Kota Lahir' => 'required',
            'Nama Ortu' => 'required',
            'Alamat Ortu' => 'required',
            'Nomor Telepon' => 'required',
        ]);

        //$validatedData['password'] = bcrypt($validatedData['password']);

        santrii::create($validatedData);
        
        return redirect("{{ url('/akun')}}")->with('berhasil', 'Pendaftaran berhasil! Silahkan Sign In');
    }
}
