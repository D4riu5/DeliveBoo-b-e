@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12 d-flex flex-column align-items-center">
                <div class="d-flex flex-column">
                    <div>
                        <span class="fw-bold">
                            Voto:
                        </span>
                        <span class="ms-1">
                            {{ $order->rating }}/10 ⁂
                        </span>
                    </div>
                    <div>
                        <span class="fw-bold">
                            Codice ordine selezionato:
                        </span>
                        <span class="ms-1">
                            {{ $order->id }}
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
                </div>  

                <h4 class="my-2">
                    Lista prodotti:
                </h4>

                <ul class="my-2">
                    @foreach ($order->foods as $food)
                        <li>{{ $food->name }} - {{ $food->price }} €  x {{ $food->pivot->quantity }}</li>
                    @endforeach
                </ul>


                <a class="btn btn-danger my-5" class="{{ Route::currentRouteName() == 'admin.order.index' ? 'bg-secondary' : '' }}" href="{{route('admin.order.index')}}">
                    Torna su Miei Ordini
                </a>
            </div>
        </div>
    </div>
@endsection
