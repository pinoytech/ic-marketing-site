<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'event_webinar_date',
        'image',
        'resource_image_path',
        'status',
        'register_link',
        'watch_link',
        'description',
    ];
}
