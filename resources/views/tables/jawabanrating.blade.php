@extends('layouts.app')
@if(checkPermission(['admin']))
@section('content')
<div class="container">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id pertanyaan</th>
                <th scope="col">Id komplain</th>
                <th scope="col">Jawaban</th>
                <th scope="col">Is Active</th>

                
            </tr>
        </thead>
        <tbody>
        @foreach($komplain as $value)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                @foreach($pertanyaan as $value1)
                @if($value1->id == $value->id)
                <td>{{$value1->nama}}</td>
                @endif
                @endforeach

                <th scope="row">{{$loop->iteration}}</th>
                @foreach($komplain as $value1)
                @if($value1->id == $value->id)
                <td>{{$value1->nama}}</td>
                @endif
                @endforeach


                <td>{{$value->jawaban}}</td>
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
    <a href="/jawabanrating/create" class="btn btn-secondary">Insert</a>
</div>
@endsection
@endif
