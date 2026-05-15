<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Gallery extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'alt',
        'meta_title',
        'sort_order',
        'is_visible_on_slideshow',
        'is_visible',
    ];

    protected $casts = [
        'is_visible_on_slideshow' => 'boolean',
        'sort_order' => 'integer',
    ];
}
