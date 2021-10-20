<?php

namespace App\Http\Controllers;

use App\Models\pengurus;
use Illuminate\Http\Request;

class pengurus extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengurus = DB::table('pengurus')->get();

        return view('dashboard.pengurus-table', ['pengurus' => $pengurus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function show(pengurus $pengurus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function edit(pengurus $pengurus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengurus $pengurus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengurus $pengurus)
    {
        //
    }
}
