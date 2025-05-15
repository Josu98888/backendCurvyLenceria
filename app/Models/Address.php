<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'user_id',
        'street',
        'number',
        'postal_code',
        'city',
        'province',
        'country',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
