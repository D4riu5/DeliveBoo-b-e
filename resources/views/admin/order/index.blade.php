@extends('layouts.admin')

@section('content')
    <div class="bigScreen">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="titleColor">I miei ordini</h1>
                    <hr>
                </div>
                {{-- INIZIO DATI CLIENTE  --}}
                <div class="col-md-12">
                    <div class="d-flex justify-content-between px-4">
                        {{-- SORT BY SELECT --}}
                        <form action="{{ route('admin.order.index') }}" method="get">
                            {{-- @csrf --}}
                            <label for="sort_by">Ordina per:</label>
                            <select class="mx-1" id="sort_by" name="sort_by" onchange="this.form.submit()">
                                <option value="desc" @if (request('sort_by') === 'desc') selected @endif>Più recente
                                </option>
                                <option value="asc" @if (request('sort_by') === 'asc') selected @endif>Più vecchio
                                </option>
                            </select>
                        </form>
                        <a style="color:rgb(250, 4, 86)" class="text-decoration-none" href="{{ route('admin.statistics') }}">
                            Vedi statistiche
                        </a>
                    </div>

                    <hr>
                </div>
                {{-- INIZIO TABELLA DATI CLIENTE  --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col text-white text-center" scope="col">Data</th>
                            <th class="col text-white text-center" scope="col">Nome Cliente</th>
                            <th class="col text-white text-center" scope="col">Indirizzo Cliente</th>
                            <th class="col text-white text-center" scope="col">Recapito Cliente</th>
                            <th class="col text-white text-center" scope="col">Totale</th>
                            <th class="col text-white text-center" scope="col-">Status - Rating</th>
                        </tr>
                    </thead>
                    @foreach ($orders as $order)
                        <tbody>
                            <tr scope="row">
                                <td>
                                    <div class="text-white text-center">
                                        {{ $order->order_date }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-white text-center">
                                        {{ $order->costumer_name }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-white text-center">
                                        {{ $order->delivery_address }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-white text-center">
                                        {{ $order->delivery_contact }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-white text-center">
                                        {{ $order->total_price }} €
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a style="color:rgb(250, 4, 86)" class="text-decoration-none"
                                            href="{{ route('admin.order.show', $order->id) }}">
                                            Ulteriori dettagli
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="smallScreen container-fluid">
        <div class="orderResponsive">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>I miei ordini</h1>
                    <hr>
                </div>
                {{-- INIZIO DATI CLIENTE  --}}
                <div class="col-12 text-center">
                    {{-- SORT BY SELECT --}}
                    <form class="my-2" action="{{ route('admin.order.index') }}" method="get">
                        {{-- @csrf --}}
                        <label for="sort_by">Ordina per:</label>
                        <select class="mx-1" id="sort_by" name="sort_by" onchange="this.form.submit()">
                            <option value="desc" @if (request('sort_by') === 'desc') selected @endif>Più recente</option>
                            <option value="asc" @if (request('sort_by') === 'asc') selected @endif>Più vecchio</option>
                        </select>
                    </form>
                    <a style="color:rgb(250, 4, 86)" class="text-decoration-none" href="#">
                        Vedi statistiche
                    </a>
                    <hr>
                </div>
                {{-- <th class="col" scope="col">ID</th>
                            <th class="col" scope="col">Nome Cliente</th>
                            <th class="col" scope="col">Indirizzo Cliente</th>
                            <th class="col" scope="col">Recapito Cliente</th>
                            <th class="col" scope="col">Totale</th>
                            <th class="col" scope="col-">Status - Rating</th> --}}
                @foreach ($orders as $order)
                    <div class="px-3 mb-3">
                        <div class="card text-bg-dark px-2 py-2">
                            <div class="py-1">
                                <span class="fw-bold">
                                    Data dell'ordine:
                                </span>
                                <span>
                                    {{ $order->order_date }}
                                </span>
                            </div>
                            <div class="py-1">
                                <span class="fw-bold">
                                    Nome cliente:
                                </span>
                                <span>
                                    {{ $order->costumer_name }}
                                </span>
                            </div>
                            <div class="py-1">
                                <span class="fw-bold">
                                    Indirizzo cliente:
                                </span>
                                <span>
                                    {{ $order->delivery_address }}
                                </span>
                            </div>
                            <div class="py-1">
                                <span class="fw-bold">
                                    Recapito cliente:
                                </span>
                                <span>
                                    {{ $order->delivery_contact }}
                                </span>
                            </div>
                            <div class="py-1">
                                <span class="fw-bold">
                                    Prezzo totale ordine:
                                </span>
                                <span>
                                    {{ $order->total_price }} €
                                </span>
                            </div>
                            <a class="text-decoration-none py-1" href="{{ route('admin.order.show', $order->id) }}">
                                Clicca per maggiori dettagli
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
