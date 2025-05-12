<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductsCategories extends Model
{
    use HasFactory;
    protected $table = 'product_categories';
    protected $fillable = ['name_categories']; // Minimal untuk kolom 'name'
    public function products()
    {
        return $this->hasMany(Products::class, 'product_category_id');
    }
};