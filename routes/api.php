<?php

use Braintree\Gateway;
use App\Http\Controllers\Api\RestaurantMenuController;
use App\Http\Controllers\Api\TypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
});



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });