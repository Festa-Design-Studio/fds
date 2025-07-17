<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'description',
        'content',
        'expertise_title',
        'expertise_description',
        'is_active',
        'display_order',
        // SEO fields
        'meta_description',
        'meta_keywords',
        'og_title',
        'og_description',
        'og_image',
        'twitter_title',
        'twitter_description',
        'twitter_image',
        'structured_data',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'display_order' => 'integer',
        'structured_data' => 'array',
    ];

    public function deliverables(): HasMany
    {
        return $this->hasMany(ServiceDeliverable::class);
    }
}
