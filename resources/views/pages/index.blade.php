@extends('layouts/app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>Ovo je naša aplikacija.</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Prijavi se</a><a class="btn btn-success btn-lg" href="/register" role="button">Registriraj se</a></p>
    </div>
@endsection