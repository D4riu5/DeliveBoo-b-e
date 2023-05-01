<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Nuovo ordine ricevuto</title>
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
      .footer {
        background-color: #f7f7f7;
        padding: 20px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="header">
          <img src="https://i.postimg.cc/WDYypCdJ/7.png" alt="ComidaGo" />
          <h1>Nuovo ordine ricevuto!</h1>
      </div>
      <div class="content">
              <p>Ciao <strong>{{ ucwords($restaurant->user->name) }}</strong>,</p>
              <p>Un nuovo ordine è stato effettuato presso il tuo ristorante <strong>{{ $restaurant->name }}</strong>, con i seguenti dettagli:</p>
              <ul>
              <li><span>ID ordine:</span> {{ $order->id }}</li>
              <li><span>Nome del cliente:</span> {{ $order->costumer_name }}</li>
              <li><span>Indirizzo di consegna:</span> {{ $order->delivery_address }}</li>
              <li><span>Numero di telefono:</span> {{ $order->delivery_contact }}</li>
              <li><span>Indirizzo email:</span> {{ $buyer_email }}</li>
              <li><span>Data:</span> {{ $order->order_date }}</li>
              </ul>
              <p class="my-bold my-green">Lista prodotti ordinati:</p>
              <ul>
              @foreach ($order->foods as $food)
              <li>{{ $food->name }} - {{ $food->price }} € x {{ $food->pivot->quantity }}</li>
              @endforeach
              </ul>
              <p><span class="my-bold">Prezzo spedizione:</span> {{ $restaurant->prezzo_spedizione }} €</p>
              <p><span class="my-bold">Prezzo totale:</span> {{ $order->total_price }} €</p>

              <p class="my-bold my-color">Grazie per aver Scelto ComidaGo!</p>
      </div>
    </div>
  </body>

</html>
