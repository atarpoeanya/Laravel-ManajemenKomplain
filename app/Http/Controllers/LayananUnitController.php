<?php

namespace App\Http\Controllers;

use App\Models\layananUnit;
use App\Models\refUnit;
use App\Models\refLayanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LayananUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $refunit = refUnit::all();
        $reflayanan = refLayanan::all();
        $layananunit = layananUnit::all();
        return view('tables.layananUnit', compact('refunit', 'reflayanan', 'layananunit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $refunit = refUnit::all();
        $reflayanan = refLayanan::all();
        return view('tables.createLayananUnit', compact('refunit', 'reflayanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['is_active'=>'required', 'created_by'=>'required', 'id_layanan'=>'required', 'id_unit'=>'required']);
        layananUnit::create($request->all());
        return redirect('/test3')->with('status','Masuk jing');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\layananUnit  $layananUnit
     * @return \Illuminate\Http\Response
     */
    public function show(layananUnit $layananUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\layananUnit  $layananUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(layananUnit $layananUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\layananUnit  $layananUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, layananUnit $layananUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\layananUnit  $layananUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(layananUnit $layananUnit)
    {
        //
    }
}
