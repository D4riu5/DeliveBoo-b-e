@extends('layouts.admin')

@section('content')
    <div class="bigScreen">
        <div class="container-sm mt-4">
            <div class="row justify-content-center mb-4">
                <div class="col text-center">
                    <h3>
                        Modifica dati attività
                    </h3>
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
                                name="name" value="{{ old('name', $restaurant->name) }}"
                                placeholder="Inserisci nome attività...">

                            @error('name')
                                <div class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        {{-- INDIRIZZO ATTIVITA'  --}}
                        <div class="mb-3">
                            <label for="address" class="form-label">
                                Modifica indirizzo dell'attività<span class="text-danger"> *</span>
                            </label>
                            <textarea style="height:30px" class="form-control @error('address') is-invalid @enderror" rows="10" id="address"
                                name="address" placeholder="Inserisci indirizzo attività...">{{ old('address', $restaurant->address) }}</textarea>

                            @error('address')
                                <div class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        {{-- PARTITA IVA --}}
                        <div class="mb-3">
                            <label for="PIVA" class="form-label">
                                Codice Partita IVA <span class="text-danger"> *</span>
                            </label>
                            <input type="text" class="form-control @error('PIVA') is-invalid @enderror" rows="10"
                                id="PIVA" name="PIVA" placeholder="Inserisci il tuo codice partita IVA..."
                                value="{{ old('PIVA', $restaurant->PIVA) }}">
                            {{-- {{ old('PIVA', $restaurant->PIVA) }} --}}

                            @error('PIVA')
                                <div class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        {{-- IMMAGINE ATTIVITA' --}}
                        <div class="mb-3 d-flex flex-column align-items-center">
                            <label for="image" class="form-label">
                                Immagine attività:
                            </label>

                            {{-- Se l'immagine nel database è presente: --}}
                            @if ($restaurant->image)
                                <div class="my-2">
                                    {{-- Possibilità di rimuovere l'immagine  --}}
                                    <div class="form-check mb-2 d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" name="delete_image"
                                            id="delete_image">
                                        <label class="form-check-label ms-1" for="delete_image">
                                            Rimuovi immagine
                                        </label>
                                    </div>
                                    {{-- STAMPA IMMAGINE --}}
                                    <div class="container-xxl">
                                        <img class="img-fluid imgBorder" src="{{ asset('storage/' . $restaurant->image) }}" alt="restaurant">
                                    </div>

                                </div>
                            @endif

                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        </div>

                        {{-- PREZZO SPEDIZIONE --}}
                        <div class="mb-3">
                            <label for="prezzo_spedizione" class="form-label">
                                Prezzo Spedizione <span class="text-danger"> *</span>
                            </label>
                            <input type="number" class="form-control @error('prezzo_spedizione') is-invalid @enderror"
                                id="prezzo_spedizione" name="prezzo_spedizione"
                                placeholder="Inserisci il prezzo della spedizione..."
                                step="0.01"
                                value="{{ old('prezzo_spedizione', $restaurant->prezzo_spedizione) }}">
                            {{-- {{ old('prezzo_spedizione', $restaurant->prezzo_spedizione) }} --}}

                            @error('prezzo_spedizione')
                                <div class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            {{-- SELEZIONA CATEGORIE MENU  --}}
                            <div class="card-header text-center fs-5 mb-4 w-100">
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

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-warning">
                                Aggiorna
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="smallScreen">
        <div class="container-xxl mt-4">
            <div class="row text-center mb-4">
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
                                name="name" value="{{ old('name', $restaurant->name) }}"
                                placeholder="Inserisci nome attività...">

                            @error('name')
                                <div class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        {{-- INDIRIZZO ATTIVITA'  --}}
                        <div class="mb-3">
                            <label for="address" class="form-label">
                                Modifica indirizzo dell'attività<span class="text-danger"> *</span>
                            </label>
                            <textarea style="height:30px" class="form-control @error('address') is-invalid @enderror" rows="10"
                                id="address" name="address" placeholder="Inserisci indirizzo attività...">{{ old('address', $restaurant->address) }}</textarea>

                            @error('address')
                                <div class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        {{-- PARTITA IVA --}}
                        <div class="mb-3">
                            <label for="PIVA" class="form-label">
                                Codice Partita IVA <span class="text-danger"> *</span>
                            </label>
                            <input type="text" class="form-control @error('PIVA') is-invalid @enderror" rows="10"
                                id="PIVA" name="PIVA" placeholder="Inserisci il tuo codice partita IVA..."
                                value="{{ old('PIVA', $restaurant->PIVA) }}">
                            {{-- {{ old('PIVA', $restaurant->PIVA) }} --}}

                            @error('PIVA')
                                <div class="text-danger">
                                    <strong>{{ $message }}</strong>
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
                                        <input class="form-check-input" type="checkbox" name="delete_image"
                                            id="delete_image">
                                        <label class="form-check-label" for="delete_image">
                                            Rimuovi immagine
                                        </label>
                                    </div>
                                    {{-- STAMPA IMMAGINE --}}
                                    <div class="container-xxl">
                                        <img class="img-fluid imgBorder" src="{{ asset('storage/' . $restaurant->image) }}" alt="restaurant">
                                    </div>

                                </div>
                            @endif

                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        </div>

                        {{-- PREZZO SPEDIZIONE --}}
                        <div class="mb-3">
                            <label for="prezzo_spedizione" class="form-label">
                                Prezzo Spedizione <span class="text-danger"> *</span>
                            </label>
                            <input type="number" class="form-control @error('prezzo_spedizione') is-invalid @enderror"
                                id="prezzo_spedizione" name="prezzo_spedizione"
                                placeholder="Inserisci il prezzo della spedizione..."
                                step="0.01"
                                value="{{ old('prezzo_spedizione', $restaurant->prezzo_spedizione) }}">
                            {{-- {{ old('prezzo_spedizione', $restaurant->prezzo_spedizione) }} --}}

                            @error('prezzo_spedizione')
                                <div class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            {{-- SELEZIONA CATEGORIE MENU  --}}
                            <div class="card-header text-center fs-5 mb-4 w-100">
                                {{ __('Seleziona categorie:') }}</div>

                            {{-- DATI PER LA TABELLA TYPES --}}
                            <div class="flex-center">
                                <div class="d-flex flex-column flex-wrap m-auto">
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

                        <div>
                            <p>
                                <strong class="text-danger">*</strong> Campi obbligatori!
                            </p>
                        </div>

                        {{-- BOTTONE AGGIORNA PER INVIO FORM  --}}

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-danger">
                                Aggiorna
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const checkCategories = Array.from(document.querySelectorAll('input[type="checkbox"]'))

        const button = document.querySelector('button[type="submit"]')

        checkCategories.forEach((checkbox, index, array) => {
            checkbox.addEventListener('click', validateCheckbox.bind(null, array, button))
        })

        function validateCheckbox(arr, btn) {
            let counter = 0

            arr.forEach(element => {
                if (element.checked) {
                    counter++
                }
            })

            if (counter) {
                btn.disabled = ''
                document.getElementById('types-error').innerHTML = ''
            } else {
                btn.disabled = 'disabled'
                document.getElementById('types-error').innerHTML = 'Seleziona almeno una categoria!'
            }
        };

        validateCheckbox(checkCategories, button);
    </script>
@endsection
