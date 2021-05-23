@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID UNIT</th>
                <th scope="col">Nama</th>
                <th scope="col">Active</th>
                <th scope="col">Level</th>
            </tr>
        </thead>
        <tbody>
        @foreach($refUnit as $value)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$value->nama}}</td>
                @if ($value->is_active == 1)
                <td>{{'true'}}</td>
                @else
                <td>{{'false'}}</td>
                @endif

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
