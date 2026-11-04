<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'slug' => fake()->slug(),
            'price' => fake()->numberBetween(30000, 50000),
            'protein_grams' => 10,
            'calories' => 260,
            'image' => 'crispy-brownies-original.jpg',
            'image_path' => 'images/products/crispy-brownies-original.jpg',
            'shopee_url' => 'https://s.shopee.co.id/BV46KyWYa',
            'description' => fake()->paragraph(),
        ];
    }
}
