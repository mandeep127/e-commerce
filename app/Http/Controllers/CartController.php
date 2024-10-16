<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Fetch cart items from the session (dummy for now)
        $cartItems = [
            ['name' => 'Product 1', 'quantity' => 1, 'price' => 100],
        ];
        return view('cart.index', compact('cartItems'));
    }
}
