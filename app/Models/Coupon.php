<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = 'coupons';

    protected $fillable = [
        'code',
        'discount_percentage',
        'end_date',
        'amount_min',
        'use_max',
        'is_active',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'end_date' => 'datetime',
        'is_active' => 'boolean',
    ];
}
