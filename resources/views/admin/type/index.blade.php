@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-5">
                    <h2 class="fw-bold text-center mt-2">
                        Tipologie di cucina
                    </h2>
                </div>
                {{-- INIZIO CICLO PER STAMPA DI ELEMENTI IN VARIABILE $TYPES  --}}
                <div class="btn-group my-2 d-flex justify-content-evenly flex-wrap" role="group" aria-label="Basic mixed styles example">
                    @foreach ($types as $type)
                    <div class="d-flex flex-column align-items-center mb-3">
                        <div class="py-1">
                            <a class="btn btn-success mx-1" href="{{ route('admin.type.show', $type->id) }}">
                                {{ $type->name }}
                            </a>
                        </div>
                        <div class="typePhotoBox mx-3">
                            <img src="{{ asset("storage/" . $type->image) }}">
                        </div>
                    </div>
                    @endforeach
                    {{-- FINE CICLO PER STAMPA DI ELEMENTI IN VARIABILE $TYPES  --}}
                </div>
            </div>
        </div>
    @endsection
