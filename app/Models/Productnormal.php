<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productnormal extends Model
{
    protected $table = 'productsnormal';

    protected $fillable = [
        'price',
        'stock'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
