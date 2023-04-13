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

                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Nome<span class="text-danger"> *</span>
                        </label>
                        <input type="text" class="form-control" id="name" name="name" required maxlength="64"
                            value="{{ old('name') }}" placeholder="Inserisci nome...">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">
                            Descrizione breve<span class="text-danger"> *</span>
                        </label>
                        <textarea class="form-control" rows="10" id="description" name="description" required maxlength="255"
                            placeholder="Inserisci descrizione...">{{ old('description') }}</textarea>
                    </div>

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


                    <div class="mb-3">
                        <label for="price" class="form-label">
                            Prezzo <span class="text-danger"> *</span>
                        </label>
                        <input type="number" class="form-control" id="price" name="price" required minlength="1"
                            step="0.01" value="{{ old('price') }}" placeholder="Inserisci prezzo (euro)...">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">
                            Immagine piatto
                        </label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
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
