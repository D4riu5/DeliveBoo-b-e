@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                @include('partials.success')

                <h1 >
                    {{ $food->name }}
                </h1>
                <div class="d-flex">
                    {{-- IMMAGINE --}}
                    <div class="col-auto">
                        @if ($food->image != null)
                            <div class="photoBox">
                                <img src="{{ asset('storage/' . $food->image) }}"
                                    alt="food">
                            </div>
                        @else
                            <div class="placeholderBox">
                                <img src="{{ asset('storage/placeholder/22.png') }}"
                                    style="height: 400px;" alt="placeholder">
                            </div>
                        @endif
                    </div>
                    {{-- Descrizione prodotto  --}}
                    <div class="col-auto px-1 mt-1">
                        <h3 class="my-2">
                            Descrizione:
                        </h3>
                        <p>
                            {!! nl2br($food->description) !!}
                        </p>
                    </div>
                </div>

                {{-- CONTENITORE INFO PER LO SHOW - FLEXATO --}}
                <div class="d-flex">
                    {{-- BLOCCO INFO A SINISTRA --}}
                    <div>
                        {{-- Dettaglio Portata --}}
                        <div>
                            <h5 class="my-2">
                                Portata:
                            </h5>
                            <p>
                                {{ $food->course }}
                            </p>
                        </div>
                        {{-- Status disponibilità --}}
                        <div>
                            <h5 class="my-2">
                                Disponibile?
                            </h5>
                            <p>
                                {{ $food->is_available ? 'Si' : 'No' }}
                            </p>
                        </div>
                        {{-- Prezzo prodotto  --}}
                        <div>
                            <h5 class="my-2">
                                Prezzo:
                            </h5>
                            <p>
                                {{ $food->price }} €
                            </p>
                        </div>
                    </div>

                    {{-- BLOCCO INFO A SINISTRA --}}
                    <div class="rightBox pt-1">


                        {{-- INFO PICCANTE  --}}
                        <div>
                            <h5 class="my-2">
                                E' un prodotto piccante?
                            </h5>
                            @if ($food->food_detail->spicy !== null)
                                @if ($food->food_detail->spicy == 1)
                                    <p>Si</p>
                                @elseif ($food->food_detail->spicy == 0)
                                    <p>No</p>
                                @endif
                            @else
                                <p>Non specificato</p>
                            @endif
                        </div>



                        {{-- INFO GLUTINE  --}}
                        <div>
                            <h5 class="my-2">
                                Contiene Glutine?
                            </h5>
                            @if ($food->food_detail->gluten_free !== null)
                                @if ($food->food_detail->gluten_free == 1)
                                    <p>Si</p>
                                @elseif ($food->food_detail->gluten_free == 0)
                                    <p>No</p>
                                @endif
                            @else
                                <p>Non specificato</p>
                            @endif
                        </div>

                        {{-- CALORIE CONTENUTE  --}}
                        <div>
                            <h5 class="my-2">
                                Quante calorie contiene?
                            </h5>
                            @if ($food->food_detail && $food->food_detail->kcal !== null)
                                {{ $food->food_detail->kcal . ' kcal' }}
                            @else
                                <p>
                                    Non specificato
                                </p>
                            @endif
                        </div>

                    </div>
                </div>
                {{-- PULSANTE RITORNO A MIEI PRODOTTI  --}}
                <div class="">
                    <a class="btn btn-danger"
                        class="{{ Route::currentRouteName() == 'admin.food.index' ? 'bg-secondary' : '' }}"
                        href="{{ route('admin.food.index') }}">
                        <h6>
                            Torna sul mio menù
                        </h6>
                    </a>
                    <a href="{{ route('admin.food.edit', $food->id) }}" class="btn btn-warning">
                        <h6>
                            Modifica piatto
                        </h6>
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
