@extends('layouts/app')

@section('content')
    <div class="jumbotron text-center">
        @guest    
            <h1>{{$title}}</h1>
            <p>Ovo je naša aplikacija.</p>
            {{-- <p><a class="btn btn-primary btn-lg" href="/login" role="button">Prijavi se</a><a class="btn btn-success btn-lg" href="/register" role="button">Registriraj se</a></p> --}}
        @else
            <h1>Dobrodošli, {{ Auth::user()->name }}!</h1>
        @endguest
    </div>
@endsection