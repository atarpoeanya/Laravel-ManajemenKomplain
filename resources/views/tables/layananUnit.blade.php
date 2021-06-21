@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Layanan</th>
                <th scope="col">Unit</th>
                <th scope="col">Active</th>
            </tr>
        </thead>
        <tbody>
        @foreach($layananunit as $value)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>

                @foreach($reflayanan as $value1)
                @if($value1->id == $value->id)
                <td>{{$value1->nama}}</td>
                @endif
                @endforeach

                @foreach($refunit as $value2)
                @if($value2->id == $value->id)
                <td>{{$value2->nama}}</td>
                @endif
                @endforeach

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
    <a href="/layananunit/create" class="btn btn-secondary">Insert</a>
</div>
@endsection
