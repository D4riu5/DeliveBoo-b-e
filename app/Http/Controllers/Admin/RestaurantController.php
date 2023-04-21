<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Type;
use App\Models\Restaurant;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRestaurantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        if ($restaurant->user_id !== Auth::id()) {
            abort(403);
        }

        return view('admin.restaurant.show', compact('restaurant'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {

        if ($restaurant->user_id !== auth::id() ) {
            abort(403);
        }
        
        $types = Type::all();
        return view('admin.restaurant.edit', compact('restaurant', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRestaurantRequest  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        $data = $request->validated();

        // Se 'delete_image' è stato selezionata nella checkbox deil file edit:
        if (array_key_exists('delete_image', $data)) {
            //se nella tabella restaurant, image è popolato:
            if ($restaurant->image) {
                // Elimina nella memoria della tabella restaurant il dato contenuto nella colonna image 
                Storage::delete($restaurant->image);
                // Al posto del dato precedente imposta null come valore di default
                $restaurant->image = null;
                // Apporta le modifiche impostate
                $restaurant->save();
            }
        }

        // Se l'immagine è stata caricata
        if (array_key_exists('image', $data)) {
            // Crea una variabile di nome imgPath al cui interno
            // viene specificato il percorso per immettere in memoria il dato image nella tabella ristorante
            $imgPath = Storage::put('restaurant', $data['image']);
            // immetti il dato image caricato nel percorso imgPath specificato ↑
            $data['image'] = $imgPath;


            // Se è già presente un'immagine, elimina l'immagine già presente
            if ($restaurant->image) {
                Storage::delete($restaurant->image);
            }
        }

        // AGGIORNARE I DATI NEL MODEL RESTAURANT

        if ($restaurant !== null) {

            $restaurant->update($data);
        }

        if (array_key_exists('types', $data)) {

            $restaurant->types()->sync($data['types']);
        } else {

            $restaurant->types()->sync([]);
        }

        return redirect()->route('admin.restaurant.show', $restaurant->id)->with('success', 'Ristorante modificato con successo!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
