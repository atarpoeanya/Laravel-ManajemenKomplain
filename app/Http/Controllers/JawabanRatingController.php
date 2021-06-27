<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jawabanrating;
use App\Models\komplain;
use App\Models\pertanyaanrating;

class JawabanRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jawabanrating = jawabanrating::all();
        $komplain = komplain::all();
        return view('tables.jawabanrating', compact ('jawabanrating'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jawabanrating = jawabanrating::all();
        $komplain = komplain::all();
        return view('tables.createjawabanrating', compact('jawabanrating'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['id_pertanyaan'=>'required','id_komplain'=>'required','jawaban'=>'required','is_active'=>'required']);
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
