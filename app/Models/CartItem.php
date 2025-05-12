<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'cartitems';

    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    
}
