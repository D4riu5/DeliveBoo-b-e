@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12 d-flex flex-column align-items-center">
                <div class="text-center d-flex">
                    <h1>
                        Cucina: {{ $type->name }}
                    </h1>
                </div>
                <div class="my-3 text-center">
                    {{ $type->description }}
                </div>
                <div class="boxPhoto">
                    <img src="{{ asset("storage/" . $type->image) }}">
                </div>
                <a class="btn btn-danger my-3" class="{{ Route::currentRouteName() == 'admin.type.index' ? 'bg-secondary' : '' }}" href="{{route('admin.type.index')}}">
                    Torna su altre tipologie
                </a>
            </div>
        </div>
    </div>
    <div>
        <div class="boxPhoto">
            <img src="{{ asset("storage/logo/1.svg") }}">
        </div>
        <div class="boxPhoto">
            <img src="{{ asset("storage/logo/2.svg") }}">
        </div>
        <div class="boxPhoto">
            <img src="{{ asset("storage/logo/3.svg") }}">
        </div>
        <div class="boxPhoto">
            <img src="{{ asset("storage/logo/4.svg") }}">
        </div>
        <div class="boxPhoto">
            <img src="{{ asset("storage/logo/5.svg") }}">
        </div>
    </div>
@endsection
