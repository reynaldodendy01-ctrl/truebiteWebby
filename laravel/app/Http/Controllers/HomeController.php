<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;
use App\Models\Location;
use App\Models\Product;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::take(3)->get();
        $locations = Location::all();
        $faqs = FAQ::all();
        $testimonials = Testimonial::all();

        return view('home', compact('products', 'locations', 'faqs', 'testimonials'));
    }
}
