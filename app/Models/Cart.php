<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // use HasFactory;

    public static function remove($cartinstance, $rowId)
    {
        $cartname = $cartinstance == 'default' ? 'your' : $cartinstance;
        \Cart::instance($cartinstance)->remove($rowId);
        return redirect()->back()->with('success', 'Product has been removed from '. $cartinstance .' cart.');
    }

    public static function store($cartinstance, $request, $id = '')
    {
        $cartname = $cartinstance == 'default' ? 'your' : $cartinstance;

        // check the cart first
        if( $cartinstance !== 'default' )
        {
            // if wanna add item in wishlist or later cart remove it first from the main cart
            $product = Product::where('id', $id)->first();
            if( $item = self::isInCart("default", $id) )
            {
                self::remove("default", $item->rowId);
            }
            // check again if duplicate in the specific cart
            if( $item = self::isInCart($cartinstance, $product->id) )
            {
                // if item is already in the cart ( wishlist or later )
                return redirect()->back()->with('fail', 'Product is already in the '. $cartinstance .' cart.');
            }

            // item is not in the main cart and not duplicated in other carts.
            \Cart::instance($cartinstance)->add($product->id, $product->name, 1, $product->price)->associate(Product::class);
        }
        else
        {
            // remove the product from later and wishlist cart before added to main cart
            if( $item = self::isInCart("later", $request->id) )
            {
                self::remove("later", $item->rowId);
            }
            if( $item = self::isInCart("wishlist", $request->id) )
            {
                self::remove("wishlist", $item->rowId);
            }
            \Cart::instance($cartinstance)->add($request->id, $request->name, 1, $request->price)->associate(Product::class);
        }
        return redirect()->back()->with('success', 'Product has been added to '. $cartname .' cart.');
    }

    public static function isInCart($cartinstance, $id)
    {
        \Cart::instance($cartinstance);
        $items = \Cart::search(function($cartitem, $rowId) use ($id) {
            return $id == $cartitem->id;
        });

        if( $items->isNotEmpty() )
            return $items->first();

        return false;
    }
}