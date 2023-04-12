@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>
                    Cucina: {{ $type->name }}
                </h1>
                <p>
                    Descrizione cucina: {{ $type->description }}
                </p>
            </div>
        </div>
    </div>
@endsection
