<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSector extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'description',
        'is_active',
        'display_order',
        // Hero Section
        'hero_eyebrow',
        'hero_title',
        'hero_description',
        'hero_button_text',
        // Challenge Section
        'challenge_eyebrow',
        'challenge_title',
        'challenge_description',
        'challenge_items',
        // Expertise Section
        'expertise_eyebrow',
        'expertise_title',
        'expertise_description',
        'expertise_items',
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
        'challenge_items' => 'array',
        'expertise_items' => 'array',
        'structured_data' => 'array',
    ];
}
