@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="my-3">
                    <h3 class="fw-bold">
                        Tipi di cucina
                    </h3>
                </div>
                {{-- INIZIO CICLO PER STAMPA DI ELEMENTI IN VARIABILE $TYPES  --}}
                @foreach ($types as $type)
                    {{-- INIZIO TABELLA  --}}
                    <table class="table my-3">
                        {{-- CORPO TABELLA --}}
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <a href="{{ route('admin.type.show', $type->id) }}">
                                        {{ $type->name }}
                                    </a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    {{-- FINE TABELLA  --}}
                @endforeach
                {{-- FINE CICLO PER STAMPA DI ELEMENTI IN VARIABILE $TYPES  --}}

            </div>
        </div>
    </div>
@endsection
