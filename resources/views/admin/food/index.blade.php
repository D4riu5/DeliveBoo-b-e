@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h1>
                    I miei piatti
                </h1>

                <a href="{{ route('admin.food.create') }}" class="btn btn-success mt-2">
                    Aggiungi un piatto
                </a>
            </div>
        </div>

        @include('partials.success')

        <div class="row mb-4">
            <div class="col">
                <h4>
                    Cerca
                </h4>

                <form action="{{ route('admin.food.index') }}" method="GET">
                    <div>
                        <input type="text" name="name" placeholder="Cerca piatto per nome..." class="form-control"
                            value="{{ request()->input('name') }}">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-secondary my-2">
                            Cerca
                        </button>
                    </div>
                </form>
            </div>
        </div>

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
                                    <a style="color: darkblue" href="{{ route('admin.food.show', $food->id) }}">
                                        {{ $food->name }}
                                    </a>
                                </td>
                                <td>{{ $food->course }}</td>
                                <td>
                                    {{ $food->price }} €
                                </td>
                                <td>
                                    {{ $food->is_available ? "Si" : "No" }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.food.show', $food->id) }}" class="btn btn-primary">
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
@endsection
