@extends('layouts.app')
@if(checkPermission(['admin']))
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
                <th scope="col">Judul</th>
                <th scope="col">Status komplain</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach($komplain as $value)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                @foreach($reflayanan as $value1)
                @if($value1->id == $value->id)
                <td>{{$value1->nama}}</td>
                @endif
                @endforeach
                
                <td>{{$value->id_user}}</td>

                

                <td>{{$value->id_kategori}}</td>

                <td>{{$value->komplain}}</td>
                <td>{{$value->path_bukti}}</td>
                <td>{{$value->status_utama_komplain}}</td>                
            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- <a href="{{ url('/home') }}" class="btn bg-success my-3">Back</a> -->
    <a href="/komplainkomentar/create" class="btn btn-secondary">Jawab Masalah</a>
</div>
@endsection
@endif
