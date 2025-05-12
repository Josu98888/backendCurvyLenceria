<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    protected $table = 'productssize';

    protected $fillable = [
        'id',
        'size_id',
        'price',
        'stock',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
