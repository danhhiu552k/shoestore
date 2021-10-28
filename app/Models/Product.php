<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'menu_id',
        'price',
        'price_sale',
        'active',
        'hot',
        'quantity',
        'description',
        'content',
        'thumb',
    ];

    public function images()
    {
        return $this->hasMany(Product_image::class);
    }

}
