@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                @include('partials.success')
                {{-- NUOVO NOME PER IL RISTORANTE --}}
                <h2 class="text-center mb-4">
                    {{ $restaurant->name }}
                </h2>
                {{-- IMMAGINE MODIFICATA SE PRESENTE --}}
                @if ($restaurant->image)
                    <div class=" d-flex justify-content-between mb-1">
                        <div class="col-8">
                            <div class="photoBox">
                                <img class="my-3" src="{{ asset('storage/' . $restaurant->image) }}" style="height: 400px;"
                                    alt="restaurant">
                            </div>
                        </div>
                        {{-- INDIRIZZO MODIFICATO --}}
                        <div class="col-4 mx-4">
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
            <div class="pt-2 text-center">
                <!--
                <a class="mt-2 btn btn-danger my-3"
                    class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : '' }}"
                    href="{{ route('admin.dashboard') }}">
                    <h6>
                        Torna indietro
                    </h6>
                </a>
            -->
                <button class="btn btn-danger mt-2 my-3">
                    <a href="{{ route('admin.dashboard') }}" class="link-light text-decoration-none"> Torna indietro
                    </a>
                </button>
                <!--
                <a href="{{ route('admin.restaurant.edit', $restaurant->id) }}" class="mt-2 btn btn-warning my-3">
                    <h6>
                        Modifica dati attività
                    </h6>
                </a>
            -->
                <button class="btn btn-warning mt-2 my-3">
                    <a href="{{ route('admin.restaurant.edit', $restaurant->id) }}" class="link-light text-decoration-none"> Modifica dati attività
                    </a>
                </button>
            </div>

        </div>
    </div>
    </div>
@endsection
