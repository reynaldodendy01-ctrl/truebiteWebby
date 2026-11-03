<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'id' => 1,
                'name' => 'TrueBite Crispy Brownies - Original',
                'slug' => 'truebite-crispy-brownies-original',
                'price' => 42000,
                'protein_grams' => 10,
                'calories' => 260,
                'image' => 'crispy-brownies-original.jpg',
                'description' => 'A healthy, high-protein snack combining a rich dark chocolate flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
            ],
            [
                'id' => 2,
                'name' => 'TrueBite Crispy Brownies - Almond',
                'slug' => 'truebite-crispy-brownies-almond',
                'price' => 44000,
                'protein_grams' => 10,
                'calories' => 260,
                'image' => 'crispy-brownies-almond.jpg',
                'description' => 'A healthy, high-protein snack combining a rich almond flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free, and sweetened with natural stevia for a smarter snacking choice.',
            ],
            [
                'id' => 3,
                'name' => 'TrueBite Crispy Brownies - Cheese',
                'slug' => 'truebite-crispy-brownies-cheese',
                'price' => 43000,
                'protein_grams' => 10,
                'calories' => 260,
                'image' => 'crispy-brownies-cheese.jpg',
                'description' => 'A healthy, high-protein snack combining a rich cheese flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
            ],
            [
                'id' => 4,
                'name' => 'TrueBite Crispy Brownies - Peanut',
                'slug' => 'truebite-crispy-brownies-peanut',
                'price' => 43000,
                'protein_grams' => 10,
                'calories' => 270,
                'image' => 'crispy-brownies-peanut.jpg',
                'description' => 'A healthy, high-protein snack combining a rich peanut flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(['id' => $product['id']], $product);
        }
    }
}
