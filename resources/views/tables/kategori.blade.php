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



     <td>{{$value->nama}}</td>



            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection

