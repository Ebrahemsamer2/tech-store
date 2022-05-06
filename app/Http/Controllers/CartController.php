<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index', [
            'cart' => \Cart::instance('default')->content(),
            'saveforlater' => \Cart::instance('later')->content()
        ]);
    }

    public function store(Request $request)
    {
        return Cart::store("default", $request);
    }

    public function destroy($rowId)
    {
        return Cart::remove("default", $rowId);
    }

    public function saveInCart($cartinstance, $id)
    {
        return Cart::store($cartinstance, "", $id);
    }

    public function removeFromCart($cartinstanse, $rowId)
    {
        return Cart::remove($cartinstanse, $rowId);
    }
}
