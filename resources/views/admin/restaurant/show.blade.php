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
            <div class="text-center">
                <a class="btn btn-danger pt-2"
                    class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : '' }}"
                    href="{{ route('admin.dashboard') }}">
                    <h6>
                        Torna indietro
                    </h6>
                </a>
                <a href="{{ route('admin.restaurant.edit', $restaurant->id) }}" class="py- btn btn-warning">
                    <h6>
                        Modifica dati attività
                    </h6>
                </a>
            </div>

        </div>
    </div>
    </div>
@endsection
