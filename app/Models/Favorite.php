<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $table = 'favorites';

    protected $fillable = [
        'user_id',
        'product_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
