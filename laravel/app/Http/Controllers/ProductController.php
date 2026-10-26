<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('menu', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('menu-detail', compact('product'));
    }
}
