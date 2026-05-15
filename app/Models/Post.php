<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public const COLLECTION_COVER = 'posts';

    protected $fillable = [
        'title',
        'slug',
        'body',
        'meta_title',
        'meta_description',
        'meta_robots',
        'is_published',
        'published_at',
    ];

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'published_at' => 'datetime',
            'body' => 'array',
        ];
    }

    #[Scope]
    protected function published(Builder $query): void
    {
        $query->where('is_published', true)->whereNotNull('published_at');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection(self::COLLECTION_COVER)
            ->singleFile()
            ->useFallbackUrl('/images/placeholder-post.webp')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp']);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('preview')
            ->fit(Fit::Crop, 450, 300)
            ->format('webp')
            ->quality(95)
            ->withResponsiveImages()
            ->nonQueued();

        $this->addMediaConversion('header')
            ->fit(Fit::Crop, 1600, 800)
            ->format('webp')
            ->quality(95)
            ->withResponsiveImages()
            ->performOnCollections(self::COLLECTION_COVER)
            ->nonQueued();
    }

    protected function readingTime(): Attribute
    {
        return Attribute::get(function () {
            $content = is_array($this->body)
                ? json_encode($this->body, JSON_UNESCAPED_UNICODE)
                : (string) $this->body;

            $cleanContent = strip_tags($content);
            $wordCount = count(preg_split('/\s+/u', $cleanContent, -1, PREG_SPLIT_NO_EMPTY));

            return max(1, (int) ceil($wordCount / 200));
        });
    }
}
