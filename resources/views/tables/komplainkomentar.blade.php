@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">id_komplain</th>
                <th scope="col">id_user_form</th>
                <th scope="col">id_user_to</th>
                <th scope="col">status_komplain</th>
                <th scope="col">tanggapan</th>
            </tr>
        </thead>
        <tbody>
        @foreach($komplainkomentar as $value)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                @foreach($id_komplain as $value1)
                @if($value1->id == $value->id)
                <td>{{$value1->nama}}</td>
                @endif
                @endforeach

                @foreach($id_user_form as $value1)
                @if($value1->id == $value->id)
                <td>{{$value1->nama}}</td>
                @endif
                @endforeach

                
                @foreach($id_user_to as $value1)
                @if($value1->id == $value->id)
                <td>{{$value1->nama}}</td>
                @endif
                @endforeach
                <td>{{$value->status_komplain}}</td>
                <td>{{$value->tanggapan}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ url('/home') }}" class="btn bg-success my-3">Back</a>
    <a href="/komplainkomentar/create" class="btn btn-secondary">Insert</a>
</div>
@endsection
