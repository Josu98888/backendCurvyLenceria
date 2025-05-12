<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table  = 'orders';

    protected $fillable = [
        'user_id',
        'address_id',
        'coupon_id',
        'cost_despatch',
        'subtotal',
        'discount_coupons',
        'total',
        'status'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
