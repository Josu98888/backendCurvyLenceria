<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';

    protected $fillable = [
        'user_id',
        'type',
        'title',
        'message',
        'is_sent',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
