@extends('layouts.app')

@section('content')
<form action="/komplainkomentar" method="POST">
    @csrf

    <label for="id_komplain">Id Komplain</label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_komplain" id="id_komplain"> 
    @foreach($komplain as $value)
        <option value="{{$value->id}}"> {{$value->nama}} </option>
    @endforeach
    </select>

    <label for="id_user_form">Id User Form</label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_user_form" id="id_user_form"> 
    @foreach($errors as $value)
        <option value="{{$value->id}}"> {{$value->nama}} </option>
    @endforeach
    </select>

    <label for="id_user_to">Id User to</label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_user_to" id="id_user_to"> 
    @foreach($errors as $value)
        <option value="{{$value->id}}"> {{$value->nama}} </option>
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
    <button type="submit">submit</button>

</form>

@endsection