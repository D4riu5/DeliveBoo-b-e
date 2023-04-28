@extends('layouts.admin')
@section('content')
    {{-- SE LO SCHERMO E' GRANDE -> DISPLAY BLOCK --}}
    <div class="container-fluid mt-4 bigScreen">
        <div class="container-fluid marginPerResponsive">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-4 text-white" scope="col-4">Nome Proprietario</th>
                                <th class="col-4 text-white" scope="col-4">Cognome Proprietario</th>
                                <th class="col-4 text-white" scope="col-4">Partita IVA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr scope="row">
                                <td>
                                    <div class="text-white">
                                        {{ $user->name }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-white">
                                        {{ $user->surname }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-white">
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
                                <th class="col-3 text-white" scope="col-3">Nome attività</th>
                                <th class="col-3 text-white" scope="col-3">Indirizzo attività</th>
                                <th class="col-3 text-white" scope="col-3">Prezzo Spedizione</th>
                                <th class="col-3 text-white" scope="col-3">Sfoglia Menù</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr scope="row">
                                <td>
                                    <div class="text-white">
                                        {{ $user->restaurant->name }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-white">
                                        {{ $user->restaurant->address }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-white">
                                        {{ $user->restaurant->prezzo_spedizione }} €
                                    </div>
                                </td>
                                <td>
                                    <a style="color:rgb(250, 4, 86)" class="text-decoration-none"
                                        href="{{ route('admin.food.index') }}">
                                        Vai al mio Menù
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- SE LO SCHERMO E' PICCOLO -> DISPLAY BLOCK --}}
    <div class="smallScreen">
        <div class="container dashboardResponsive">
            <div class="row text ">
                <div class="col-md-12">
                    <div class="mb-2">
                        <span class="fw-bold ">
                            Nome proprietari:
                        </span>
                        <span>
                            {{ $user->name }}
                        </span>
                    </div>
                    <div class="mb-2">
                        <span class="fw-bold">
                            Cognome proprietario:
                        </span>
                        <span>
                            {{ $user->surname }}
                        </span>
                    </div>
                    <div class="mb-2">
                        <span class="fw-bold">
                            Partita IVA:
                        </span>
                        <span>
                            {{ $user->restaurant->PIVA }}
                        </span>
                    </div>
                    <div class="mb-2">
                        <span class="fw-bold">
                            Nome attività:
                        </span>
                        <span>
                            {{ $user->restaurant->name }}
                        </span>
                    </div>
                    <div class="mb-2">
                        <span class="fw-bold">
                            Indirizzo attività:
                        </span>
                        <span>
                            {{ $user->restaurant->address }}
                        </span>
                    </div>
                    <div class="mb-2">
                        <span class="fw-bold">
                            Prezzo Spedizione:
                        </span>
                        <span>
                            {{ $user->restaurant->prezzo_spedizione }} €
                        </span>
                    </div>
                    <div class="mb-2">
                        <span class="fw-bold">
                            Sfoglia Menù:
                        </span>
                        <span>
                            <a style="color:rgb(250, 4, 86)" class="text-decoration-none "
                                href="{{ route('admin.food.index') }}">
                                Vai al mio Menù
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- NOME ATTIVITA' + TIPOLOGIE + FOTO ATTIVITA' --}}
    <div class="row justify-content-evenly">
        <div>
            <h1 class="text-center mt-3 restaurantName">
                {{ $user->restaurant->name }}
            </h1>
            <div class="text-center">
                <p>
                    E' un attività che rientra nelle seguenti tipologie di cucina:
                </p>
                @foreach ($user->restaurant->types as $type)
                    <a class="m-2 d-inline-block" href="{{ route('admin.type.show', $type->id) }}">
                        <h4 class="btn btn-light">
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
                    <div class="queryContainer">
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
            <a href="{{ route('admin.restaurant.edit', $restaurant->id) }}" class="btn btn-danger">
                Modifica la tua attività <i class="fa-solid fa-pen-to-square"></i>
            </a>
        </div>
    </div>
    </div>
    </div>
@endsection
