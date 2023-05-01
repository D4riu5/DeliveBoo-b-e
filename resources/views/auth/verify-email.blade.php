@extends('layouts.app')

@section('content')
<div class="container verifyMailMargin">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-bg-dark">
                <div class="card-header fw-bold">{{ __('Verifica il tuo indirizzo email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('È stata inviata una nuova email di verifica al tuo indirizzo email.') }}
                    </div>
                    @endif

                    {{ __('Prima di procedere, controlla la tua casella di posta per il link di verifica.') }}
                    <br>
                    {{ __('Se non hai ricevuto l\'email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button style="color:#ff4357;" type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clicca qui per richiederne un\'altra') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
