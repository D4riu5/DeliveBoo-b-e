@extends('layouts.admin')

@section('content')
    <div class="container-xxl mt-4">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-evenly align-items-start">
                <div class="d-flex flex-column">
                    <h4 class="my-2 ms-4">
                        Riepilogo ordine
                    </h4>

                    <ul class="my-2">
                        @foreach ($order->foods as $food)
                            <li>{{ $food->name }} - {{ $food->price }} € x {{ $food->pivot->quantity }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="d-flex flex-column">
                    <h4 class="my-2 ms-1">
                        Informazioni contatto
                    </h4>
                    <div>
                        <span class="fw-bold">
                            Recapito telefonico:
                        </span>
                        <span class="ms-1">
                            {{ $order->delivery_contact }}
                        </span>
                    </div>
                    <div>
                        <span class="fw-bold">
                            Indirizzo consegna:
                        </span>
                        <span class="ms-1">
                            {{ $order->delivery_address }}
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <h4 class="my-2 ms-1">
                        Specifiche ordine:
                    </h4>
                    <div>
                        <div>
                            <span class="fw-bold">
                                Codice ordine selezionato
                            </span>
                            <span class="ms-1">
                                {{ $order->id }}
                            </span>
                        </div>
                        <div>
                            <span class="fw-bold">
                                Data:
                            </span>
                            <span class="ms-1">
                                {{ $order->order_date }}
                            </span>
                        </div>
                        <div>
                            <span class="fw-bold">
                                Status ordine:
                            </span>
                            <span class="ms-1">
                                {{ $order->status }}
                            </span>
                        </div>
                        @if ($order->rating)
                            <div>
                                <span class="fw-bold">
                                    Voto:
                                </span>
                                <span class="ms-1 text-warning">
                                    @php
                                        $filled_stars = $order->rating; // show the rating number of filled stars
                                        $empty_stars = 10 - $filled_stars; // show the remaining unfilled stars
                                    @endphp
                                    @for ($i = 1; $i <= $filled_stars; $i++)
                                        ★
                                    @endfor
                                    @for ($i = 1; $i <= $empty_stars; $i++)
                                        ☆
                                    @endfor
                                </span>
                                <span> ({{ $order->rating }}/10)</span>
                            </div>
                        @else
                            <div>
                                <span class="fw-bold text-warning">
                                    Ordine senza voto
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-danger my-5"
                    class="{{ Route::currentRouteName() == 'admin.order.index' ? 'bg-secondary' : '' }}"
                    href="{{ route('admin.order.index') }}">
                    Torna su Miei Ordini
                </a>
            </div>

        </div>
    </div>
@endsection
