@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h1>
                    Modifica piatto
                </h1>
            </div>
        </div>

        @include('partials.success')

        @include('partials.errors')

        <div class="row mb-4">
            <div class="col">
                <form action="{{ route('admin.food.update', $food->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Nome<span class="text-danger"> *</span>
                        </label>
                        <input type="text" class="form-control" id="name" name="name" required maxlength="64"
                            value="{{ old('name', $food->name) }}" placeholder="Inserisci nome...">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">
                            Descrizione breve<span class="text-danger"> *</span>
                        </label>
                        <textarea class="form-control" rows="10" id="description" name="description" required maxlength="255"
                            placeholder="Insert description...">{{ old('description', $food->description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="course" class="form-label">
                            Portata <span class="text-danger"> *</span>
                        </label>
                        <select class="form-select" id="course" name="course" required>
                            <option value="" disabled selected>Seleziona la portata...</option>
                            <option value="Antipasto" {{ old('course', $food->course) === 'Antipasto' ? 'selected' : '' }}>Antipasto</option>
                            <option value="Primo" {{ old('course', $food->course) === 'Primo' ? 'selected' : '' }}>Primo</option>
                            <option value="Secondo" {{ old('course', $food->course) === 'Secondo' ? 'selected' : '' }}>Secondo</option>
                            <option value="Contorno" {{ old('course', $food->course) === 'Contorno' ? 'selected' : '' }}>Contorno</option>
                            <option value="Dolce" {{ old('course', $food->course) === 'Dolce' ? 'selected' : '' }}>Dolce</option>
                            <option value="Bevanda" {{ old('course', $food->course) === 'Bevanda' ? 'selected' : '' }}>Bevanda</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">
                            Prezzo <span class="text-danger"> *</span>
                        </label>
                        <input type="number" class="form-control" id="price" name="price" required minlength="1"
                            step="0.01" value="{{ old('price', $food->price) }}" placeholder="Inserisci prezzo (euro)...">
                    </div>


                    <div class="mb-3">
                        <label for="image" class="form-label">
                            Immagine
                        </label>

                        @if ($food->image)
                            <div class="my-2">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="delete_image" id="delete_image">
                                    <label class="form-check-label" for="delete_image">
                                        Rimuovi immagine
                                    </label>
                                </div>

                                <img src="{{ asset('storage/' . $food->image) }}" style="height: 400px;" alt="food">
                            </div>
                        @endif

                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>

                    <div>
                        <p>
                            <strong class="text-danger">*</strong> Campi obbligatori!
                        </p>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-warning">
                            Aggiorna
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
