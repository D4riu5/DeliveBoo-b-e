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
                        @foreach ($food as $food)
                            <tr>
                                <th scope="row">{{ $food->id }}</th>
                                <td>
                                    <a style="color: darkblue" href="{{ route('admin.food.show', $food->id) }}">
                                        {{ $food->name }}
                                    </a>
                                </td>
                                <td>{{ $food->course }}</td>
                                <td>
                                    {{ $food->price }}
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
                                        method="POST"
                                        onsubmit="return confirm('Sei sicuro di voler eliminare questo piatto?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
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
