<?php

namespace App\Models;

use App\Enums\OrderStatus;
use App\Enums\ServiceEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'contact', 'service', 'text', 'status', 'comment'];

    protected $casts = [
        'service' => ServiceEnum::class,
        'status' => OrderStatus::class,
    ];
}
