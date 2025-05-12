<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'orderitems';

    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'quantity',
        'subtotal',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
