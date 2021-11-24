<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('LandingPage/welcome', [
            "title" => "Beranda"
        ]);
    }

    public function about(){
        return view('LandingPage/about', [
            "title" => "Tentang"
        ]);
    }
}
