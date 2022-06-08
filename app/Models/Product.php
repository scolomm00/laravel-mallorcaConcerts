<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    protected $table = 'products';
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class)->where('active', 1);
    }

    
}