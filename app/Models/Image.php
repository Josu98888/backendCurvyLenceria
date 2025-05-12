<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'url',
        'is_primary',
        'product_id',
    ];

    protected $hiden = [
        'created_at',
        'updated_at',
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
