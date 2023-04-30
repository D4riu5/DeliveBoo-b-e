@extends('layouts.app')

@section('content')
    <div class="container-xxl marginLogin">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-bg-dark p-3">
                    <h4 class="text-center py-2">Dai un voto all'ordine!</h4>

                    <div class="card-body">

                        @php
                            $formSubmitted = $order->rating ? true : false;
                        @endphp

                        @if ($formSubmitted)
                            <p>Grazie per aver dato un voto all'ordine!</p>
                            <a href="{{ env('APP_FRONTEND_URL') }}" class="text-decoration-none text-danger">Torna alla homepage!</a>
                        @else
                            <form method="POST" action="{{ url('api/orders/' . $order->id . '/rate') }}">
                                @csrf

                                <label class="form-label" for="rating">Rating:</label>
                                <select class="form-select" name="rating" id="rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <div class="d-flex justify-content-center mt-3">
                                    <button class="btn btn-danger" type="submit">Invia</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
