@extends('layouts.admin')

@section('content')
    <div class="bigScreen">
        <div class="container-xxl mt-4">
            <div class="row justify-content-center mb-4">
                <div class="col">
                    @include('partials.success')
                    {{-- NUOVO NOME PER IL RISTORANTE --}}
                    <h2 class="text-center mb-4 restaName">
                        {{ $restaurant->name }}
                    </h2>
                    {{-- IMMAGINE MODIFICATA SE PRESENTE --}}
                    <div class=" d-flex justify-content-center mb-1">
                        @if ($restaurant->image)
                            <div class="py-2">
                                <div class="container-sm d-flex justify-content-center">
                                    <img class="img-fluid imgBorder" src="{{ asset('storage/' . $restaurant->image) }}"
                                        alt="Myrestaurant">
                                </div>
                            </div>
                        @else
                            <div class="container-sm d-flex justify-content-center">
                                <img class="img-fluid imgBorder" src="{{ asset('storage/placeholder/1.jpg') }}"
                                    alt="Myrestaurant">
                            </div>
                        @endif
                    </div>
                    {{-- INDIRIZZO MODIFICATO --}}
                    <div class="d-flex justify-content-between mx-4">
                        <div class="mt-3">
                            <span class="fw-bold fs-6">
                                Indirizzo attività:
                            </span>
                            <span>
                                {!! nl2br($restaurant->address) !!}
                            </span>
                        </div>
                        {{-- PARTITA IVA --}}
                        <div class="mt-3">
                            <span class="fw-bold fs-6">
                                Codice partita IVA:
                            </span>
                            <span>
                                {{ $restaurant->PIVA }}
                            </span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mx-4">
                        <div class="mt-3">
                            <span class="fw-bold fs-6">
                                Prezzo Spedizione:
                            </span>
                            <span>
                                €{{ $restaurant->prezzo_spedizione }}
                            </span>
                        </div>
                        <div class="mt-3">
                            <span class="fw-bold fs-6">
                                Tipo di cucina:
                            </span>
                            <span>
                                @foreach ($restaurant->types as $type)
                                    <span>
                                        {{ $type->name }} @if (!$loop->last)
                                    </span>
                                @endif
                                @endforeach
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- PULSANTE RITORNO ALLA DASHBOARD  --}}
        <div class="pt-5 d-flex justify-content-center">
            <button class="btn btn-warning mx-1">
                <a href="{{ route('admin.restaurant.edit', $restaurant->id) }}" class="link-dark text-decoration-none">
                    Modifica dati attività
                </a>
            </button>
            <button class="btn btn-danger mx-2">
                <a href="{{ route('admin.dashboard') }}" class="link-light text-decoration-none"> Torna indietro
                </a>
            </button>
        </div>
    </div>
    <div class="smallScreen">
        <div class="container-xxl mt-4">
            <div class="row justify-content-center mb-4">
                <div class="col">
                    @include('partials.success')
                    {{-- NUOVO NOME PER IL RISTORANTE --}}
                    <h2 class="text-center mb-4 restaName">
                        {{ $restaurant->name }}
                    </h2>
                    {{-- IMMAGINE MODIFICATA SE PRESENTE --}}
                    <div class=" d-flex justify-content-center mb-1">
                        @if ($restaurant->image)
                            <div class="py-2">
                                <div class="container-sm d-flex justify-content-center">
                                    <img class="img-fluid imgBorder" src="{{ asset('storage/' . $restaurant->image) }}"
                                        alt="Myrestaurant">
                                </div>
                            </div>
                        @else
                            <div class="container-sm d-flex justify-content-center">
                                <img class="img-fluid imgBorder" src="{{ asset('storage/placeholder/1.jpg') }}"
                                    alt="Myrestaurant">
                            </div>
                        @endif
                    </div>
                    {{-- INDIRIZZO MODIFICATO --}}
                    <div class="d-flex flex-column align-items-center mx-4 fontsShoowRestaurant">
                        <div class="mt-3">
                            <span class="fw-bold fs-6">
                                Indirizzo attività:
                            </span>
                            <span>
                                {!! nl2br($restaurant->address) !!}
                            </span>
                        </div>
                        {{-- PARTITA IVA --}}
                        <div class="mt-3">
                            <span class="fw-bold fs-6">
                                Codice partita IVA:
                            </span>
                            <span>
                                {{ $restaurant->PIVA }}
                            </span>
                        </div>
                        <div class="mt-3">
                            <span class="fw-bold fs-6">
                                Prezzo Spedizione:
                            </span>
                            <span>
                                €{{ $restaurant->prezzo_spedizione }}
                            </span>
                        </div>
                        <div class="mt-3">
                            <span class="fw-bold fs-6">
                                Tipo di cucina:
                            </span>
                            <span>
                                @foreach ($restaurant->types as $type)
                                    <span>
                                        {{ $type->name }} @if (!$loop->last)
                                    </span>
                                @endif
                                @endforeach
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- PULSANTE RITORNO ALLA DASHBOARD  --}}
            <div class="pt-5 d-flex justify-content-center">
                <button class="btn btn-warning mx-1">
                    <a href="{{ route('admin.restaurant.edit', $restaurant->id) }}" class="link-dark text-decoration-none">
                        Modifica dati attività
                    </a>
                </button>
                <button class="btn btn-danger mx-2">
                    <a href="{{ route('admin.dashboard') }}" class="link-light text-decoration-none"> Torna indietro
                    </a>
                </button>
            </div>
        </div>
    @endsection
