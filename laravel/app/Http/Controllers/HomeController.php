<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\Location;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $locations = Location::take(6)->get();
        $faqs = FAQ::take(3)->get();

        return view('home', compact('products', 'locations', 'faqs'));
    }
}
