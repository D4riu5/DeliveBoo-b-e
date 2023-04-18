<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Food_detail;
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

        // $newFood = Food::create($data);


        $newFood = new Food();
        //
        $newFood->name = $data['name'];
        $newFood->description = $data['description'];
        if (array_key_exists('image', $data)) {
            $newFood->image = $data['image'];
        }
        $newFood->price = $data['price'];
        $newFood->course = $data['course'];
        $newFood->restaurant_id = $data['restaurant_id'];
        $newFood->save();

        $newFoodDetail = new Food_detail();
        //
        if (array_key_exists('spicy', $data)) {
            $newFoodDetail->spicy = $data['spicy'];
        }

        if (array_key_exists('gluten_free', $data)) {
            $newFoodDetail->gluten_free = $data['gluten_free'];
        }
        if (array_key_exists('kcal', $data)) {
            $newFoodDetail->kcal = $data['kcal'];
        }

        $newFoodDetail->food_id = $newFood->id;

        $newFoodDetail->save();


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

        // Verifica appartenenza di food con ristorante dell'utente loggato
        if ($food->restaurant->user_id !== Auth::id()) {
            abort(403);
        }
        
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
        // Verifica appartenenza di food con ristorante dell'utente loggato
        if ($food->restaurant->user_id !== Auth::id()) {
            abort(403);
        }

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

        // QUESTO AGGIORNA I DATI PRESENTI NEL MODEL FOOD
        $food->update($data);


        //QUESTO AGGIORNA I DATI PRESENTI NEL MODEL FOOT_DETAIL
        $food_detail = $food->food_detail;


        if ($food_detail !== null) {
            // Controlla se $food_detail non e null

            if (array_key_exists('spicy', $data)) {
                // controlla se la chiave 'spicy' esiste in $data che viene da UpdateFoodRequest

                $food_detail->spicy = $data['spicy'];
            }

            if (array_key_exists('gluten_free', $data)) {
                // controlla se la chiave 'gluten_free' esiste in $data che viene da UpdateFoodRequest

                $food_detail->gluten_free = $data['gluten_free'];
            }

            $food_detail->kcal = $data['kcal'] ?? null;
            // assegna a kcal $data['kcal] se esiste, se no, assegna valore null


            $food_detail->save();
            // si puo usare sia save che update in questo caso per aggiornare i dati in tabella.
        }



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
