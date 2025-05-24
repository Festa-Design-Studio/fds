<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Toolkit extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image_path',
        'link_url',
        'link_text',
        'toolkit_category_id',
        'tags',
        'is_featured',
        'is_published',
        'published_at',
        'sort_order',
    ];

    protected $casts = [
        'tags' => 'array',
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(ToolkitCategory::class, 'toolkit_category_id');
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($toolkit) {
            if (empty($toolkit->slug)) {
                $toolkit->slug = Str::slug($toolkit->title);
                $originalSlug = $toolkit->slug;
                $count = 1;
                while (static::where('slug', $toolkit->slug)->exists()) {
                    $toolkit->slug = $originalSlug . '-' . $count++;
                }
            }
        });
        
        static::updating(function ($toolkit) {
            if ($toolkit->isDirty('title') && empty($toolkit->getOriginal('slug'))) {
                $toolkit->slug = Str::slug($toolkit->title);
                $originalSlug = $toolkit->slug;
                $count = 1;
                while (static::where('slug', $toolkit->slug)->where('id', '!=', $toolkit->id)->exists()) {
                    $toolkit->slug = $originalSlug . '-' . $count++;
                }
            }
        });
    }
} 