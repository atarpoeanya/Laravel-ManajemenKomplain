@extends('layouts.app')

@section('content')
<form action="/broadcast" method="POST">
    @csrf


    <label for="no_hp"> Nomer Hp </label>
    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" 
    id="no_hp" placeholder="isi nomer hp" name="no_hp" value="{{ old('no_hp') }}">

    <label for="pesan"> Pesan </label>
    <input type="text" class="form-control @error('pesan') is-invalid @enderror" 
    id="no_hp" placeholder="isi pesan" name="pesan" style="width:40%" value="{{ old('pesan') }}">


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