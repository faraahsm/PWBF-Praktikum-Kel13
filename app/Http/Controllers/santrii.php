<?php

namespace App\Http\Controllers;

use App\Models\santrii;
use Illuminate\Http\Request;

class santrii extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $santri = DB::table('santri')->get();

        return view('dashboard.santri-table', ['santri' => $santri]);
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
     * @param  \App\Models\santrii  $santrii
     * @return \Illuminate\Http\Response
     */
    public function show(santrii $santrii)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\santrii  $santrii
     * @return \Illuminate\Http\Response
     */
    public function edit(santrii $santrii)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\santrii  $santrii
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, santrii $santrii)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\santrii  $santrii
     * @return \Illuminate\Http\Response
     */
    public function destroy(santrii $santrii)
    {
        //
    }
}
