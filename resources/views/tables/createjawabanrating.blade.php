@extends('layouts.app')

@section('content')
<form action="/jawabanrating" method="POST">
    @csrf

    <label for="id_pertanyaan">Id Pertanyaan</label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_pertanyaan" id="id_pertanyaan"> 
    @foreach($idpertanyaan as $value)
        <option value="{{$value->id}}"> {{$value->nama}} </option>
    @endforeach
    </select>

    <label for="id_layanan">Id Komplain</label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_komplain" id="id_komplain"> 
    @foreach($idkomplain as $value)
        <option value="{{$value->id}}"> {{$value->nama}} </option>
    @endforeach
    </select>

    <label for="jawaban"> Jawaban </label>
    <input type="text" class="form-control @error('jawaban') is-invalid @enderror" 
    id="jawaban" placeholder="isi jawaban anda" name="jawaban" value="{{ old('jawaban') }}">

    <label for="is_active">Is Active</label>
    <select class="form-control @error('is_active') is-invalid @enderror" name="is_active" id="is_active" >
        <option value="1">Aktif</option>
        <option value="0">Tidak Aktif</option>
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