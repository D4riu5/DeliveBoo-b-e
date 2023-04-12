@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- VERSION 1 --}}
                {{-- <h3>
                    Nome del mio Ristorante: {{ $restaurant->name }}
                </h3>
                <h4>
                    Address del mio Ristorante: {{ $restaurant->Address }}
                </h4>
                <h4>
                    nome propietario {{ $user->name . ' ' . $user->surname }}
                </h4>
                <h4>
                    PIVA {{ $user->name . ' ' . $restaurant->PIVA }}
                </h4> --}}
                {{-- VERSION 2 --}}
                <h3>
                    Nome del mio Ristorante: {{ $user->restaurant->name }}
                </h3>
                <h4>
                    Address del mio Ristorante: {{ $user->restaurant->address }}
                </h4>
                <h4>
                    nome propietario {{ $user->name . ' ' . $user->surname }}
                </h4>
                <h4>
                    PIVA {{ $user->name . ' ' . $user->restaurant->PIVA }}
                </h4>
            </div>
        </div>
    </div>
@endsection
