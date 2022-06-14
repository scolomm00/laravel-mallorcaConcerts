<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class)->where('active', 1);
    }

    public function price()
    {
        return $this->hasOne(Price::class, 'product_id')->where('active', 1)->where('valid', 1);
    }

}