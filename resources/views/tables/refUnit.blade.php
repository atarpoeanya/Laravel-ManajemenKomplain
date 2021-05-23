@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Level</th>
                <th scope="col">Active</th>
                <th scope="col">Managed by</th>
            </tr>
        </thead>
        <tbody>
        @foreach($refunit as $value)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$value->nama}}</td>
                <td>{{$value->level}}</td>
                @if ($value->is_active == 1)
                <td>{{'true'}}</td>
                @else
                <td>{{'false'}}</td>
                @endif

                
                <td>{{$value->id_unit_parent}}</td>
                
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
