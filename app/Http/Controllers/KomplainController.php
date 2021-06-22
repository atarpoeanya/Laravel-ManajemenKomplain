<?php

namespace App\Http\Controllers;

use App\Models\layananUnit;
use App\Models\refUnit;
use App\Models\refLayanan;
use App\Models\kategori;
use App\Models\komplain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KomplainController extends Controller
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
        $kategori = kategori::all();
        $komplain = komplain::all();
        
        return view('tables.komplain', compact('refunit', 'reflayanan', 'layananunit','kategori','komplain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reflayanan = refLayanan::all();
        $layananunit = layananUnit::all();
        $kategori = kategori::all();
        $komplain = komplain::all();
        
        return view('user.formKomplain', compact('layananunit','kategori','komplain','reflayanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['id_layanan'=>'required', 'id_user'=>'required', 'id_kategori'=>'required', 'komplain'=>'required', 'path_bukti'=>'required', 'status_utama_komplain'=>'required','created_by'=>'required']);
        komplain::create($request->all());
        return redirect('user')->with('status','Masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
