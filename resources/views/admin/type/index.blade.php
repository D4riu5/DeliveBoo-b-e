@extends('layouts.admin')

@section('content')
    <div class="bigScreen">
        <div class="container-xxl typeMargin">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-4">
                        <h2 class="fw-bold text-center typeResponsive titleColor">
                            Tipologie di cucina
                        </h2>
                    </div>
                    {{-- INIZIO CICLO PER STAMPA DI ELEMENTI IN VARIABILE $TYPES  --}}
                    <div class="btn-group d-flex justify-content-evenly flex-wrap" role="group"
                        aria-label="Basic mixed styles example">
                        @foreach ($types as $type)
                            <div class="typeContainer container-sm">
                                <div class="d-flex flex-column align-items-center mb-5">

                                    <div class="py-1 tagAbs tag425">
                                        <a class="tagStyle btn style425 mx-1"
                                            href="{{ route('admin.type.show', $type->id) }}">
                                            {{ $type->name }}
                                        </a>
                                    </div>
                                    <div class="container-sm">
                                        <a href="{{ route('admin.type.show', $type->id) }}">
                                            <img class="img-fluid imgBorder" src="{{ asset('storage/' . $type->image) }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- FINE CICLO PER STAMPA DI ELEMENTI IN VARIABILE $TYPES  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="smallScreen smallMarginCucine">
        <div class="container-xxl">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-4">
                        <h2 class="fw-bold text-center typeResponsive titleColor">
                            Tipologie di cucina
                        </h2>
                    </div>
                    {{-- INIZIO CICLO PER STAMPA DI ELEMENTI IN VARIABILE $TYPES  --}}
                    <div class="btn-group d-flex justify-content-evenly flex-wrap" role="group"
                        aria-label="Basic mixed styles example">
                        @foreach ($types as $type)
                            <div class="typeContainer container-sm">
                                <div class="d-flex flex-column align-items-center mb-5">

                                    <div class="py-1 tagTag">
                                        <a class="styleTag btn mx-1"
                                            href="{{ route('admin.type.show', $type->id) }}">
                                            {{ $type->name }}
                                        </a>
                                    </div>
                                    <div class="container">
                                        <a href="{{ route('admin.type.show', $type->id) }}">
                                            <img class="img-fluid imgBorder" src="{{ asset('storage/' . $type->image) }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- FINE CICLO PER STAMPA DI ELEMENTI IN VARIABILE $TYPES  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
