<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(8);
        return view('products.index', [
            'products' => $products
        ]);
    }

    public function show(Product $product)
    {
        $related_products = $product->relatedProducts();
        return view('products.show', [
            'product' => $product,
            'related_products' => $related_products
        ]);
    }
}
