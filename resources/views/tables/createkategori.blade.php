@extends('layouts.app')

@section('content')
<form action="/kategori" method="POST">
    @csrf

    <label for="nama">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
        id="nama" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
        
    </select>
        
    <input type="hidden" class="form-control @error('created_by') is-invalid @enderror" 
        id="created_by"  name="created_by" value="{{Auth::user()->name}}" readonly>

    @error('nama')
    <div class="invalid-feedback">{{ 'error' }}</div>
    @enderror
    <button type="submit">submit</button>

</form>

@endsection
