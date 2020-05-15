<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
}

    /**
     * Display a product's page
     *
     * @param $id
     */
    public function show($id)
    {

        $order = Order::where('id', '=', $id)->get()->first();
        if (!$order) {
            abort(404);
        }
        return view('orders.single', compact('order'));
    }
}
