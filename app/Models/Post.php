<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['title', 'slug', 'content', 'is_published'];

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('preview-small')
            ->fit(Fit::Contain, 300, 400)
            ->format('WEBP')
            ->nonQueued();

        $this
            ->addMediaConversion('preview-large')
            ->fit(Fit::Contain, 600, 800)
            ->format('WEBP')
            ->nonQueued();

        $this
            ->addMediaConversion('header')
            ->fit(Fit::Contain, 400, 1280)
            ->format('WEBP')
            ->nonQueued();
    }
}
