<?php

namespace App\Http\Controllers;

use App\Models\detailperan;
use Illuminate\Http\Request;

class detailperan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_peran = DB::table('detail_peran')->get();

        return view('dashboard.detail-peran-table', ['detail_peran' => $detail_peran]);
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
     * @param  \App\Models\detailperan  $detailperan
     * @return \Illuminate\Http\Response
     */
    public function show(detailperan $detailperan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detailperan  $detailperan
     * @return \Illuminate\Http\Response
     */
    public function edit(detailperan $detailperan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detailperan  $detailperan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detailperan $detailperan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detailperan  $detailperan
     * @return \Illuminate\Http\Response
     */
    public function destroy(detailperan $detailperan)
    {
        //
    }
}
