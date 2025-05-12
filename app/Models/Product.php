<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'color',
        'active'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function favorites() {
        return $this->hasMany(Favorite::class);
    }

    public function producstnormal() {
        return $this->hasMany(Productnormal::class);
    }

    public function productssize() {
        return $this->hasMany(Productsize::class);
    }
}
