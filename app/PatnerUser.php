<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GenericClassWithMedia;

class PatnerUser extends Model
{
  use GenericClassWithMedia;
  protected $fillable = [
    'user_id',
    'information',
    'url_img',
    'name_complete'
  ];

  protected $images_attr = ['url_img'];
  protected $folder_images = 'partnerUser_images';
}
