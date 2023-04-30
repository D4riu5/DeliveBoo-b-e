<?php

use Braintree\Gateway;
use App\Http\Controllers\Api\RestaurantMenuController;
use App\Http\Controllers\Api\TypeController;
use App\Mail\NewOrder;
use App\Mail\NewOrderGuest;
use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::name('api.')->group(function () {
    Route::resource('types', TypeController::class)->only(['index', 'show']);
    Route::resource('restaurants.foods', RestaurantMenuController::class)->only(['index', 'show']);

    // BRAINTREE
    Route::get('/braintree/token', function () {
        $gateway = new Gateway([
            'environment' => 'sandbox',
            'merchantId' => 'y87km78s4f9p6pw2',
            'publicKey' => 'kn2sxg299qzj848h',
            'privateKey' => '72bc430e92d5e8714261188811497aab'
        ]);

        $token = $gateway->clientToken()->generate();

        return response()->json([
            'clientToken' => $token
        ]);
    });

    // NEW ORDER
    Route::post('orders', function (Illuminate\Http\Request $request) {
        // custom messages for errors
        $customMessages = [
            'order.costumer_name.required' => 'Il campo Nome e Cognome è richiesto.',
            'order.costumer_name.string' => 'Il campo Nome e Cognome deve essere una stringa.',
            'order.costumer_name.max' => 'Il campo Nome e Cognome non deve superare i :max caratteri.',
            'order.delivery_address.required' => 'Il campo Indirizzo di consegna è richiesto.',
            'order.delivery_address.string' => 'Il campo Indirizzo di consegna deve essere una stringa.',
            'order.delivery_address.max' => 'Il campo Indirizzo di consegna non deve superare i :max caratteri.',
            'order.delivery_address.min' => 'Il campo Indirizzo di consegna deve essere lungo almeno :min caratteri.',
            'order.delivery_contact.required' => 'Il campo Numero di telefono è richiesto.',
            'order.delivery_contact.string' => 'Il campo Numero di telefono deve essere una stringa.',
            'order.delivery_contact.max' => 'Il campo Numero di telefono non deve superare i :max caratteri.',
            'order.delivery_contact.min' => 'Il campo Numero di telefono deve essere di almeno :min caratteri.',
            'order.email_address.required' => 'Il campo Email è richiesto.',
            'order.email_address.string' => 'Il campo Email deve essere una stringa.',
            'order.email_address.email' => 'Il campo Email deve essere un indirizzo email valido.',
            'order.email_address.max' => 'Il campo Email non deve superare i :max caratteri.',
            'order.email_address.regex' => 'Il campo Email deve essere un indirizzo email valido.'
        ];
        // validator rules
        $validator = Validator::make($request->all(), [
            'order.costumer_name' => 'required|string|max:64',
            'order.delivery_address' => 'required|string|max:128|min:5',
            'order.delivery_contact' => 'required|string|max:15|min:10',
            'order.email_address' => 'required|string|email|max:255|regex:/^.+@.+\..+$/',
        ], $customMessages);

        // if validator fails send errors back to front-end
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // new order instances
        $order = new Order();
        $order->total_price = $request->input('order.total_price');

        // get the restaurant of the first food item in the order
        $restaurant = Restaurant::findOrFail($request->input('order.food.0.restaurant_id'));
        // add the restaurant's prezzo_spedizione to the total price
        $order->total_price += $restaurant->prezzo_spedizione;

        $order->status = $request->input('order.status');
        $order->costumer_name = $request->input('order.costumer_name');
        $order->delivery_address = $request->input('order.delivery_address');
        $order->delivery_contact = $request->input('order.delivery_contact');

        // Current date
        $order->order_date = \DateTime::createFromFormat('d-m-Y H:i:s', now()->format('d-m-Y H:i:s'));
        $order->save();

        // Connect the order with the food items in the order
        $foods = $request->input('order.food.*');
        foreach ($foods as $food) {
            $order->foods()->attach($food['id'], ['quantity' => $food['quantity']]);
        }

        // // Get the user related to the restaurant
        // $user = $restaurant->user;

        Mail::to($restaurant->user->email)->send(new NewOrder($order, $restaurant, $request->input('order.email_address')));

        Mail::to($request->input('order.email_address'))->send(new NewOrderGuest($request, $order, $restaurant));

        return response()->json(['message' => 'Order created'], 201);
    });


    // ORDER RATING
    Route::post('/orders/{order}/rate', function (Illuminate\Http\Request $request, $order) {
        $order = Order::findOrFail($order);

        $validator = Validator::make($request->all(), [
            'rating' => 'required|integer|min:1|max:10',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $order->rating = $request->input('rating');
        $order->save();
        
        return redirect()->back()->with('success', 'Thank you for rating the order!');
    })->name('orders.rate');
});



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });