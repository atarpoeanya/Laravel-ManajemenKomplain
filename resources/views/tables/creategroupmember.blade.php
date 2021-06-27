@extends('layouts.app')

@section('content')
<form action="/groupmember" method="POST">
    @csrf

    <label for="id_group">Id Group</label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_group" id="id_group"> 
    @foreach($kontak as $value)
        <option value="{{$value->id}}"> {{$value->nama}} </option>
    @endforeach
    </select>

    <label for="id_kontak">Id Kontak</label>
    <select class="form-control @error('id_unit_parent') is-invalid @enderror" name="id_kontak" id="id_kontak"> 
    @foreach($kontak as $value)
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