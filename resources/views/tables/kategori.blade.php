@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
            </tr>
        </thead>
        <tbody>
        @foreach($kategori as $value)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>

                @foreach($kategori as $value1)
                @if($value1->id == $value->id)
                <td>{{$value1->nama}}</td>
                @endif
                @endforeach

                @foreach($kategori as $value2)
                @if($value2->id == $value->id)
                <td>{{$value2->nama}}</td>
                @endif
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection