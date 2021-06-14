@extends('layouts.app')

@section('content')
<form action="/komplain" method="POST">
    @csrf

    <label for="id_layanan">Id Layanan</label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_layanan" id="id_layanan" > 
    @foreach($reflayanan as $value)
        <option value="{{$value->id}}"> {{$value->nama}} </option>
    @endforeach

    <label for="id_user"> Id User </label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_user" id="id_user" > 
    @foreach($komplain as $value)
        <option value="{{$value->id}}"> {{$value->nama}} </option>
    @endforeach

    <label for="id_kategori"> Id Kategori </label>
    <select class="form-control @error('id_kategori') is-invalid @enderror" name="id_kategori" id="id_kategori" > 
    @foreach($komplain as $value)
        <option value="{{$value->id}}"> {{$value->nama}} </option>
    @endforeach
    <br>

    <label for="komplain"> Komplain </label>
    <input type="text" class="form-control @error('komplain') is-invalid @enderror" 
        id="komplain" placeholder="isi komplain anda" name="komplain" value="{{ old('komplain') }}">
    
    <label for="path_bukti"> Path Bukti </label>
    <input type="text" class="form-control @error('path_bukti') is-invalid @enderror" 
        id="path_bukti" placeholder="Masukkan bukti" name="path_bukti" value="{{ old('path_bukti') }}">

    <label for="status_utama_komplain"> Status Utama Komplain </label>
    <input type="text" class="form-control @error('status_utama_komplain') is-invalid @enderror" 
        id="status_utama_komplain" placeholder="Masukkan status" name="status_utama_komplain" value="{{ old('status_utama_komplain') }}">


    <input type="hidden" class="form-control @error('created_by') is-invalid @enderror" 
        id="created_by"  name="created_by" value="{{Auth::user()->name}}" readonly>

    @error('nama')
    <div class="invalid-feedback">{{ 'error' }}</div>
    @enderror
    <button type="submit">submit</button>

</form>

@endsection