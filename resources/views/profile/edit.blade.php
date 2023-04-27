@extends('layouts.app')
@section('content')

<div class="container pb-3 formMargin">
    <h2 class="fs-4 mb-2 pb-2 text-center modificaProfilo">
        {{ __('Modifica Profilo') }}
    </h2>
    <div class="card p-4 mb-4 text-bg-dark shadow rounded-lg">

        @include('profile.partials.update-profile-information-form')

    </div>

    <div class="card p-4 mb-4 text-bg-dark shadow rounded-lg">


        @include('profile.partials.update-password-form')

    </div>

    <div class="card p-4 mb-4 text-bg-dark shadow rounded-lg">


        @include('profile.partials.delete-user-form')

    </div>
</div>

@endsection
