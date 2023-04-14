@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                @include('partials.success')

                <h1>
                    {{ $food->name }}
                </h1>
                <div class="d-flex">
                    {{-- IMMAGINE --}}
                    <div class="col-8">
                        @if ($food->image)
                            <div class="foodShowphotoBox">
                                <img class="my-3" src="{{ asset('storage/' . $food->image) }}" style="height: 400px;"
                                    alt="food">
                            </div>
                        @endif
                    </div>
                    {{-- Descrizione prodotto  --}}
                    <div class="ps-4 col-4">
                        <h3 class="my-2">
                            Descrizione:
                        </h3>
                        <p>
                            {!! nl2br($food->description) !!}
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, inventore excepturi quae minus
                            voluptatibus reprehenderit aut neque accusamus doloremque, maxime placeat adipisci accusantium
                            aliquid quibusdam. Dignissimos ea soluta repudiandae voluptatibus! Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Voluptatum, accusamus vero repudiandae voluptates voluptas quo nam
                            non a et veritatis enim porro iure ad saepe! Iure ad harum excepturi quia. Lorem ipsum dolor,
                            sit amet consectetur adipisicing elit. Quaerat qui laudantium eveniet est dolorum sequi? Veniam
                            deserunt repudiandae necessitatibus excepturi ex, sed doloribus porro minus adipisci soluta.
                            Placeat, nostrum et!
                            lorem
                        </p>
                    </div>
                </div>

                {{-- CONTENITORE INFO PER LO SHOW - FLEXATO --}}
                <div class="d-flex">
                    {{-- BLOCCO INFO A SINISTRA --}}
                    <div>
                        {{-- Dettaglio Portata --}}
                        <div>
                            <h3 class="my-2">
                                Portata:
                            </h3>
                            <p>
                                {{ $food->course }}
                            </p>
                        </div>
                        {{-- Status disponibilità --}}
                        <div>
                            <h3 class="my-2">
                                Disponibile?
                            </h3>
                            <p>
                                {{ $food->is_available ? 'Si' : 'No' }}
                            </p>
                        </div>
                        {{-- Prezzo prodotto  --}}
                        <div>
                            <h3 class="my-2">
                                Prezzo:
                            </h3>
                            <p>
                                {{ $food->price }} €
                            </p>
                        </div>
                    </div>

                    {{-- BLOCCO INFO A SINISTRA --}}
                    <div class="rightBox pt-1">

                        {{-- INFO PICCANTE  --}}
                        <div>
                            <h3 class="my-2">
                                E' un prodotto piccante?
                            </h3>
                            <p>
                                @foreach ($food_details as $food)
                                    {{ $food->spicy ? 'Si' : 'No' }}
                                @endforeach
                            </p>
                        </div>

                        {{-- INFO GLUTINE  --}}
                        <div>
                            <h3 class="my-2">
                                Contiene Glutine?
                            </h3>
                            <p>
                                @foreach ($food_details as $food)
                                    {{ $food->glute_free ? 'Si' : 'No' }}
                                @endforeach
                            </p>
                        </div>

                        {{-- CALORIE CONTENUTE  --}}
                        <div>
                            <h3 class="my-2">
                                Quante calorie contiene?
                            </h3>
                            @foreach ($food_details as $food)
                                <p>
                                    {{ $food->kcal ? number_format($food->kcal) . ' kcal' : 'Non specificato' }}
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- PULSANTE RITORNO A MIEI PRODOTTI  --}}
                <div class="pt-2">
                    <a class="mt-2 btn btn-danger my-3"
                        class="{{ Route::currentRouteName() == 'admin.food.index' ? 'bg-secondary' : '' }}"
                        href="{{ route('admin.food.index') }}">
                        <h6>
                            Torna sul mio menù
                        </h6>
                    </a>
                    <a href="{{ route('admin.food.edit', $food->id) }}" class="mt-2 btn btn-warning my-3">
                        <h6>
                            Modifica piatto
                        </h6>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
@endsection
