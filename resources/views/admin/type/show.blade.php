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
                <div class="boxPhoto ">
                    <img src="{{ asset("storage/" . $type->image) }}">
                </div>
                <a class="btn btn-danger my-3" class="{{ Route::currentRouteName() == 'admin.type.index' ? 'bg-secondary' : '' }}" href="{{route('admin.type.index')}}">
                    Torna su altre tipologie
                </a>
            </div>
        </div>
    </div>
@endsection