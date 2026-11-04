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
        'flavor_name',
        'dietary_label',
        'image_path',
        'shopee_url',
        'description',
    ];
}
