@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        {{-- PRIMA TABELLA: PROOPRIETARIO NAME - SURNAME - PARTITA IVA --}}
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-4" scope="col-4">Nome Proprietario</th>
                            <th class="col-4" scope="col-4">Cognome Proprietario</th>
                            <th class="col-4" scope="col-4">Partita IVA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr scope="row">
                            <td>
                                <div>
                                    {{ $user->name }}
                                </div>
                            </td>
                            <td>
                                <div>
                                    {{ $user->surname }}
                                </div>
                            </td>
                            <td>
                                <div>
                                    {{ $user->restaurant->PIVA }}
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- SECONDA TABELLA: NOME ATTIVITA' - INDIRIZZO - SFOGLIA MENU --}}
        <div class="row justify-content-evenly">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-4" scope="col-4">Nome attività</th>
                            <th class="col-4" scope="col-4">Indirizzo attività</th>
                            <th class="col-4" scope="col-4">Sfoglia Menù</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr scope="row">
                            <td>
                                <div>
                                    {{ $user->restaurant->name }}
                                </div>
                            </td>
                            <td>
                                <div>
                                    {{ $user->restaurant->address }}
                                </div>
                            </td>
                            <td>
                                <a class="text-decoration-none " href="{{ route('admin.food.index') }}">
                                    Vai al mio Menù
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- NOME ATTIVITA' + TIPOLOGIE + FOTO ATTIVITA' --}}
        <div class="row justify-content-evenly">
            <div>
                <h2 class="text-center mt-3">
                    {{ $user->restaurant->name }}
                </h2>
                <div class="text-center">
                    <p>
                        E' un attività che rientra nelle seguenti tipologie di cucina:
                    </p>
                    @foreach ($user->restaurant->types as $type)
                        <a class="m-2 d-inline-block" href="{{ route('admin.type.show', $type->id) }}">
                            <h4 class="btn btn-warning">
                                {{ $type->name }}
                            </h4>
                        </a>
                    @endforeach
                    <hr>
                </div>
                @if ($restaurant->image)
                    <div>
                        <h1 class="text-center my-4">
                            Foto attività
                        </h1>
                    </div>
                    <div class="d-flex justify-content-center py-2">
                        <div class="boxPhoto">
                            <img src="{{ asset('storage/' . $restaurant->image) }}" alt="Myrestaurant">
                        </div>
                    </div>

                @else

                    <div>
                        <h3 class="text-center my-4">
                            Immagine non caricata
                        </h3>
                    </div>

                @endif
                
            </div>
            <div class="text-center my-4">
                <a href="{{ route('admin.restaurant.edit', $restaurant->id) }}" class="btn btn-info">
                    Modifica il tuo ristorante <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </div>
        </div>
    </div>
    </div>
@endsection
