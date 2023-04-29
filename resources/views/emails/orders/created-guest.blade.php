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
        <h1>Ciao! {{ $guest->input('order.costumer_name') }}</h1>
        <p>Il tuo ordine è stato consegnato!</p>
    
        <p class="my-2">Lista prodotti ordinati:</p>
    
        <ul>
            @foreach ($order->foods as $food)
                <li>{{ $food->name }} - {{ $food->price }} € x {{ $food->pivot->quantity }}</li>
            @endforeach
        </ul>
        <p>Prezzo spedizione: {{ $restaurant->prezzo_spedizione }} €</p>
        <p>Prezzo totale: {{ $order->total_price }} €</p>
    
        @php
            $formSubmitted = $order->rating ? true : false;
        @endphp
    
        @if ($formSubmitted)
            <p>Grazie per aver dato un voto all'ordine!</p>
        @else
            <form method="POST" action="{{ url('api/orders/' . $order->id . '/rate') }}">
                @csrf
    
                <label for="rating">Rating:</label>
                <select name="rating" id="rating">
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
    
                <button type="submit">Submit Rating</button>
            </form>
        @endif
    
        <p>Grazie!</p>
    </div>
    
</body>

</html>
