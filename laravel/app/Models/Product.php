<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'protein_grams',
        'calories',
        'image',
        'image_path',
        'shopee_url',
        'description',
    ];

    public const DEFAULT_SHOPEE_URL = 'https://s.shopee.co.id/BV46KyWYa';

    public function getShopeeUrlAttribute(?string $value): string
    {
        return $value ?: self::DEFAULT_SHOPEE_URL;
    }

    public function getImagePathAttribute(?string $value): ?string
    {
        if ($value) {
            return $value;
        }

        return $this->image ? 'images/products/' . $this->image : null;
    }
}
