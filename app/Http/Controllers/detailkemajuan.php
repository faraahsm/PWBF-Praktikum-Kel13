<?php

namespace App\Http\Controllers;

use App\Models\detailkemajuan;
use Illuminate\Http\Request;

class detailkemajuan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_kemajuan = DB::table('detail_kemajuan')->get();

        return view('dashboard.detail-kemajuan-table', ['detail_kemajuan' => $detail_kemajuan]);
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
     * @param  \App\Models\detailkemajuan  $detailkemajuan
     * @return \Illuminate\Http\Response
     */
    public function show(detailkemajuan $detailkemajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detailkemajuan  $detailkemajuan
     * @return \Illuminate\Http\Response
     */
    public function edit(detailkemajuan $detailkemajuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detailkemajuan  $detailkemajuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detailkemajuan $detailkemajuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detailkemajuan  $detailkemajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(detailkemajuan $detailkemajuan)
    {
        //
    }
}
