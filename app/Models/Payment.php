<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';  

    protected $fillable = [
        'order_id',
        'payment_method',
        'status',
        'amount',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
