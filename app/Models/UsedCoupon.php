<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsedCoupon extends Model
{
    protected $table = 'used_coupons';

    protected $fillable = [
        'user_id',
        'coupon_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
