@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Manajemen Komplain</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>

            body {
                font-family: 'Nunito', sans-serif;                
            }

 
            .jumbotron {
  background-image: url("https://images.unsplash.com/photo-1511467687858-23d96c32e4ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80");
  background-size: cover;
  background-attachment: fixed;
    }
        </style>
    </head>

    
    <div class="jumbotron">
    
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">Selamat datang pada sistem pengaduan kami.</p>
  <hr class="my-4">
  <p>Kepuasan anda adalah yang paling utama untuk kami.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
    </body>
</html>

@endsection
