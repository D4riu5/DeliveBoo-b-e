@extends('layouts.admin')

@section('content')
    <div class="bigScreen">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center mb-4">
                <div class="col">
                    @include('partials.success')
                    {{-- NUOVO NOME PER IL RISTORANTE --}}
                    <h2 class="text-center mb-4 restaName">
                        {{ $restaurant->name }}
                    </h2>
                    {{-- IMMAGINE MODIFICATA SE PRESENTE --}}
                    @if ($restaurant->image)
                        <div class=" d-flex justify-content-start mb-1">
                            <div class="showResta">
                                <img src="{{ asset('storage/' . $restaurant->image) }}" alt="{{$restaurant->name}}">
                            </div>
                            {{-- INDIRIZZO MODIFICATO --}}
                            <div class="mx-4">
                                <div class="mt-3">
                                    <h3 class="my-2">
                                        Indirizzo attività:
                                    </h3>
                                    <p>
                                        {!! nl2br($restaurant->address) !!}
                                    </p>
                                </div>
                                {{-- PARTITA IVA --}}
                                <div>
                                    <h3 class="my-2">
                                        Partita IVA:
                                    </h3>
                                    <p>
                                        {{ $restaurant->PIVA }}
                                    </p>
                                </div>
                                {{-- PREZZO SPEDIZIONE --}}
                                <div>
                                    <h3 class="my-2">
                                        Prezzo Spedizione:
                                    </h3>
                                    <p>
                                        €{{$restaurant->prezzo_spedizione}}
                                    </p>
                                </div>
                                {{-- TYPES --}}
                                <div>
                                    <h3 class="my-2">
                                        Types:
                                    </h3>
                                    <p>
                                        @foreach($restaurant->types as $type)
                                            {{$type->name}} @if(!$loop->last), @endif
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                    @else
                        {{-- INDIRIZZO MODIFICATO --}}
                        <div class="col-12 text-center">
                            <h3 class="my-2">
                                Indirizzo attività:
                            </h3>
                            <p>
                                {!! nl2br($restaurant->address) !!}
                            </p>
                        </div>
                        {{-- PARTITA IVA --}}
                        <div>
                            <h3 class="my-2 text-center">
                                Partita IVA:
                            </h3>
                            <p class="text-center">
                                {{ $restaurant->PIVA }}
                            </p>
                        </div>
                    @endif
                </div>

                {{-- PULSANTE RITORNO ALLA DASHBOARD  --}}
                <div class="pt-5 d-flex justify-content-center">
                    <button class="btn btn-warning mx-1">
                        <a href="{{ route('admin.restaurant.edit', $restaurant->id) }}"
                            class="link-dark text-decoration-none">
                            Modifica dati attività
                        </a>
                    </button>
                    <button class="btn btn-danger mx-2">
                        <a href="{{ route('admin.dashboard') }}" class="link-light text-decoration-none"> Torna indietro
                        </a>
                    </button>
                </div>

            </div>
        </div>
    </div>
    <div class="smallScreen">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center mb-4">
                <div class="col">
                    @include('partials.success')
                    {{-- NUOVO NOME PER IL RISTORANTE --}}
                    <h1 class="text-center mb-4 restaurantName">
                        {{ $restaurant->name }}
                    </h1>
                    {{-- IMMAGINE MODIFICATA SE PRESENTE --}}
                    @if ($restaurant->image)
                        <div class=" d-flex justify-content-start mb-2">
                            <div class="img320">
                                <img src="{{$restaurant->image}}" alt="{{$restaurant->name}}">
                            </div>
                            {{-- INDIRIZZO MODIFICATO --}}
                        </div>
                    @else
                        <div class=" d-flex justify-content-start mb-2">
                            <div class="img320">
                                <img src="{{$restaurant->image}}" alt="{{$restaurant->name}}">
                            </div>
                            {{-- INDIRIZZO MODIFICATO --}}
                        </div>
                    @endif
                    {{-- INDIRIZZO MODIFICATO --}}
                    <div class="col-12 text-center">
                        <h3 class="my-2">
                            Indirizzo attività:
                        </h3>
                        <p>
                            {!! nl2br($restaurant->address) !!}
                        </p>
                    </div>
                    {{-- PARTITA IVA --}}
                    <div>
                        <h3 class="my-2 text-center">
                            Partita IVA:
                        </h3>
                        <p class="text-center">
                            {{ $restaurant->PIVA }}
                        </p>
                    </div>
                    {{-- PREZZO SPEDIZIONE --}}
                    <div>
                        <h3 class="my-2 text-center">
                            Prezzo Spedizione:
                        </h3>
                        <p class="text-center">
                            €{{$restaurant->prezzo_spedizione}}
                        </p>
                    </div>
                    {{-- TYPES --}}
                    <div>
                        <h3 class="my-2 text-center">
                            Types:
                        </h3>
                        <p class="text-center">
                            @foreach($restaurant->types as $type)
                                {{$type->name}} @if(!$loop->last), @endif
                            @endforeach
                        </p>
                    </div>
                </div>

                {{-- PULSANTE RITORNO ALLA DASHBOARD  --}}
                <div class="d-flex justify-content-center">
                    <div class="px-1">
                        <button class="btn btn-warning px-1 mt-2 my-3">
                            <a href="{{ route('admin.restaurant.edit', $restaurant->id) }}"
                                class="link-light text-decoration-none">
                                Modifica
                            </a>
                        </button>
                    </div>
                    <div class="px-1">
                        <button class="btn btn-danger px-1 mt-2 my-3">
                            <a href="{{ route('admin.dashboard') }}" class="link-light text-decoration-none"> Torna indietro
                            </a>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
