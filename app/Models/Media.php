<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /** @use HasFactory<\Database\Factories\MediaFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'type',
        'published_date',
        'link',
        'resource_image_path',
        'image',
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
