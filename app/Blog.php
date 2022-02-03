<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GenericClassWithMedia;


class Blog extends Model
{
    use GenericClassWithMedia;

    protected $fillable = [
        'title',
        'content',
        'url_info',
        'url_img',
        'abstract',
        'status'
    ];
    protected $images_attr = ['url_img'];
    protected $folder_images = 'blog_images';
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
