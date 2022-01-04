<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('Dashboard.dashboard',[
            "title" => "Dashboard"
        ]);
    }

    public function home(){
        return view('Dashboard.guru-dashboard',[
            "title" => "Dashboard"
        ]);
    }
}
