<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_name',
        'author_title',
        'quote',
        'author_avatar',
        'published',
        'display_order',
    ];

    protected $casts = [
        'published' => 'boolean',
        'display_order' => 'integer',
    ];

    public function scopePublished($query)
    {
        return $query->where('published', true)->orderBy('display_order', 'asc');
    }
}
