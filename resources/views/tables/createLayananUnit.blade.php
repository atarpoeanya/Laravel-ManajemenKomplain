@extends('layouts.app')

@section('content')
<form action="/test3" method="POST">
    @csrf

    <label for="id_layanan">Jenis Layanan</label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_layanan" id="id_layanan" > 
    @foreach($reflayanan as $value)
        <option value="{{$value->id}}"> {{$value->nama}} </option>
    @endforeach
        
    </select>

    <label for="id_unit">Managed By</label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_unit" id="id_unit" > 
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