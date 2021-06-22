@extends('layouts.app')

            
@section('content')
<div class="container">
    <h3>
    403 Forbidden
    </h3>
    @if(checkPermission(['admin']))
    <a href="home">
    Go Back
    </a>
    @else
    <a href="\user">
    Go Back
    </a>
    @endif
</div>
@endsection




                    