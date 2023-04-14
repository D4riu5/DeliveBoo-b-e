<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Food_detail;
use App\Http\Requests\StoreFood_detailRequest;
use App\Http\Requests\UpdateFood_detailRequest;

class FoodDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreFood_detailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFood_detailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food_detail  $food_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Food_detail $food_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food_detail  $food_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Food_detail $food_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFood_detailRequest  $request
     * @param  \App\Models\Food_detail  $food_detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFood_detailRequest $request, Food_detail $food_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food_detail  $food_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food_detail $food_detail)
    {
        //
    }
}
