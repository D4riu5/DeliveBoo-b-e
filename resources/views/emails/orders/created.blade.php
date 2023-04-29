<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuovo ordine ricevuto</title>

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
        <h1>
            Nuovo ordine ricevuto!
        </h1>

        <h4>Ciao {{ ucwords($restaurant->user->name) }}!</h4>

        <p>Un nuovo ordine è stato effettuato presso il tuo ristorante, <strong style="color: red">{{ $restaurant->name }},</strong> con i seguenti dettagli:</p>

        <p>ID ordine: {{ $order->id }}</p>
        <p>Nome del cliente: {{ $order->costumer_name }}</p>
        <p>Indirizzo di consegna: {{ $order->delivery_address }}</p>
        <p>Numero di telefono: {{ $order->delivery_contact }}</p>
        <p>Indirizzo email: {{ $buyer_email }}</p>
        <p>Data: {{ $order->order_date }}</p>

        <p class="my-2">Lista prodotti ordinati:</p>

        <ul>
            @foreach ($order->foods as $food)
                <li>{{ $food->name }} - {{ $food->price }} € x {{ $food->pivot->quantity }}</li>
            @endforeach
        </ul>
        <p>Prezzo spedizione: {{ $restaurant->prezzo_spedizione }} €</p>
        <p>Prezzo totale: {{ $order->total_price }} €</p>

        <p>Grazie!</p>
    </div>
</body>

</html>
