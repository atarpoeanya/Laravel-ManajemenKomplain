<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\layananUnit;
use App\Models\refUnit;
use App\Models\refLayanan;
use App\Models\kategori;
use App\Models\komplain;
use App\Models\komplainkomentar;

class KomplainKomentarController extends Controller
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
        $komplainkomentar = komplainkomentar::all();
        return view('tables.komplainkomentar', compact('refunit', 'reflayanan', 'layananunit','kategori','komplain','komplainkomentar'));
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
        $layananunit = layananUnit::all();
        $kategori = kategori::all();
        $komplain = komplain::all();
        $komplainkomentar = komplainkomentar::all();
        return view ('tables.createkomplainkomentar',compact('refunit', 'reflayanan', 'layananunit','kategori','komplain', 'komplainkomentar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['id_komplain'=>'required','id_user_from'=>'required','id_user_to'=>'required','statuskomplain'=>'required','tanggapan'=>'required']);
        komplainkomentar::create($request->all());
        return redirect('/komplain')->with('status','Masuk');
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
