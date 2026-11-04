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
                'name'          => 'TrueBite Crispy Brownies - Original',
                'slug'          => 'truebite-crispy-brownies-original',
                'price'         => 42000,
                'protein_grams' => 10,
                'calories'      => 260,
                'flavor_name'   => 'rich dark chocolate flavor',
                'dietary_label' => 'Gluten-free & low sugar',
                'image_path'    => 'images/products/crispy-brownies-original.jpg',
                'shopee_url'    => 'https://shopee.co.id/TrueBite-Protein-Snack-Original-Dark-Chocolate-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.44418065230',
                'description'   => 'A healthy, high-protein snack combining a rich dark chocolate flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
            ],
            [
                'name'          => 'TrueBite Crispy Brownies - Almond',
                'slug'          => 'truebite-crispy-brownies-almond',
                'price'         => 44000,
                'protein_grams' => 10,
                'calories'      => 260,
                'flavor_name'   => 'premium almond flavor',
                'dietary_label' => 'Gluten-free',
                'image_path'    => 'images/products/crispy-brownies-almond.jpg',
                'shopee_url'    => 'https://shopee.co.id/TrueBite-Protein-Snack-Almond-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.41667771939',
                'description'   => 'A healthy, high-protein snack combining a rich almond flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free, and sweetened with natural stevia for a smarter snacking choice.',
            ],
            [
                'name'          => 'TrueBite Crispy Brownies - Cheese',
                'slug'          => 'truebite-crispy-brownies-cheese',
                'price'         => 43000,
                'protein_grams' => 10,
                'calories'      => 260,
                'flavor_name'   => 'premium cheese flavor',
                'dietary_label' => 'Gluten-free & low sugar',
                'image_path'    => 'images/products/crispy-brownies-cheese.jpg',
                'shopee_url'    => 'https://shopee.co.id/True-Bite-Protein-Snack-Cheese-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.44168065411',
                'description'   => 'A healthy, high-protein snack combining a rich cheese flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
            ],
            [
                'name'          => 'TrueBite Crispy Brownies - Peanut',
                'slug'          => 'truebite-crispy-brownies-peanut',
                'price'         => 43000,
                'protein_grams' => 10,
                'calories'      => 270,
                'flavor_name'   => 'crunchy peanut flavor',
                'dietary_label' => 'Gluten-free & low sugar',
                'image_path'    => 'images/products/crispy-brownies-peanut.jpg',
                'shopee_url'    => 'https://shopee.co.id/TrueBite-Protein-Snack-Peanut-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free--i.1624412100.28341263349',
                'description'   => 'A healthy, high-protein snack combining a rich peanut flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(['slug' => $product['slug']], $product);
        }
    }
}
