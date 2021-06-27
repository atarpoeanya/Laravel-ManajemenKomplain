@extends('layouts.app')
@if(checkPermission(['admin']))
@section('content')
<div class="container">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id Kontak</th>

                
            </tr>
        </thead>
        <tbody>
        @foreach($group as $value)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                @foreach($kontak as $value1)
                @if($value1->id == $value->id)
                <td>{{$value1->nama}}</td>
                @endif
                @endforeach          
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ url('/home') }}" class="btn bg-success my-3">Back</a>
    <a href="/group/create" class="btn btn-secondary">Insert</a>
</div>
@endsection
@endif
