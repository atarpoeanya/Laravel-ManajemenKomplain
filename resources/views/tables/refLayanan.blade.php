@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Active</th>

            </tr>
        </thead>
        <tbody>
        @foreach($reflayanan as $value)
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
    <a href="{{ url('/home') }}" class="btn bg-success my-3">Back</a>
    <a href="/layanan/create" class="btn btn-secondary">Insert</a>
</div>
@endsection
