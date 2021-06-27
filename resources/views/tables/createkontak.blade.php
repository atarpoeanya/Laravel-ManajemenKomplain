@extends('layouts.app')

@section('content')
<form action="/kontak" method="POST">
    @csrf

    <label for="no_hp"> Nomer Hp </label>
    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" 
    id="no_hp" placeholder="isi Nomer Hp" name="no_hp" value="{{ old('no_hp') }}">

    <label for="nama"> Nama </label>
    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" 
    id="nama" placeholder="isi nama " name="nama" value="{{ old('nama') }}">

    <label for="id_pertanyaan">Id Pertanyaan</label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_pertanyaan" id="id_pertanyaan"> 
    @foreach($idpertanyaan as $value)
        <option value="{{$value->id}}"> {{$value->nama}} </option>
    @endforeach
    </select>

    <label for="id_jenis_kontak">Id Jenis Kontak</label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_jenis_kontak" id="id_jenis_kontak"> 
    @foreach($idjeniskontak as $value)
        <option value="{{$value->id}}"> {{$value->nama}} </option>
    @endforeach
    </select>

    <input type="hidden" class="form-control @error('created_at') is-invalid @enderror" 
        id="created_at"  name="created_at" value="{{Auth::user()->name}}" readonly>
    
    <input type="hidden" class="form-control @error('updated_at') is-invalid @enderror" 
        id="updated_at"  name="updated_at" value="{{Auth::user()->name}}" readonly>

    <input type="hidden" class="form-control @error('created_by') is-invalid @enderror" 
        id="created_by"  name="created_by" value="{{Auth::user()->name}}" readonly>

    <input type="hidden" class="form-control @error('updated_by') is-invalid @enderror" 
        id="updated_by"  name="updated_by" value="{{Auth::user()->name}}" readonly>

    
    @error('nama')
    <div class="invalid-feedback">{{ 'error' }}</div>
    @enderror
    <button type="submit" class="btn bg-primary my-3">submit</button>

</form>

@endsection