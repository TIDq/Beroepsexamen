<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    /**
     * Shop index, display all products
     */
    public function index()
    {
        $products = Product::all()->sortBy('name');
        return view('products.index', compact('products'));
    }

    /**
     * Display a product's page
     *
     * @param $id
     */
    public function show($id)
    {

        $product = Product::where('id', '=', $id)->get()->first();
        if (!$product) {
            abort(404);
        }
        return view('products.single', compact('product'));

//        $product = Product::findOrFail($id);
    }

    /**
     * Add a product to the cart
     *
     * @param $id
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        if (!Session::get('cart'))
            Session::put('cart', []);
        Session::push('cart', $id);
        return back()->with('success', $product->name . ' added to cart');
    }

    /**
     * Clear the cart
     *
     * @param $id
     */
    public function emptyCart()
    {
        Session::forget('cart');
        return back()->with('success', 'Cart Emptied');
    }

    /**
     * Check out
     */
    public function checkout()
    {

    }


}
