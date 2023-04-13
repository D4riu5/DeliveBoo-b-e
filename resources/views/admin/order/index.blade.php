@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12 text-center">
              <h1>I miei ordini</h1>
              <hr>
            </div>
            {{-- INIZIO DATI CLIENTE  --}}
            <div class="col-md-12">
                <h4>Ordini nel dettaglio:</h4>
                <hr>
              </div>
            {{-- INIZIO TABELLA DATI CLIENTE  --}}
            <table class="table">
                <thead>
                    <tr>
                        <th class="col" scope="col">ID</th>                  
                        <th class="col" scope="col">Nome Cliente</th>
                        <th class="col" scope="col">Indirizzo Cliente</th>
                        <th class="col" scope="col">Recapito Cliente</th>
                        <th class="col" scope="col">Totale</th>
                        <th class="col" scope="col-">Status - Rating</th>
                    </tr>
                </thead>
                @foreach ($orders as $order)
                <tbody>
                    <tr scope="row">
                        <td>
                            <div>
                                {{ $order->id }}
                            </div>
                        </td>
                        <td>
                            <div>
                                {{ $order->costumer_name }}
                            </div>
                        </td>
                        <td>
                            <div>
                                {{ $order->delivery_address }}
                            </div>
                        </td>
                        <td>
                            <div>
                                {{ $order->delivery_contact }}
                            </div>
                        </td>
                        <td>
                            <div>
                                {{ $order->total_price }} €
                            </div>
                        </td>
                        <td>
                            <a class="text-decoration-none" href="{{ route('admin.order.show', $order->id) }}">
                                Clicca per maggiori dettagli
                            </a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            
            
        </div>
    @endsection
