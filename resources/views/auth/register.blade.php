@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center fs-4">{{ __('Utente') }}</div>

                    <div class="card-body py-4 px-0">
                        {{-- Form di Regitrazione --}}
                        <form id="register-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <p class="text-center">Tutti i campi con * sono obbligatori</p>

                            {{--  Registrazione Ristoratore --}}

                            <div class="px-3 w-75 m-auto">
                                <div class="form-group row">
                                    <label for="username">{{ __('Nome *') }}</label>

                                    <div>
                                        <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('name') }}" autocomplete="name" autofocus>

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <span id="invalid-username" class="invalid-feedback" role="alert">
                                            <strong>{{ 'Campo obbligatorio' }}</strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="surname">{{ __('Cognome *') }}</label>
    
                                    <div>
                                        <input id="surname" type="text"
                                            class="form-control @error('surname') is-invalid @enderror" name="surname"
                                            value="{{ old('surname') }}" autocomplete="surname" autofocus>
    
                                        @error('surname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <span id="invalid-surname" class="invalid-feedback" role="alert">
                                            <strong>{{ 'Campo obbligatorio' }}</strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email">{{ __('E-Mail *') }}</label>
    
                                    <div>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
    
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <span id="invalid-email" class="invalid-feedback" role="alert">
                                            <strong>{{ 'Campo obbligatorio' }}</strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password">{{ __('Password *') }}</label>
    
                                    <div>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="new-password">
    
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <span id="invalid-password" class="invalid-feedback" role="alert">
                                            <strong>{{ 'La password deve essere di almeno 8 caratteri!' }}</strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm">{{ __('Conferma Password *') }}</label>
    
                                    <div>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" autocomplete="new-password">

                                        <span id="invalid-confirmPassword" class="invalid-feedback" role="alert">
                                            <strong>{{ 'La password di conferma non è uguale, riprova!' }}</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {{-- Registrazione Ristorante --}}
                            <div class="card-header text-center fs-4 mb-4">{{ __('Ristorante') }}</div>

                            <div class="px-3 my-3 w-75 m-auto">
                                <div class="form-group row">
                                    <label for="name">{{ __('Nome Ristorante *') }}</label>
    
                                    <div>
                                        <input id="name" type="text" class="form-control" name="name"
                                        autocomplete="name">

                                        <span id="invalid-name" class="invalid-feedback" role="alert">
                                            <strong>{{ 'Campo obbligatorio' }}</strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address">{{ __('Indirizzo *') }}</label>
    
                                    <div>
                                        <input id="address" type="text" class="form-control" name="address"
                                        autocomplete="address">

                                        <span id="invalid-address" class="invalid-feedback" role="alert">
                                            <strong>{{ 'Campo obbligatorio' }}</strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="from-group row">
                                    <label for="pIva">{{ __('P.Iva *') }}</label>
    
                                    <div>
                                        <input id="pIva" type="text"
                                            class="form-control @error('pIva') is-invalid @enderror" name="pIva"
                                            autocomplete="pIva">
    
                                        @error('pIva')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <span id="invalid-pIva" class="invalid-feedback" role="alert">
                                            <strong>{{ 'La partita Iva deve contenere 11 numeri' }}</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-header text-center fs-5 mb-4 w-100">{{ __('Seleziona categorie:') }}</div>

                            {{-- TYPES --}}
                            <div class="flex-center">
                                <div class="d-flex flex-wrap m-auto justify-content-center">
                                    @foreach ($types as $type)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="types[]" type="checkbox"
                                                id="type-{{ $type->id }}" {{-- {{ in_array($type->id, old('types', [])) ? 'checked' : '' }} --}}
                                                @if (old('types') && is_array(old('types')) && count(old('types')) > 0) {{ in_array($type->id, old('types')) ? 'checked' : '' }} @endif
                                                value="{{ $type->id }}">

                                            <label class="form-check-label" for="type-{{ $type->id }}">
                                                {{ $type->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <div>
                                    <button type="submit" class="btn btn-primary my-3">
                                        {{ __('Registrati') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const form = document.getElementById('register-form');
        const username = document.getElementById('username');
        const surname = document.getElementById('surname');
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const passwordConfirm = document.getElementById('password-confirm');
        const name = document.getElementById('name');
        const address = document.getElementById('address');
        const pIva = document.getElementById('pIva');

        const invalidUsername = document.getElementById('invalid-username');
        const invalidSurname = document.getElementById('invalid-surname');
        const invalidEmail = document.getElementById('invalid-email');
        const invalidPassword = document.getElementById('invalid-password');
        const invalidConfirmPassword = document.getElementById('invalid-confirmPassword');
        const invalidName = document.getElementById('invalid-name');
        const invalidAddress = document.getElementById('invalid-address');
        const invalidPIva = document.getElementById('invalid-pIva');

        form.addEventListener("submit", function(event) {
            event.preventDefault()
            username.classList.remove('is-invalid')
            surname.classList.remove('is-invalid')
            email.classList.remove('is-invalid')
            password.classList.remove('is-invalid')
            passwordConfirm.classList.remove('is-invalid')
            name.classList.remove('is-invalid')
            address.classList.remove('is-invalid')
            pIva.classList.remove('is-invalid')

            invalidUsername.classList.remove('d-block')

            let isInvalid = 0;

            if (username.value.length < 1) {
                invalidUsername.classList.add('d-block')
                username.classList.add("is-invalid")
                isInvalid++;
            } else if (!/^[^0-9]*$/.test(username.value)) {
                invalidUsername.textContent = "L'username non puo' contenere numeri.";
                invalidUsername.classList.add("d-block");
                username.classList.add("is-invalid");
                isInvalid++;
            } else {
                invalidUsername.classList.remove("d-block");
                username.classList.remove("is-invalid");
            }

            if (surname.value.length < 1) {
                invalidSurname.classList.add('d-block')
                surname.classList.add("is-invalid")
                isInvalid++;
            } else if (!/^[^0-9]*$/.test(surname.value)) {
                invalidSurname.textContent = "Il cognome non puo' contenere numeri.";
                invalidSurname.classList.add("d-block");
                surname.classList.add("is-invalid");
                isInvalid++;
            } else {
                invalidSurname.classList.remove("d-block");
                surname.classList.remove("is-invalid");
            }

            if (email.value.length < 1) {
                invalidEmail.classList.add('d-block')
                email.classList.add("is-invalid")
                isInvalid++;
            } else {
                invalidEmail.classList.remove("d-block");
                email.classList.remove("is-invalid");
            }

            if (password.value.length < 8) {
                password.classList.add("is-invalid")
                isInvalid++;
            } else if (password.value !== passwordConfirm.value) {
                passwordConfirm.classList.add("is-invalid")
                isInvalid++;
            }

            if (name.value.length < 1) {
                invalidName.classList.add('d-block')
                name.classList.add("is-invalid")
                isInvalid++;
            } else {
                invalidName.classList.remove("d-block");
                name.classList.remove("is-invalid");
            }

            if (address.value.length < 1) {
                invalidAddress.classList.add('d-block')
                address.classList.add("is-invalid")
                isInvalid++;
            } else {
                invalidAddress.classList.remove("d-block");
                address.classList.remove("is-invalid");
            }

            if (pIva.value.length !== 11 || !pIva.value.match(/^[0-9]+$/)) {
                invalidPIva.classList.add('d-block')
                pIva.classList.add("is-invalid")
                isInvalid++;
            } else {
                invalidPIva.classList.remove("d-block");
                pIva.classList.remove("is-invalid");
            }

            if (isInvalid === 0) {
                form.submit()
            }
        })
    </script>
@endsection
