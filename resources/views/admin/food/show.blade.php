@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                @include('partials.success')

                <h1>
                    {{ $food->name }}
                </h1>

                <a href="{{ route('admin.food.edit', $food->id) }}" class="btn btn-warning">
                    Modifica piatto
                </a>


                @if ($food->image)
                    <div>
                        <img class="my-3" src="{{ asset('storage/' . $food->image) }}" style="height: 400px;" alt="food">
                    </div>
                @endif

                <h3 class="my-2">
                    Descrizione:
                </h3>
                <p>
                    {!! nl2br($food->description) !!}
                </p>

                <h3 class="my-2">
                    Portata:
                </h3>
                <p>
                    {{ $food->course }}
                </p>
                
                <h3 class="my-2">
                    Disponibile?
                </h3>
                <p>
                    {{ $food->is_available ? 'Si' : 'No' }}
                </p>

                <h3 class="my-2">
                    Prezzo:
                </h3>
                <p>
                    {{ $food->price }} €
                </p>
            </div>
        </div>
    </div>
@endsection
