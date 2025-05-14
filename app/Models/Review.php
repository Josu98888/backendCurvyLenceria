<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    
    protected $fillable = [
        'product_id',
        'user_id',
        'rating',
        'comment',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    function user() {
        return $this->belongsTo(User::class);
    }

    function product() {
        return $this->belongsTo(Product::class);
    }
}
