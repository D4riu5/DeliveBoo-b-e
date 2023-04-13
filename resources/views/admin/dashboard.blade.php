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
                            <th class="col-4" scope="col-4">Nome ristorante</th>
                            <th class="col-4" scope="col-4">Indirizzo ristorante</th>
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
                                <a class="text-decoration-none " href="#">
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
                <div>
                    <h1 class="text-center">
                        Foto attività
                    </h1>
                </div>
            </div>
        </div>
    </div>
@endsection
