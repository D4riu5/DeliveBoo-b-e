<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    // Retrieve the value of the `sort_by` query parameter
    $sort_by = $request->input('sort_by', 'desc');
    
    // Sort the orders by the `order_date` field
    if ($sort_by == 'desc') {
        $orders = Auth::user()->restaurant->foods()->with('orders')->get()->pluck('orders')->flatten()->unique('id')->sortByDesc('order_date')->values();

        return view('admin.order.index', compact('orders'));
        
    } else {
        $orders = Auth::user()->restaurant->foods()->with('orders')->get()->pluck('orders')->flatten()->unique('id')->sortBy('order_date')->values();

        return view('admin.order.index', compact('orders'));
    }

}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        if ($order->foods()->first()->restaurant->user_id !== Auth::id()) {
            abort(403);
        }
        $order->with('foods');

        return view('admin.order.show', compact('order'));
    }
}
