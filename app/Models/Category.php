<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    /**
     * Get the articles associated with the category.
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    // Optional: If you're not using a sluggable package, you might auto-generate slugs.
    // protected static function boot()
    // {
    //     parent::boot();
    //     static::creating(function ($category) {
    //         if (empty($category->slug)) {
    //             $category->slug = \Illuminate\Support\Str::slug($category->name);
    //         }
    //     });
    //      static::updating(function ($category) {
    //         if ($category->isDirty('name') && empty($category->slug_override)) { 
    //             $category->slug = \Illuminate\Support\Str::slug($category->name);
    //         }
    //     });
    // }
}
