@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12 d-flex flex-column align-items-center">
                <div class="text-center d-flex">
                    <h2>
                        Codice ordine selezionato: {{ $order->id }}
                    </h2>
                </div>
                <div class="my-3 text-center">
                    <h2>
                        Voto: {{ $order->rating }}/10 ⁂
                    </h2>
                </div>
                <div class="my-3 text-center">
                    <h2>
                        Status ordine: {{ $order->status }}
                    </h2>
                </div>
                <a class="btn btn-danger my-3" class="{{ Route::currentRouteName() == 'admin.order.index' ? 'bg-secondary' : '' }}" href="{{route('admin.order.index')}}">
                    Torna su Miei Ordini
                </a>
            </div>
        </div>
    </div>
@endsection
