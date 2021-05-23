@extends('layouts.app')

@section('content')
<form action="/test2" method="POST">
    @csrf

    <label for="nama">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
        id="nama" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">

    <label for="level">Level</label>
    <select class="form-control @error('level') is-invalid @enderror" name="level" id="level" > 
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>

    <label for="id_unit_parent">Managed By</label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_unit_parent" id="id_unit_parent" > 
        <option></option>
    @foreach($refunit as $value)
        <option value="{{$value->id}}"> {{$value->nama}} </option>
    @endforeach
        
    </select>

    <label for="is_active">Status unit</label>
    <select class="form-control @error('is_active') is-invalid @enderror" name="is_active" id="is_active" >
        <option value="1">Aktif</option>
        <option value="0">Tidak Aktif</option>
    </select>

    <input type="hidden" class="form-control @error('created_by') is-invalid @enderror" 
        id="created_by"  name="created_by" value="{{Auth::user()->name}}" readonly>

    @error('nama')
    <div class="invalid-feedback">{{ 'error' }}</div>
    @enderror
    <button type="submit">submit</button>

</form>

@endsection