<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GenericClassWithMedia;
class Category extends Model
{
    use GenericClassWithMedia;

    protected $fillable =[
        'name',
        'status',
        'type',
        'url_img'
    ];
    protected $images_attr = ['url_img'];
    protected $folder_images = 'category_images';

    public function categoryProducts()
    {
        return $this->hasMany(CategoryProduct::class);
    }
}
