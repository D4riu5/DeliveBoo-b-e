@extends('layouts.app')

@section('content')
    <div class="container-fluid formMargin">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center fs-4 text-bg-dark border-top">{{ __('Utente') }}</div>

                    <div class="card-body text-bg-dark py-4 px-0">
                        {{-- Form di Regitrazione --}}
                        <form id="register-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <p class="text-center">Tutti i campi con <span class="text-danger"> *</span> sono obbligatori</p>

                            {{--  Registrazione Ristoratore --}}

                            {{-- NOME --}}
                            <div class="px-3 w-75 m-auto">
                                <div class="form-group row">
                                    <label for="username">{{ __('Nome') }} <span class="text-danger"> *</span></label>

                                    <div>
                                        <input id="username" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        @if ($errors->has('name') === false)
                                            <strong id="invalid-username" class="invalid-feedback" role="alert">
                                                <strong>{{ 'Campo obbligatorio' }}</strong>
                                            </strong>
                                        @endif
                                    </div>
                                </div>

                                {{-- COGNOME --}}
                                <div class="form-group row">
                                    <label for="surname">{{ __('Cognome') }} <span class="text-danger"> *</span></label>

                                    <div>
                                        <input id="surname" type="text"
                                            class="form-control @error('surname') is-invalid @enderror" name="surname"
                                            value="{{ old('surname') }}" autocomplete="surname" autofocus>

                                        @error('surname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        @if ($errors->has('surname') === false)
                                            <strong id="invalid-surname" class="invalid-feedback" role="alert">
                                                <strong>{{ 'Campo obbligatorio' }}</strong>
                                            </strong>
                                        @endif
                                    </div>
                                </div>

                                {{-- EMAIL --}}
                                <div class="form-group row">
                                    <label for="email">{{ __('E-Mail') }} <span class="text-danger"> *</span></label>

                                    <div>
                                        <input id="email" type="text"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        @if ($errors->has('email') === false)
                                            <strong id="invalid-email" class="invalid-feedback" role="alert">
                                                <strong>{{ 'Campo obbligatorio' }}</strong>
                                            </strong>
                                        @endif
                                    </div>
                                </div>

                                {{-- PASSWORD --}}
                                <div class="form-group row">
                                    <label for="password">{{ __('Password') }} <span class="text-danger"> *</span></label>

                                    <div>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        @if ($errors->has('password') === false)
                                            <span id="invalid-password" class="invalid-feedback" role="alert">
                                                <strong>{{ 'La password deve essere di almeno 8 caratteri!' }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                {{-- PASSWORD CONFIRM --}}
                                <div class="form-group row">
                                    <label for="password-confirm">{{ __('Conferma Password') }} <span class="text-danger">
                                            *</span></label>

                                    <div>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" autocomplete="new-password">

                                        <span id="invalid-confirmPassword" class="invalid-feedback" role="alert">
                                            <strong>{{ 'La password di conferma non è uguale, riprova!' }}</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {{-- REGISTRAZIONE RISTORANTE --}}
                            <div class="card-header text-center fs-4 my-4 border-top">{{ __('Attività') }}</div>
                            {{-- NAME --}}
                            <div class="px-3 my-5 w-75 m-auto">
                                <div class="form-group row">
                                    <label for="name">{{ __("Nome Attività'") }}<span class="text-danger">
                                            *</span></label>
                                    <div> {{-- INPUT NAME RISTORANTE --}}
                                        <input id="name" type="text" maxlength="32"
                                            class="form-control @error('restaurant_name') is-invalid @enderror"
                                            name="restaurant_name" autocomplete="name"
                                            value="{{ old('restaurant_name') }}">

                                        {{-- CAMPO OBBLIGATORIO RISTORANTE ALERT --}}
                                        @error('restaurant_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        @if ($errors->has('restaurant_name') === false)
                                            <strong id="invalid-name" class="invalid-feedback" role="alert">
                                                <strong>{{ 'Campo obbligatorio' }}</strong>
                                            </strong>
                                        @endif
                                    </div>
                                </div>

                                {{-- ADDRESS --}}
                                <div class="form-group row">
                                    <label for="address">{{ __('Indirizzo') }} <span class="text-danger"> *</span></label>
                                    <div> {{-- INPUT ADDRESS RISTORANTE --}}
                                        <input id="address" type="text"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            autocomplete="address" value="{{ old('address') }}">
                                        {{-- CAMPO OBBLIGATORIO ADDRESS ALERT --}}
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        @if ($errors->has('address') === false)
                                            <span id="invalid-address" class="invalid-feedback" role="alert">
                                                <strong>{{ 'Campo obbligatorio' }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                {{-- PIVA --}}
                                <div class="from-group row">
                                    <label for="pIva">{{ __('P.Iva') }} <span class="text-danger"> *</span></label>
                                    <div> {{-- INPUT PARTITA IVA RISTORANTE --}}
                                        <input id="pIva" type="text" {{-- minlength="11"
                                            maxlength="11" --}}
                                            class="form-control @error('PIVA') is-invalid @enderror" name="PIVA"
                                            autocomplete="pIva" value="{{ old('PIVA') }}">
                                        {{-- CAMPO OBBLIGATORIO PARTITA IVA ALERT --}}

                                        @error('PIVA')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        {{-- CAMPO OBBlIGATORIO 11 NUMERI PARTITA IVA ALERT --}}
                                        @if ($errors->has('PIVA') === false)
                                            <span id="invalid-pIva" class="invalid-feedback" role="alert">
                                                <strong>{{ 'La partita Iva deve contenere 11 numeri' }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div>
                                {{-- SELEZIONA CATEGORIE MENU  --}}
                                <div class="card-header text-center fs-5 mb-4 w-100 border-top">
                                    {{ __('Seleziona categorie:') }}</div>

                                {{-- DATI PER LA TABELLA TYPES --}}
                                <div class="d-flex flex-column">
                                    <div class="d-flex flex-wrap m-auto justify-content-start ms-1 ps-4">
                                        @foreach ($types as $type)
                                            <div class="form-check form-check-inline col-5">
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
                                    {{-- Message displayed if no checkbox is selected --}}
                                    <strong>
                                        <div id="types-error" class="text-danger text-center"></div>
                                    </strong>

                                </div>
                                {{-- ERRORI PER GLI ELEMENTI DI TYPES --}}
                                @error('types')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                {{-- BOTTONE REGISTRATI  --}}
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <button id="submit-btn" type="submit" class="btn btn-danger my-3" disabled>
                                            {{ __('Registrati') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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

            // USER
            // NAME VALIDATION
            if (username.value.length < 2) {
                invalidUsername.textContent = "Il nome dev'essere di almeno 2 caratteri";
                invalidUsername.classList.add('d-block')
                username.classList.add("is-invalid")
                isInvalid++;
            } else if (username.value.length > 16) {
                invalidUsername.textContent = "Il nome dev'essere superiore a 16 caratteri";
                invalidUsername.classList.add('d-block')
                username.classList.add("is-invalid")
                isInvalid++;
            } else if (!/^[^0-9\s\W]*$/.test(username.value)) {
                invalidUsername.textContent = "L'username non puo' contenere numeri e/o caratteri speciali";
                invalidUsername.classList.add("d-block");
                username.classList.add("is-invalid");
                isInvalid++;
            } else {
                invalidUsername.classList.remove("d-block");
                username.classList.remove("is-invalid");
            }

            // SURNAME VALIDATION
            if (surname.value.trim().length < 2) {
                invalidSurname.textContent = "Il cognome dev'essere di almeno 2 caratteri";
                invalidSurname.classList.add('d-block')
                surname.classList.add("is-invalid")
                isInvalid++;
            } else if (!/^[^0-9]*$/.test(surname.value)) {
                invalidSurname.textContent = "Il cognome non puo' contenere numeri.";
                invalidSurname.classList.add("d-block");
                surname.classList.add("is-invalid");
                isInvalid++;
            } else {
                if (invalidSurname !== null) {
                    invalidSurname.classList.remove("d-block");
                    surname.classList.remove("is-invalid");
                }
            }

            // EMAIL VALIDATION
            if (email.value.length < 1) {
                invalidEmail.textContent = "L'email dev'essere di almeno 1 carattere.";
                invalidEmail.classList.add('d-block');
                email.classList.add("is-invalid");
                isInvalid++;
            } else if (!/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email.value)) {
                invalidEmail.textContent = "Inserire un'email valida.";
                invalidEmail.classList.add("d-block");
                email.classList.add("is-invalid");
                isInvalid++;
            } else {
                invalidEmail.classList.remove("d-block");
                email.classList.remove("is-invalid");
            }

            // PASSWORD VALIDATION
            if (password.value.length < 8) {
                password.classList.add("is-invalid")
                isInvalid++;
            } else if (password.value !== passwordConfirm.value) {
                passwordConfirm.classList.add("is-invalid")
                isInvalid++;
            }


            // ATTIVITA
            // NAME VALIDATION
            if (name.value.length < 2) {
                invalidName.textContent = "Il nome dell'attività dev'essere di almeno 2 caratteri";
                invalidName.classList.add('d-block')
                name.classList.add("is-invalid")
                isInvalid++;
            } else {
                invalidName.classList.remove("d-block");
                name.classList.remove("is-invalid");
            }

            // ADDRESS VALIDATION
            if (address.value.length < 1) {
                invalidAddress.classList.add('d-block')
                address.classList.add("is-invalid")
                isInvalid++;
            } else {
                invalidAddress.classList.remove("d-block");
                address.classList.remove("is-invalid");
            }

            // PIVA VALIDATION
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
