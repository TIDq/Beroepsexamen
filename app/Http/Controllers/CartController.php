<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show()
    {
        $cart = Cart::all()->sortBy('name');
        return view('cart.show', compact('cart'));
    }

}
