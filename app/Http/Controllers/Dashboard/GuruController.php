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

}