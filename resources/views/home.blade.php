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
                    {{('Index')}}
                    </div>

                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h4><a href="/layanan">Layanan</a></h4>
                                <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="/layanan/create">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <h4><a href="/unit">Unit</a></h4>
                                <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="/unit/create">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <h4><a href="/layananunit">Layanan Unit</a></h4>
                                <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="/layananunit/create">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <h4><a href="/kategori">Kategori</a></h4>
                            <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <h4><a href="/komplain">Komplain</a></h4>
                            <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <h4><a href="/komplainkomentar">Komplain Komentar</a></h4>
                                <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="">insert</a>
                                </div>
                            </li>
                            
                            <li class="list-group-item">
                            <h4><a href="/komplainkomentar">Pertanyaan Rating</a></h4>
                                <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <h4><a href="/komplainkomentar">Jawaban Rating</a></h4>
                                <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <h4><a href="/komplainkomentar">Kontak</a></h4>
                                <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <h4><a href="/komplainkomentar">Jenis Kontak</a></h4>
                                <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <h4><a href="/komplainkomentar">Group</a></h4>
                                <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <h4><a href="/komplainkomentar">Group member</a></h4>
                                <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <h4><a href="/komplainkomentar">Broadcast</a></h4>
                                <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="">insert</a>
                                </div>
                            </li>
                            <li class="list-group-item">
                            <h4><a href="/komplainkomentar">User</a></h4>
                                <div class="container">
                                    <a href="http://">edit</a>
                                    <a href="">insert</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
