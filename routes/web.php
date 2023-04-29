<?php

use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// 
// Controllers
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\StatisticsController;
//Models
use App\Models\Restaurant;
use App\Models\Type;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect(env('APP_FRONTEND_URL'));
});


//*** OLD BACK-END homepage */
// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::resource('restaurant', RestaurantController::class)->only(['edit', 'update', 'show']);
    Route::resource('type', TypeController::class)->only(['index', 'show']);
    Route::resource('order', OrderController::class)->only(['index', 'show']);
    Route::resource('food', FoodController::class);

    Route::get('/statistics', [StatisticsController::class, 'index'])->name('statistics');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// EMAIL VERIFICATION
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

require __DIR__.'/auth.php';
