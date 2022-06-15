<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $guarded = [];

    public function payment()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id')->where('active', 1);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class)->where('active', 1);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class)->where('active', 1);
    }
}