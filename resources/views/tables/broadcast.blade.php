@extends('layouts.app')
@if(checkPermission(['admin']))
@section('content')
<div class="container">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nomer Hp</th>
                <th scope="col">Pesan</th>


                
            </tr>
        </thead>
        <tbody>
        @foreach($group as $value)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$value->no_hp}}</td>
                <td>{{$value->pesan}}</td>

        
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ url('/home') }}" class="btn bg-success my-3">Back</a>
    <a href="/broadcast/create" class="btn btn-secondary">Insert</a>
</div>
@endsection
@endif
