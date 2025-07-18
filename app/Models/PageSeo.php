<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSeo extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_identifier',
        'page_title',
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
        'content',
    ];

    protected $casts = [
        'structured_data' => 'array',
        'content' => 'array',
    ];

    /**
     * Get SEO data for a specific page
     */
    public static function getForPage(string $pageIdentifier): ?PageSeo
    {
        return static::where('page_identifier', $pageIdentifier)->first();
    }

    /**
     * Get or create SEO data for a specific page
     */
    public static function getOrCreateForPage(string $pageIdentifier, string $pageTitle = null): PageSeo
    {
        return static::firstOrCreate(
            ['page_identifier' => $pageIdentifier],
            ['page_title' => $pageTitle ?: ucfirst($pageIdentifier)]
        );
    }

    /**
     * Get all available page identifiers
     */
    public static function getAvailablePages(): array
    {
        return [
            'home' => 'Home Page',
            'about' => 'About Us',
            'design_for_good' => 'We Design for Good',
            'contact' => 'Contact',
            'blog_index' => 'Blog Index',
            'toolkit' => 'Toolkit',
        ];
    }
}