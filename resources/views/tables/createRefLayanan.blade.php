@extends('layouts.app')

@section('content')
<form action="/layanan" method="POST">
    @csrf

    <label for="nama">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
        id="nama" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
    <label for="is_active">Status layanan</label>
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