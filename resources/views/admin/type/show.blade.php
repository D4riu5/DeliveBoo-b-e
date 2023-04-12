@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="mb-3">
                    Cucina: {{ $type->name }}
                </h1>
                <div>
                    Descrizione cucina:
                </div>
                <div class="my-2">
                    {{ $type->description }}
                </div>
            </div>
        </div>
    </div>
@endsection
