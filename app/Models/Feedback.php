<?php

namespace App\Models;

use App\Enums\FeedbackTopicEnum;
use App\Enums\ServiceEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Feedback extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['name', 'contact', 'text', 'is_visible_on_homepage', 'topic', 'service', 'rating', 'created_at'];

    protected $casts = [
        'is_visible_on_homepage' => 'boolean',
        'topic' => FeedbackTopicEnum::class,
        'service' => ServiceEnum::class,
    ];
}
