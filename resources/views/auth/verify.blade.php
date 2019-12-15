@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Potvrdite Vaš e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Novi link za potvrdu Vam je poslan na e-mail.') }}
                        </div>
                    @endif

                    {{ __('Prije nego što nastavite provjerite Vaš email.') }}
                    {{ __('Ukoliko niste primili ovaj e-mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('pritisnite ovdje da zatražite novi') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
