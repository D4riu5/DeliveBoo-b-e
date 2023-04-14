@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h1>
                    Crea un nuovo piatto
                </h1>
            </div>
        </div>

        @include('partials.errors')

        <div class="row mb-4">
            <div class="col">
                <form action="{{ route('admin.food.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- NOME CIBO  --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Nome<span class="text-danger"> *</span>
                        </label>
                        <input type="text" class="form-control" id="name" name="name" required maxlength="64"
                            value="{{ old('name') }}" placeholder="Inserisci nome...">
                    </div>

                    {{-- DESCRIZIONE  --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">
                            Descrizione del prodotto<span class="text-danger"> *</span>
                        </label>
                        <textarea class="form-control" rows="10" id="description" name="description" required maxlength="255"
                            placeholder="Inserisci descrizione...">{{ old('description') }}</textarea>
                    </div>

                    {{-- PORTATE --}}
                    <div class="mb-3">
                        <label for="course" class="form-label">
                            Portata <span class="text-danger"> *</span>
                        </label>
                        <select class="form-select" id="course" name="course" required>
                            <option value="" disabled selected>Seleziona la portata...</option>
                            <option value="Antipasto">Antipasto</option>
                            <option value="Primo">Primo</option>
                            <option value="Secondo">Secondo</option>
                            <option value="Contorno">Contorno</option>
                            <option value="Dolce">Dolce</option>
                            <option value="Bevanda">Bevanda</option>
                        </select>
                    </div>

                    {{-- PREZZO  --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">
                            Prezzo <span class="text-danger"> *</span>
                        </label>
                        <input type="number" class="form-control" id="price" name="price" required min="1"
                            step="0.01" value="{{ old('price') }}" placeholder="Inserisci prezzo (euro)...">
                    </div>

                    {{-- IMMAGINE PIATTO --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">
                            Immagine piatto
                        </label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>

                    {{-- DETTAGLI DA INVIARE A FOOD DETAILS  --}}

                    {{-- PICCANTE SI/NO  --}}

                    <div class="mb-3">
                        <label for="spicy" class="form-label">
                            E' un prodotto piccante?
                        </label>
                        <select class="form-select" id="spicy" name="spicy" >
                            <option value="" disabled selected>Seleziona opzione...</option>
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    {{-- GLUTEN FREE SI/NO  --}}

                    <div class="mb-3">
                        <label for="gluten_free" class="form-label">
                            Il prodotto contiene glutine?
                        </label>
                        <select class="form-select" id="gluten_free" name="gluten_free">
                            <option value="" disabled selected>Seleziona opzione...</option>
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                     {{-- CALORIE  --}}
                     <div class="mb-3">
                        <label for="kcal" class="form-label">
                            Inserisci il numero di calorie
                        </label>
                        <input numeric type="number" class="form-control" id="kcal" name="kcal"
                            step="0.01" value="{{ old('kcal') }}" placeholder="Inserisci numero calorie è..">
                    </div>

                    <div>
                        <p>
                            <strong class="text-danger">*</strong> Campi obbligatori!
                        </p>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success">
                            Crea
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
