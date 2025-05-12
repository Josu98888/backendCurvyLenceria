<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $table = 'shipments';

    protected $fillable = [
        'order_id',
        'tracking_number',
        'carrier',
        'status',
        'estimated_delivery',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
