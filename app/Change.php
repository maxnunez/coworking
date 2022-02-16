<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Change extends Model
{
    protected $fillable = [
        'user_id',
        'user_change_id',
        'product_id',
        'product_change_id',
        'status'
    ];
}
