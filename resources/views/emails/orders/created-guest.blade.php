<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ordine ricevuto</title>

    <style>
        h1 {
            color: red;
        }

        img {
            height: 300px;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div>
        <h1>Ciao {{ $guest->input('order.costumer_name') }}!</h1>
        <p>Il tuo ordine è in consegna!</p>

        <p class="my-2">Lista prodotti ordinati:</p>

        <ul>
            @foreach ($order->foods as $food)
                <li>{{ $food->name }} - {{ $food->price }} € x {{ $food->pivot->quantity }}</li>
            @endforeach
        </ul>
        <p>Prezzo spedizione: {{ $restaurant->prezzo_spedizione }} €</p>
        <p>Prezzo totale: {{ $order->total_price }} €</p>

        <p>Una volta ricevuto l'ordine, <a href="{{ url('orders/' . $order->id . '/rate/' . $rateToken) }}">clicca qui</a> per dargli un voto.
        </p>

        <p>Grazie!</p>
    </div>

</body>

</html>
