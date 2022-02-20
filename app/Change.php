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

    public function producto()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function productoChange()
    {
        return $this->belongsTo(Product::class, 'product_change_id');
    }

    public function userChange()
    {
        return $this->belongsTo(User::class, 'user_change_id');
    }
}
