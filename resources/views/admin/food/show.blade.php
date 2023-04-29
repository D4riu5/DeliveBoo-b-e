@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center ">
            <div class="col">
                @include('partials.success')
                <div class="bigScreen">
                    <h1 class="foodTitle text-center mb-4">
                        {{ $food->name }}
                    </h1>
                    <div class="col-12 ps-3 my-4 d-flex justify-content-center">
                        <span class="mx-2">
                            Descrizione:
                        </span>
                        <span>
                            {!! nl2br($food->description) !!}
                        </span>
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        {{-- IMMAGINE --}}
                        <div class="col-auto">
                            @if ($food->image != null)
                                <div class="container-sm">
                                    <img class="img-fluid imgBorder" src="{{ asset('storage/' . $food->image) }}" alt="food">
                                </div>
                            @else
                                <div class="container-xl">
                                    <img class="img-fluid imgBorder" src="{{ asset('storage/placeholder/1.jpg') }}" style="height: 400px;"
                                        alt="placeholder">
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- CONTENITORE INFO PER LO SHOW - FLEXATO --}}
                    <div class="d-flex justify-content-center">
                        <div class="d-flex flex-column mb-5">
                            {{-- BLOCCO INFO A SINISTRA --}}
                            {{-- Dettaglio Portata --}}
                            <div>
                                <span class="fw-bold">
                                    Portata:
                                </span>
                                <span>
                                    {{ $food->course }}
                                </span>
                            </div>
                            {{-- Status disponibilità --}}
                            <div class="my-4">
                                <span class="fw-bold">
                                    Disponibile?
                                </span>
                                <span>
                                    {{ $food->is_available ? 'Si' : 'No' }}
                                </span>
                            </div>
                            {{-- Prezzo prodotto  --}}
                            <div>
                                <span class="fw-bold">
                                    Prezzo:
                                </span>
                                <span>
                                    {{ $food->price }} €
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-column ms-5">
                            <div>
                                <span class="fw-bold">
                                    E' un prodotto piccante?
                                </span>
                                <span>
                                    @if ($food->food_detail->spicy !== null)
                                        @if ($food->food_detail->spicy == 1)
                                            <span>Si</span>
                                        @elseif ($food->food_detail->spicy == 0)
                                            <span>No</span>
                                        @endif
                                    @else
                                        <span>Non specificato</span>
                                    @endif
                                </span>
                            </div>
                            {{-- Status disponibilità --}}
                            <div class="my-4">
                                <span class="fw-bold">
                                    Contiene Glutine?
                                </span>
                                <span>
                                    @if ($food->food_detail->gluten_free !== null)
                                        @if ($food->food_detail->gluten_free == 1)
                                            <span>Si</span>
                                        @elseif ($food->food_detail->gluten_free == 0)
                                            <span>No</span>
                                        @endif
                                    @else
                                        <span>Non specificato</span>
                                    @endif
                                </span>
                            </div>
                            {{-- Prezzo prodotto  --}}
                            <div>
                                <span class="fw-bold">
                                    Quante calorie contiene?
                                </span>
                                <span>
                                    @if ($food->food_detail && $food->food_detail->kcal !== null)
                                        {{ $food->food_detail->kcal . ' kcal' }}
                                    @else
                                        <span>
                                            Non specificato
                                        </span>
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                    {{-- PULSANTE RITORNO A MIEI PRODOTTI  --}}
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-danger mx-4 my-4"
                            class="{{ Route::currentRouteName() == 'admin.food.index' ? 'bg-secondary' : '' }}"
                            href="{{ route('admin.food.index') }}">
                            Torna sul menù
                        </a>
                        <a href="{{ route('admin.food.edit', $food->id) }}" class="btn btn-warning mx-4 my-4">
                            Modifica piatto
                        </a>
                    </div>

                </div>
                <div class="smallScreen">
                    <h3 class="text-center restaurantName mb-4">
                        {{ $food->name }}
                    </h3>
                    <div class="d-flex ">
                        {{-- IMMAGINE --}}
                        <div class="col-1">
                            @if ($food->image != null)
                                <div class="img320 mb-4">
                                    <img src="{{ asset('storage/' . $food->image) }}" alt="food">
                                </div>
                            @else
                                <div class="img320placeholder">
                                    <img src="{{ asset('storage/placeholder/2.jpg') }}" alt="placeholder">
                                </div>
                            @endif
                        </div>
                    </div>
                    {{-- Descrizione prodotto  --}}
                    <div class="col-12">
                        <h4>
                            Descrizione:
                        </h4>
                        <p>
                            {!! nl2br($food->description) !!}
                        </p>
                    </div>
                    <div class="col-12">
                        <h4 class="my-1">
                            Portata:
                        </h4>
                        <p>
                            {{ $food->course }}
                        </p>
                    </div>
                    <div class="col-12">
                        <h4 class="my-1">
                            Disponibile?:
                        </h4>
                        <p>
                            {{ $food->is_available ? 'Si' : 'No' }}
                        </p>
                    </div>
                    <div class="col-12">
                        <h4 class="my-1">
                            Prezzo:
                        </h4>
                        <p>
                            {{ $food->price }} €
                        </p>
                    </div>
                    <div class="col-12">
                        <h4 class="my-1">
                            E' piccante?
                        </h4>
                        <p>
                            @if ($food->food_detail->spicy !== null)
                                @if ($food->food_detail->spicy == 1)
                                    <p>Si</p>
                                @elseif ($food->food_detail->spicy == 0)
                                    <p>No</p>
                                @endif
                            @else
                                <p>Non specificato</p>
                            @endif
                        </p>
                    </div>
                    <div class="col-12">
                        <h4 class="my-1">
                            Contiene glutine?
                        </h4>
                        <p>
                            @if ($food->food_detail->gluten_free !== null)
                                @if ($food->food_detail->gluten_free == 1)
                                    <p>Si</p>
                                @elseif ($food->food_detail->gluten_free == 0)
                                    <p>No</p>
                                @endif
                            @else
                                <p>Non specificato</p>
                            @endif
                        </p>
                    </div>
                    <div class="col-12">
                        <h4 class="my-1">
                            Quante calorie contiene?
                        </h4>
                        <p>
                            @if ($food->food_detail && $food->food_detail->kcal !== null)
                                {{ $food->food_detail->kcal . ' kcal' }}
                            @else
                                <p>
                                    Non specificato
                                </p>
                            @endif
                        </p>
                    </div>
                    <div class="d-flex justify-content-center responsive375">
                        <div class="ms-1">
                            <a class="mt-2 btn btn-danger fontResponsive"
                                class="{{ Route::currentRouteName() == 'admin.food.index' ? 'bg-secondary' : '' }}"
                                href="{{ route('admin.food.index') }}">
                                Torna sul menù
                            </a>
                        </div>
                        <div class="ms-1">
                            <a href="{{ route('admin.food.edit', $food->id) }}"
                                class="mt-2 btn btn-warning fontResponsive">
                                Modifica patto
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
