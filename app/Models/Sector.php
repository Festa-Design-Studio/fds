<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
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
        // Expertise Section
        'expertise_eyebrow',
        'expertise_title',
        'expertise_description',
        'expertise_items',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_active' => 'boolean',
        'expertise_items' => 'array',
    ];

    /**
     * Get the projects for this sector.
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
