<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';

    protected $fillable = [
        'name',
        'desription'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
