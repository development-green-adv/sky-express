<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
    protected $fillable = [

        'title',
        'subtitle',
        'text',
        'date',
        'time_from',
        'time_to',
        'main_image',
        'image_gallery',
        'video_gallery',
        'status',
        'lang'

    ];

}
