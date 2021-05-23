@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="py-4 card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

            </div>
                <div class="mt-2 card">
                    <div class="card-header">
                    {{_('Index')}}
                    </div>

                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h3><a href="/test1">test1</a></h3>
                                <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="/test1/create">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <h3><a href="/test2">test2</a></h3>
                                <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="/test2/create">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <h3><a href="http://">test</a></h3>
                                <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item"></li>
                            <li class="list-group-item"></li>
                            <li class="list-group-item"></li>
                            <li class="list-group-item"></li>
                            <li class="list-group-item"></li>
                            <li class="list-group-item"></li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
