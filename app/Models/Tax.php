<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{

    protected $table = 'taxes';
    protected $guarded = [];

    public function prices()
    {
        return $this->hasMany(Price::class, 'tax_id')->where('active', 1);

    }
}