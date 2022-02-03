<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GenericClassWithMedia;
class Product extends Model
{
    use GenericClassWithMedia;
    protected $fillable = [
        'title',
        'abstract',
        'url_img',
        'content',
        'type',
        'amount',
        'user_id',
        'status'
    ];
    protected $images_attr = ['url_img'];
    protected $folder_images = 'product_images';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function categoryProducts()
    {
        return $this->hasMany(CategoryProduct::class);
    }
    public function userServices ()
    {
        return $this->hasMany(UserProducService::class);
    }
}
