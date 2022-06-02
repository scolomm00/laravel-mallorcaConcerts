<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{

    //protected $table = 'product_categories';
    protected $with = ['products'];
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
} 