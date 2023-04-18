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

        {{-- @include('partials.success')

        @include('partials.errors') --}}

        <div class="row mb-4">
            <div class="col">
                <form action="{{ route('admin.food.update', $food->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')

                    {{-- NOME CIBO  --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Nome<span class="text-danger"> *</span>
                        </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" maxlength="64"
                            value="{{ old('name', $food->name) }}" placeholder="Inserisci nome...">

                        @error('name')
                            <span class="text-danger">
                                <strong>Inserire il nome del piatto</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- DESCRIZIONE  --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">
                            Descrizione del prodotto<span class="text-danger"> *</span>
                        </label>
                        <textarea style="height:100px" class="form-control @error('description') is-invalid @enderror" rows="10" id="description" name="description"
                            maxlength="500" placeholder="Inserisci descrizione...">{{ old('description', $food->description) }}</textarea>

                        @error('description')
                            <div class="text-danger">
                                <strong>Inserire una descrizione</strong>
                            </div>
                        @enderror
                    </div>

                    {{-- PORTATE --}}
                    <div class="mb-3">
                        <label for="course" class="form-label">
                            Portata <span class="text-danger"> *</span>
                        </label>
                        <select class="form-select @error('course') is-invalid @enderror" id="course" name="course" required>
                            <option value="" disabled selected>Seleziona la portata...</option>
                            <option value="Antipasto" {{ old('course', $food->course) === 'Antipasto' ? 'selected' : '' }}>
                                Antipasto</option>
                            <option value="Primo" {{ old('course', $food->course) === 'Primo' ? 'selected' : '' }}>Primo
                            </option>
                            <option value="Secondo" {{ old('course', $food->course) === 'Secondo' ? 'selected' : '' }}>
                                Secondo</option>
                            <option value="Contorno" {{ old('course', $food->course) === 'Contorno' ? 'selected' : '' }}>
                                Contorno</option>
                            <option value="Dolce" {{ old('course', $food->course) === 'Dolce' ? 'selected' : '' }}>Dolce
                            </option>
                            <option value="Bevanda" {{ old('course', $food->course) === 'Bevanda' ? 'selected' : '' }}>
                                Bevanda</option>
                        </select>
                    </div>

                    {{-- PREZZO  --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">
                            Prezzo <span class="text-danger"> *</span>
                        </label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required minlength="1"
                            step="0.01" value="{{ old('price', $food->price) }}"
                            placeholder="Inserisci prezzo (euro)...">

                        @error('price')
                            <div class="text-danger">
                                <strong>Inserire un prezzo uguale o superiore a 1</strong>
                            </div>
                        @enderror
                    </div>

                    {{-- IMMAGINE PIATTO --}}
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

                    {{-- DETTAGLI DA INVIARE A FOOD DETAILS  --}}

                    {{-- PICCANTE SI/NO  --}}

                    <div class="mb-3">
                        <label for="spicy" class="form-label">
                            E' un prodotto piccante?
                        </label>
                        <select class="form-select" id="spicy" name="spicy">
                            <option value="" disabled
                                {{ old('spicy', $food->food_detail->spicy) === null ? 'selected' : '' }}>
                                Seleziona opzione...
                            </option>
                            <option value="1" {{ old('spicy', $food->food_detail->spicy) == '1' ? 'selected' : '' }}>
                                Si
                            </option>
                            <option value="0" {{ old('spicy', $food->food_detail->spicy) == '0' ? 'selected' : '' }}>
                                No
                            </option>
                        </select>
                    </div>

                    {{-- GLUTEN FREE SI/NO  --}}

                    <div class="mb-3">
                        <label for="gluten_free" class="form-label">
                            Il prodotto contiene glutine?
                        </label>
                        <select class="form-select" id="gluten_free" name="gluten_free">
                            <option value="" disabled
                                {{ old('gluten_free', $food->food_detail->gluten_free) === null ? 'selected' : '' }}>
                                Seleziona opzione...</option>
                            <option value="1"
                                {{ old('gluten_free', $food->food_detail->gluten_free) == '1' ? 'selected' : '' }}>
                                Si</option>
                            <option value="0"
                                {{ old('gluten_free', $food->food_detail->gluten_free) == '0' ? 'selected' : '' }}>
                                No</option>
                        </select>
                    </div>

                    {{-- CALORIE  --}}
                    <div class="mb-3">
                        <label for="kcal" class="form-label">
                            Inserisci il numero di calorie
                        </label>
                        <input numeric type="number" class="form-control" id="kcal" name="kcal" step="0.01"
                            value="{{ old('kcal', $food->food_detail->kcal) }}"
                            placeholder="Inserisci numero calorie è..">
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
