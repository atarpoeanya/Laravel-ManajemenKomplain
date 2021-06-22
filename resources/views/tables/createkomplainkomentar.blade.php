@extends('layouts.app')

@section('content')
<form action="/komplainkomentar" method="POST">
    @csrf

    <label for="id_judul">Judul</label>
    <select class="form-control @error('path_bukti') is-invalid @enderror" name="id_judl" id="id_judul"> 
    @foreach($komplain as $value)
        <option value="{{$value->id}}"> {{$value->path_bukti}} </option>
    @endforeach
    </select>

    <label for="id_user_form">Pengguna</label>
    <select class="form-control @error('id_user') is-invalid @enderror" name="id_user_form" id="id_user_form"> 
    @foreach($komplain as $value)
        <option value="{{$value->id_user}}"> {{$value->id_user}} </option>
    @endforeach
    </select>


    <label for="is_active">Status komplain</label>
    <select class="form-control @error('is_active') is-invalid @enderror" name="is_active" id="is_active" >
        <option value="1">Aktif</option>
        <option value="0">Tidak Aktif</option>
    </select>

    <label for="tanggapan">Tanggapan</label>
    <input type="text" class="form-control @error('tanggapan') is-invalid @enderror" 
        id="tanggapan" placeholder="Masukkan tanggapan" name="tanggapan" value="{{ old('tanggapan')}}">


    <input type="hidden" class="form-control @error('created_by') is-invalid @enderror" 
        id="created_by"  name="created_by" value="{{Auth::user()->name}}" readonly>



    @error('nama')
    <div class="invalid-feedback">{{ 'error' }}</div>
    @enderror
    <a href="{{ url('/home') }}" class="btn bg-dark text-light my-3">Back</a>
    <button type="submit" class="btn bg-primary my-3" >submit</button>


</form>

@endsection