<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GenericClassWithMedia;

class News extends Model
{
  use GenericClassWithMedia;

  protected $images_attr = ['url_img'];
  protected $folder_images = 'news_images';
  protected $fillable = [
    'title',
    'abstract',
    'url_img',
    'content',
    'status',
    'order'
  ];
}
