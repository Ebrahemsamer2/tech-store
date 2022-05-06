<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::orderBy('updated_at', 'DESC')->paginate(16)
        ]);
    }

    public function show(Category $category)
    {
        $products = $category->products()->orderBy('updated_at', 'DESC')->paginate(16);
        return view('categories.show', [
            'category' => $category,
            'products' => $products
        ]);
    }
}
