@extends('layouts.app')

@section('content')
<form action="/kategori" method="POST">
    @csrf

    <label for="id_unit">Nama</label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_unit" id="id_unit" > 
    @foreach($refunit as $value)
        <option value="{{$value->id}}"> {{$value->nama}} </option>
    @endforeach
        
    </select>
        
    <input type="hidden" class="form-control @error('created_by') is-invalid @enderror" 
        id="created_by"  name="created_by" value="{{Auth::user()->name}}" readonly>

    @error('nama')
    <div class="invalid-feedback">{{ 'error' }}</div>
    @enderror
    <button type="submit">submit</button>

</form>

@endsection
