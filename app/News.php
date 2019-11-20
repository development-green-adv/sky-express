<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    
    protected $fillable = [

        'title',
        'subtitle',
        'text',
        'date',
        'main_image',
        'image_gallery',
        'video_gallery',
        'status',
        'lang'

    ];

}
