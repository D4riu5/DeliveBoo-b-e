@extends('layouts.app')
@section('content')

<div class="my-5 container formBody pb-3">
    <h2 class="fs-4 my-3 pt-3 profileColor text-center">
        {{ __('Modifica Profilo') }}
    </h2>
    <div class="card p-4 mb-4 bg-white shadow rounded-lg">

        @include('profile.partials.update-profile-information-form')

    </div>

    <div class="card p-4 mb-4 bg-white shadow rounded-lg">


        @include('profile.partials.update-password-form')

    </div>

    <div class="card p-4 mb-4 bg-white shadow rounded-lg">


        @include('profile.partials.delete-user-form')

    </div>
</div>

@endsection
