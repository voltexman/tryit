<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'color',
    ];

    public function posts(): BelongsToMany
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    public function products(): BelongsToMany
    {
        return $this->morphedByMany(Product::class, 'taggable');
    }
}
