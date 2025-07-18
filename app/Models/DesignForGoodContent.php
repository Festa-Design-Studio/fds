<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignForGoodContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_key',
        'title',
        'subtitle',
        'description',
        'content_data',
        'display_order',
        'is_active',
    ];

    protected $casts = [
        'content_data' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Get content for a specific section
     */
    public static function getForSection(string $sectionKey): ?DesignForGoodContent
    {
        return static::where('section_key', $sectionKey)
                    ->where('is_active', true)
                    ->first();
    }

    /**
     * Get all active sections ordered by display_order
     */
    public static function getAllActiveSections()
    {
        return static::where('is_active', true)
                    ->orderBy('display_order')
                    ->get();
    }

    /**
     * Get available section keys
     */
    public static function getAvailableSections(): array
    {
        return [
            'hero' => 'Hero Section',
            'mission' => 'Mission Section',
            'impact' => 'Impact Framework',
            'values' => 'Values Section',
        ];
    }
}
