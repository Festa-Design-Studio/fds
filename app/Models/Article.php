<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // For manual slug generation if not using a package

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'image_path',
        'user_id',
        'category_id',
        'published_at',
        'status',
        'is_featured',
        'meta_title',
        'meta_description',
        'reading_time',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
    ];

    /**
     * Get the author of the article.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the category of the article.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get all ratings for the article.
     */
    public function ratings()
    {
        return $this->hasMany(ArticleRating::class);
    }

    // Optional: If you're not using a sluggable package, you might auto-generate slugs.
    // protected static function boot()
    // {
    //     parent::boot();
    //     static::creating(function ($article) {
    //         if (empty($article->slug)) {
    //             $article->slug = Str::slug($article->title);
    //         }
    //     });
    //     static::updating(function ($article) {
    //        // Optionally update slug if title changes, be mindful of SEO implications
    //         if ($article->isDirty('title') && empty($article->slug_override)) { // slug_override can be a flag to prevent auto update
    //             $article->slug = Str::slug($article->title);
    //         }
    //     });
    // }

    /**
     * Prepare the article data for the ArticleHeader component.
     */
    public function forArticleHeader(): array
    {
        return [
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'category' => $this->category->name ?? null,
            'categoryType' => $this->category->slug ?? 'default',
            'colorClass' => $this->category->color_class ?? null,
            'image' => $this->image_path ? asset('storage/'.$this->image_path) : null, // Or a placeholder
            'published_at' => $this->published_at,
            'reading_time' => $this->reading_time,
            'author' => $this->author ? [
                'name' => $this->author->name,
                // Assuming User model has 'profile_photo_path' or similar, adjust as needed
                'avatar' => $this->author->profile_photo_path ? asset('storage/'.$this->author->profile_photo_path) : 'https://ui-avatars.com/api/?name='.urlencode($this->author->name),
                'title' => $this->author->job_title ?? 'Contributor', // Assuming User model might have a job_title
            ] : [
                'name' => 'Unknown Author',
                'avatar' => 'https://ui-avatars.com/api/?name=Unknown',
                'title' => 'Contributor',
            ],
        ];
    }
}
