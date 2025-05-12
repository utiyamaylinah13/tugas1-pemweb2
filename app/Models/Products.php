<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
    'name', 'slug', 'description', 'sku', 'price',
    'stock', 'product_category_id', 'image_url', 'is_active'
];


    public function category()
    {
        return $this->belongsTo(ProductsCategories::class, 'product_category_id');
    }
}