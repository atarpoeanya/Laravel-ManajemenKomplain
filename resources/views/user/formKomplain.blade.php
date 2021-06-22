@extends('layouts.app')

@section('content')
<form action="\user" method="POST" class="form m-3 p-5">
    @csrf

    
    <input type="text" class="form-control @error('path_bukti') is-invalid @enderror" 
        id="nama" placeholder="Judul" name="path_bukti" value="{{ old('path_bukti') }}">
    <textarea name="komplain" id="komplain" cols="100" rows="10" class="form-control mb-2 @error('komplain') is-invalid @enderror" placeholder="Isi pesan">
    
    </textarea>
    <label for="id_kategori">Kategori</label>
    <select class="form-control @error('id_kategori') is-invalid @enderror" name="id_kategori" id="id_kategori" style="width:40%"> 
        @foreach($kategori as $value)
            <option value="{{$value->id}}"> {{$value->nama}} </option>
        @endforeach
    </select>

    <label for="id_layanan">Layanan</label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_layanan" id="id_layanan"> 
    @foreach($reflayanan as $value)
        <option value="{{$value->id}}"> {{$value->nama}} </option>
    @endforeach
    </select>
    
    <input type="hidden" class="form-control @error('status_utama_komplain') is-invalid @enderror" 
        id="status_utama_komplain" placeholder="Masukkan status" name="status_utama_komplain" value="AKTIF">

    <input type="hidden" class="form-control @error('created_by') is-invalid @enderror" 
        id="created_by"  name="created_by" value="{{Auth::user()->name}}" readonly>

        <input type="hidden" class="form-control @error('id_user') is-invalid @enderror" 
        id="id_user"  name="id_user" value="{{$id = Auth::id()}}" readonly>

    @error('nama')
    <div class="invalid-feedback">{{ 'error' }}</div>
    @enderror
    <button type="submit" class="btn bg-primary my-3">submit</button>
    
    

</form>

@endsection