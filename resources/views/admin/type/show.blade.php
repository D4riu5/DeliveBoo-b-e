@extends('layouts.admin')

@section('content')
    <div class="container-xxl mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12 d-flex flex-column align-items-center">
                <div class="text-center d-flex mb-3">
                    <h1>
                        Cucina: {{ $type->name }}
                    </h1>
                </div>
                <div class="mb-5 text-center">
                    {{ $type->description }}
                </div>
                <div class="container-xxl">
                    <img class="img-fluid imgBorder" src="{{ asset("storage/" . $type->image) }}">
                </div>
                <a class="btn btn-danger my-5" class="{{ Route::currentRouteName() == 'admin.type.index' ? 'bg-secondary' : '' }}" href="{{route('admin.type.index')}}">
                    Torna su altre tipologie
                </a>
            </div>
        </div>
    </div>
@endsection
