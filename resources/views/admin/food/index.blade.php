@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-2">
            <div class="col text-center">
                <h1>
                    I miei piatti
                </h1>
            </div>
        </div>

        @include('partials.success')

        <div class="bigScreen">
            <div class="row my-4 d-flex">
                <div class="col d-flex justify-content-center">
                    <form action="{{ route('admin.food.index') }}" method="GET">
                        <div class="d-flex justify-content-center">
                            <div class="d-flex align-items-center">
                                <div class="mx-1">
                                    <button type="submit" class="btn btn-danger my-2">
                                        Cerca
                                    </button>
                                </div>
                                <div>
                                    <input type="text" name="name"
                                        placeholder="Cerca piatto per nome..               " class="form-control "
                                        value="{{ request()->input('name') }}">
                                </div>
                            </div>
                            <div class="mx-1">
                                <a href="{{ route('admin.food.create') }}" class="btn btn-warning mt-2">
                                    Aggiungi un piatto
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="smallScreen ">
            <div class="mx-1 d-flex justify-content-center">
                <a href="{{ route('admin.food.create') }}" class="btn btn-warning mt-2">
                    Aggiungi un piatto
                </a>
            </div>
            <div class="row my-4 d-flex">
                <div class="col d-flex justify-content-center">
                    <form action="{{ route('admin.food.index') }}" method="GET">
                        <div class="d-flex align-items-center">
                            <div class="mx-1">
                                <button type="submit" class="btn btn-danger my-2">
                                    Cerca
                                </button>
                            </div>
                            <div>
                                <input type="text" name="name" placeholder="Cerca piatto per nome..               "
                                    class="form-control " value="{{ request()->input('name') }}">
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="bigScreen">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Portata</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Disponibile</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($foods as $food)
                            <tr>
                                <th scope="row">{{ $food->id }}</th>
                                <td>
                                    <a style="color:green" href="{{ route('admin.food.show', $food->id) }}">
                                        {{ $food->name }}
                                    </a>
                                </td>
                                <td>{{ $food->course }}</td>
                                <td>
                                    {{ $food->price }} €
                                </td>
                                <td>
                                    {{ $food->is_available ? 'Si' : 'No' }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.food.show', $food->id) }}" class="btn btn-success">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </a>
                                    <a href="{{ route('admin.food.edit', $food->id) }}" class="btn btn-warning">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form class="d-inline-block" action="{{ route('admin.food.destroy', $food->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $food->id }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                        <div class="modal fade" id="exampleModal{{ $food->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">

                                            <div class="modal-dialog">

                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Conferma
                                                            eliminazione
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        Sei sicuro di voler eliminare questo piatto ?
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">
                                                            Annulla </button>
                                                        <button type="submit" class="btn btn-danger"> Elimina </button>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- PAGINATION (FIX STYLE) --}}
                {{-- <div class="pagination-container my-3">
                        {{ $food->links() }}
                    </div> --}}
            </div>
        </div>
    </div>
    <div class="smallScreen">
        <div class="row">
            <div class="col">
                <table class="table">
                    @foreach ($foods as $food)
                        <div class="card card-title">
                            <div class="d-flex flex-column align-items-center">
                                <a style="color:green" href="{{ route('admin.food.show', $food->id) }}">
                                    {{ $food->name }}
                                </a>
                            </div>
                            <div class="d-flex mt-2">
                                <span>Prezzo: </span>
                                <span class="ms-1">{{ $food->price }}€</span>
                            </div>
                            <div class="d-flex mt-2">
                                <span>Portata:</span>
                                <span class="ms-1">{{ $food->course }}</span>
                            </div>
                            <div class="d-flex mt-2">
                                <span>Disponibile:</span>
                                <span class="ms-1">{{ $food->is_available ? 'Si' : 'No' }}</span>
                            </div>
                            {{-- DISPOSIZIONE BOTTONI  --}}
                            <div class="d-flex justify-content-center my-2">
                                {{-- BOTTOEN VERDE PER INFO --}}
                                <div class="mx-1">
                                    <a href="{{ route('admin.food.show', $food->id) }}" class="btn btn-success">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </a>
                                </div>
                                {{-- BOTTONE GIALLO PER MODIFICA --}}
                                <div class="mx-3">
                                    <a href="{{ route('admin.food.edit', $food->id) }}" class="btn btn-warning">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </div>
                                {{-- BOTTONE ROSSO PER ELIMINA --}}
                                <div>
                                    <form class="d-inline-block" action="{{ route('admin.food.destroy', $food->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                            data-bs-target="#Modal{{ $food->id }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                        <div class="modal fade" id="Modal{{ $food->id }}" tabindex="-1"
                                            aria-labelledby="ModalLabel" aria-hidden="true">

                                            <div class="modal-dialog">

                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="ModalLabel"> Conferma
                                                            eliminazione
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        Sei sicuro di voler eliminare questo piatto ?
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">
                                                            Annulla </button>
                                                        <button type="submit" class="btn btn-danger"> Elimina </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>



            </div>
            @endforeach
            {{-- PAGINATION (FIX STYLE) --}}
            {{-- <div class="pagination-container my-3">
                        {{ $food->links() }}
                    </div> --}}
        </div>
    </div>
    </div>
    </div>
@endsection
