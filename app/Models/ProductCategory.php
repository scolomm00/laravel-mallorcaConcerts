<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Debugbar;

class ProductCategory extends Model
{

    protected $table = 'product_categories';
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id')->where('active', 1);

    }
}