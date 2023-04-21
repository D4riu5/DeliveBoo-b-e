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

        {{-- @include('partials.errors') --}}

        <div class="row mb-4">
            <div class="col">
                <form action="{{ route('admin.food.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- NOME CIBO  --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Nome del piatto<span class="text-danger"> *</span>
                        </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" maxlength="64"
                            value="{{ old('name') }}" placeholder="Inserisci nome...">
                        
                        @error('name')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- DESCRIZIONE  --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">
                            Descrizione del prodotto<span class="text-danger"> *</span>
                        </label>
                        <textarea style="height:100px" class="form-control @error('description') is-invalid @enderror" rows="10" id="description" name="description"
                            maxlength="255" placeholder="Inserisci descrizione...">{{ old('description') }}</textarea>

                        @error('description')
                            <div class="text-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    {{-- PORTATE --}}
                    <div class="mb-3">
                        <label for="course" class="form-label">
                            Portata <span class="text-danger"> *</span>
                        </label>
                        <select class="form-select @error('course') is-invalid @enderror" id="course" name="course">
                            <option value="" disabled selected>Seleziona la portata...</option>
                            <option value="Antipasto">Antipasto</option>
                            <option value="Primo">Primo</option>
                            <option value="Secondo">Secondo</option>
                            <option value="Contorno">Contorno</option>
                            <option value="Dolce">Dolce</option>
                            <option value="Bevanda">Bevanda</option>
                        </select>

                        @error('course')
                            <div class="text-danger">
                                <strong>Selezionare almeno una portata</strong>
                            </div>
                        @enderror
                    </div>

                    {{-- PREZZO  --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">
                            Prezzo <span class="text-danger"> *</span>
                        </label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                            step="0.01" value="{{ old('price') }}" placeholder="Inserisci prezzo (euro)...">
                        
                        @error('price')
                            <div class="text-danger">
                                <strong>Inserire un prezzo uguale o superiore a 1</strong>
                            </div>
                        @enderror
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
                        <div>
                            <label class="form-label">
                                E' un prodotto piccante?
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="spicy" id="spicy_yes" value="1">
                            <label class="form-check-label" for="spicy_yes">Si</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="spicy" id="spicy_no" value="0">
                            <label class="form-check-label" for="spicy_no">No</label>
                        </div>
                    </div>                      

                    {{-- GLUTEN FREE SI/NO  --}}

                    <div class="mb-3">
                        <div>
                            <label class="form-label">
                                Il prodotto contiene glutine?
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gluten_free" id="gluten_yes" value="0">
                            <label class="form-check-label" for="gluten_yes">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gluten_free" id="gluten_no" value="1">
                            <label class="form-check-label" for="gluten_no">Si</label>
                        </div>
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
