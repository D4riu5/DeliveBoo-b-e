<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Ordine ricevuto</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 16px;
                color: #333;
                line-height: 1.5;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
            }
            h1 {
                color: #ff3f5c;
                margin-top: 0;
            }
            .header {
                background-color: #1f1d1d;
                padding: 20px;
                text-align: center;
            }
            .header img {
                height: 100px;
            }
            .content {
                padding: 20px;
                background-color: #fff;
                border: 1px solid #ccc;
            }
            .content p {
                margin: 0 0 10px 0;
            }
            .content strong {
                color: #ff3f5c;
            }
            .content ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }
            .content li {
                margin: 0;
                padding: 0;
                margin-bottom: 10px;
            }
            .content li span {
                font-weight: bold;
                margin-right: 10px;
            }
            .my-bold{
                font-weight: bold;
            }
            .my-green{
                color: limegreen;
            }
            .my-color{
                color: #ff3f5c;
            }
      
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <img src="https://www.example.com/logo.png" alt="ComidaGo" />
                <h1>Ordine ricevuto!</h1>
            </div>
            <div class="content">
                <p>Ciao <strong>{{ $guest->input('order.costumer_name') }}</strong>,</p>
                <p>Il tuo ordine è in consegna!</p>

                <p class="my-bold my-green">Lista prodotti ordinati:</p>

                <ul>
                    @foreach ($order->foods as $food)
                    <li>{{ $food->name }} - {{ $food->price }} € x {{ $food->pivot->quantity }}</li>
                    @endforeach
                </ul>
                <p><span class="my-bold">Prezzo spedizione:</span> {{ $restaurant->prezzo_spedizione }} €</p>
                <p><span class="my-bold">Prezzo totale:</span> {{ $order->total_price }} €</p>

                <p>Una volta ricevuto l'ordine, <a href="{{ url('orders/' . $order->id . '/rate/' . $rateToken) }}">clicca qui</a> Per dare una valutazione al ristorante</p>
                <p class="my-bold my-color">Grazie per aver Scelto ComidaGo!</p>
            </div>
            
        </div>
    </body>
</html>
