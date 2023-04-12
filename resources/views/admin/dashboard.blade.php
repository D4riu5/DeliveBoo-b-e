@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome attività</th>
                            <th scope="col">Indirizzo</th>
                            <th scope="col">Nome proprietario</th>
                            <th scope="col">Cognome proprietario</th>
                            <th scope="col">Partita IVA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr scope="row">
                            <td>
                                <div>
                                    {{ $user->restaurant->name }}
                                </div>
                            </td>
                            <td>
                                <div>
                                    {{ $user->restaurant->address }}
                                </div>
                            </td>
                            <td>
                                <div>
                                    {{ $user->name }}
                                </div>
                            </td>
                            <td>
                                <div>
                                    {{ $user->surname }}
                                </div>
                            </td>
                            <td>
                                <div>
                                    {{ $user->restaurant->PIVA }}
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
