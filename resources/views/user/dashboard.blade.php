@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome User') }}</div>

                <div class="py-4 card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>


        

</div>

<div class="d-flex flex-column mt-5   border border-dark align-items-center">
            <div class="card-header d-flex m-1 border-bottom border-dark justify-content-between" style="width:100%">
                <span class="m-1    ">Issue Tracker</span>
                <a href="formKomplain">
                <button type="button" class="btn btn-primary mb-1">Masukan Komplain</button>
                </a>
            </div>

            
            <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">komplain</th>
                <th scope="col">Layanan</th>
                <!-- <th scope="col">id_user</th> -->
                <th scope="col">Kategori</th>
                <th scope="col">status_utama_komplain</th>
                
            </tr>
        </thead>
        <tbody>
        

        @foreach($komplain as $value)
            @if($value->id_user == Auth::id())
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$value->path_bukti}}</td>
                <td>{{$value->komplain}}</td>
                @foreach($reflayanan as $value1)
                @if($value1->id == $value->id)
                <td>{{$value1->nama}}</td>
                @endif
                @endforeach
                <!-- <td>{{$value->id_user}}</td> -->
                
                @foreach($kategori as $value1)
                @if($value1->id == $value->id)
                <td>{{$value1->nama}}</td>
                @endif
                @endforeach
                
                <td>{{$value->status_utama_komplain}}</td>                
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>
            <!-- <span class="m-5">Tidak ada komplain</span> -->

</div>
@endsection