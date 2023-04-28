@extends('layouts.app')

@section('content')
    <div class="container loginMargin">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-bg-dark">
                    <div class="text-center py-2">{{ __('Effettua Login') }}</div>

                    <div class="card-body">
                        <form id="login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-4 row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right fw-bold">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

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

                            <div class="mb-4 row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right fw-bold">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link forgotPassword" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-nav mt-2">
        @guest
            @if (Route::has('register'))
                <div class="container-fluid text-center smallScreen">
                    <div class="nav-item">
                        <a class="card text-bg-dark navButton nav-link text-light" href="{{ route('register') }}">
                            <span class="fw-bold registerTitle">
                                Registrati
                            </span>
                        </a>
                    </div>
                </div>
            @endif
        @else
        @endguest
    </div>


    <script>
        const form = document.getElementById('login-form');
        const email = document.getElementById('email');
        const invalidEmail = document.getElementById('invalid-email');

        form.addEventListener("submit", function(event) {
                event.preventDefault();
                if (invalidEmail !== null) {
                    email.classList.remove('is-invalid');
                    invalidEmail.classList.remove('d-block');
                }
                let isInvalid = false;


                if (!email.value.trim()) {
                    invalidEmail.textContent = "Inserire l'indirizzo email.";
                    invalidEmail.classList.add('d-block');
                    email.classList.add("is-invalid");
                    isInvalid = true;
                } else if (email.value.length < 3 || email.value.length > 320) {
                    invalidEmail.textContent = "L'indirizzo email deve essere compreso tra 3 e 320 caratteri.";
                    invalidEmail.classList.add("d-block");
                    email.classList.add("is-invalid");
                    isInvalid = true;
                } else if (!/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email.value)) {
                    invalidEmail.textContent = "Inserire un indirizzo email valido.";
                    invalidEmail.classList.add("d-block");
                    email.classList.add("is-invalid");
                    isInvalid = true;
                } else {
                    if (invalidEmail !== null) {
                        invalidEmail.classList.remove("d-block");
                        email.classList.remove("is-invalid");
                    }
                }


                if (isInvalid === false) {
                    form.submit()
                }

            }



        );
    </script>
@endsection
