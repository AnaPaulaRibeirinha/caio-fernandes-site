<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Clipping extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'source',
        'published_at',
        'excerpt',
        'content',
        'image',
        'external_url',
        'sort_order',
        'is_featured',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'date',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }
}