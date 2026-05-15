<?php

namespace App\Models;

use App\Enums\OrderStatus;
use App\Enums\ServiceEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Order extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'contact',
        'address',
        'square_area',
        'has_elevator',
        'has_water',
        'has_parking',
        'room_count',
        'floor_count',
        'contamination_level',
        'is_urgent',
        'text',
        'service',
        'status',
        'comment',
    ];

    protected $casts = [
        'service' => ServiceEnum::class,
        'status' => OrderStatus::class,
        'has_elevator' => 'boolean',
        'has_water' => 'boolean',
        'has_parking' => 'boolean',
        'is_urgent' => 'boolean',
    ];
}
