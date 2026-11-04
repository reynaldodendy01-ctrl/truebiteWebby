<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    private const FLAVOR_NAMES = [
        'original' => 'rich dark chocolate flavor',
        'almond'   => 'premium almond flavor',
        'cheese'   => 'premium cheese flavor',
        'peanut'   => 'crunchy peanut flavor',
    ];

    public function index()
    {
        $products = Product::all();

        return view('menu', compact('products'));
    }

    public function show(string $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        $variantKey   = $this->detectVariant($product->slug);
        $flavorName   = self::FLAVOR_NAMES[$variantKey] ?? 'delicious flavor';
        $dietaryLabel = ($variantKey === 'almond') ? 'Gluten-free' : 'Gluten-free & low sugar';

        return view('menu-detail', compact('product', 'flavorName', 'dietaryLabel'));
    }

    private function detectVariant(string $slug): string
    {
        $slugLower = strtolower($slug);

        foreach (['cheese', 'almond', 'peanut', 'original'] as $variant) {
            if (str_contains($slugLower, $variant)) {
                return $variant;
            }
        }

        return 'original';
    }
}
