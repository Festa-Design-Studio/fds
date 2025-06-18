<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'rating',
        'ip_address',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
