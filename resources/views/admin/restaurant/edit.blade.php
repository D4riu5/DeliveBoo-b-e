@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h1>
                    Modifica dati attività
                </h1>
            </div>
        </div>

        {{-- @include('partials.success')

        @include('partials.errors') --}}

        <div class="row mb-4">
            <div class="col">
                <form action="{{ route('admin.restaurant.update', $restaurant->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    @method('PUT')

                    {{-- NOME ATTIVITA'  --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Modifica nome attività<span class="text-danger"> *</span>
                        </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" maxlength="64" value="{{ old('name', $restaurant->name) }}"
                            placeholder="Inserisci nome attività...">

                        @error('name')
                            <div class="text-danger">
                                <strong>Inserire il nome dell'attività</strong>
                            </div>
                        @enderror
                    </div>

                    {{-- INDIRIZZO ATTIVITA'  --}}
                    <div class="mb-3">
                        <label for="address" class="form-label">
                            Modifica indirizzo dell'attività<span class="text-danger"> *</span>
                        </label>
                        <textarea style="height:100px" class="form-control @error('address') is-invalid @enderror" rows="10" id="address"
                            name="address" maxlength="500" placeholder="Inserisci indirizzo attività...">{{ old('address', $restaurant->address) }}</textarea>

                        @error('address')
                            <div class="text-danger">
                                <strong>Inserire l'indirizzo dell'attività</strong>
                            </div>
                        @enderror
                    </div>

                    {{-- PARTITA IVA --}}
                    <div class="mb-3">
                        <label for="PIVA" class="form-label">
                            Codice Partita IVA <span class="text-danger"> *</span>
                        </label>
                        <input type="text" class="form-control @error('PIVA') is-invalid @enderror" rows="10"
                            id="PIVA" name="PIVA" minlength="11" maxlength="11"
                            placeholder="Inserisci il tuo codice partita IVA..."
                            value="{{ old('PIVA', $restaurant->PIVA) }}">
                        {{-- {{ old('PIVA', $restaurant->PIVA) }} --}}

                        @error('PIVA')
                            <div class="text-danger">
                                <strong>Inserire le 11 cifre della partita IVA</strong>
                            </div>
                        @enderror
                    </div>

                    {{-- IMMAGINE ATTIVITA' --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">
                            Immagine attività
                        </label>

                        {{-- Se l'immagine nel database è presente: --}}
                        @if ($restaurant->image)
                            <div class="my-2">
                                {{-- Possibilità di rimuovere l'immagine  --}}
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="delete_image" id="delete_image">
                                    <label class="form-check-label" for="delete_image">
                                        Rimuovi immagine
                                    </label>
                                </div>
                                {{-- STAMPA IMMAGINE --}}

                                <img src="{{ asset('storage/' . $restaurant->image) }}" style="height: 400px;"
                                    alt="restaurant">
                            </div>
                        @endif

                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>
                    <div class="mb-3">
                        {{-- SELEZIONA CATEGORIE MENU  --}}
                        <div class="card-header text-center fs-5 mb-4 w-100 border-top">
                            {{ __('Seleziona categorie:') }}</div>

                        {{-- DATI PER LA TABELLA TYPES --}}
                        <div class="flex-center">
                            <div class="d-flex flex-wrap m-auto justify-content-center justify-content-around">
                                @foreach ($types as $type)
                                    <div class="form-check">
                                        <!-- Controllo sui valori precedenti delle checkboxes -->
                                        <input class="form-check-input" name="types[]" type="checkbox"
                                            id="type-{{ $type->id }}" value="{{ $type->id }}"
                                            @if (old('types') && is_array(old('types')) && count(old('types')) > 0) {{ in_array($type->id, old('types')) ? 'checked' : '' }}
                                    @elseif ($restaurant->types->contains($type->id))
                                        checked @endif>

                                        <label class="form-check-label" for="type-{{ $type->id }}">
                                            {{ $type->name }}
                                        </label>

                                    </div>
                                @endforeach
                            </div>
                            {{-- Message displayed if no checkbox is selected --}}
                            <strong>
                                <div id="types-error" class="text-danger text-center"></div>
                            </strong>

                        </div>
                    </div>

                    {{-- CAMPI OBBLIGATORI --}}

                    <div>
                        <p>
                            <strong class="text-danger">*</strong> Campi obbligatori!
                        </p>
                    </div>

                    {{-- BOTTONE AGGIORNA PER INVIO FORM  --}}

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
