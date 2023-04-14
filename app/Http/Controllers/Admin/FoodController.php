<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\UpdateFoodRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $nameFromSearch = request()->input('name');

        if (isset($nameFromSearch)) {
            $food = Auth::user()->restaurant->food()->where('name', 'LIKE', '%' . $nameFromSearch . '%')->get();
        } else {
            $food = Auth::user()->restaurant->food;
        }

        return view('admin/food/index', compact('food'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFoodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodRequest $request)
    {
        $data = $request->validated();

        // RESTAURANT ID
        $restaurant_id = Auth::user()->restaurant->id;
        $data['restaurant_id'] = $restaurant_id;

        // IMAGE
        if (array_key_exists('image', $data)) {
            $imgPath = Storage::put('food', $data['image']);
            $data['image'] = $imgPath;
        }

        $newFood = Food::create($data);

        return redirect()->route('admin.food.show', $newFood->id)->with('success', 'Piatto creato con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        // Verifica appartenenza di food con ristorante dell'utente loggato
        if ($food->restaurant->user_id !== Auth::id()) {
            abort(403);
        }

        

        return view('admin.food.show', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        return view('admin.food.edit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFoodRequest  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoodRequest $request, Food $food)
    {
        $data = $request->validated();

        if (array_key_exists('delete_image', $data)) {
            if ($food->image) {
                Storage::delete($food->image);

                $food->image = null;
                $food->save();
            }
        }
        if (array_key_exists('image', $data)) {
            $imgPath = Storage::put('food', $data['image']);
            $data['image'] = $imgPath;

            if ($food->image) {
                Storage::delete($food->image);
            }
        }


        $food->update($data);

        return redirect()->route('admin.food.show', $food->id)->with('success', 'Piatto aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        // Verifica appartenenza di food con ristorante dell'utente loggato
        if (auth()->user()->restaurant->id !== $food->restaurant_id) {
            abort(403, 'Unauthorized action.');
        }

        if ($food->image) {
            Storage::delete($food->image);
        }

        $food->delete();

        return redirect()->route('admin.food.index')->with('success', 'Il piatto ' . ucfirst($food->title) . ' e stato cancellato con successo ');
    }
}
