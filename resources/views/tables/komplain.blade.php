@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">id_layanan</th>
                <th scope="col">id_user</th>
                <th scope="col">id_kategori</th>
                <th scope="col">komplain</th>
                <th scope="col">path_bukti</th>
                <th scope="col">status_utama_komplain</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach($komplain as $value)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$value->id_layanan}}</td>
                <td>{{$value->id_user}}</td>
                <td>{{$value->id_kategori}}</td>
                <td>{{$value->komplain}}</td>
                <td>{{$value->path_bukti}}</td>
                <td>{{$value->status_utama_komplain}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
