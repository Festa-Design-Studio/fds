<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\ArticleRating;
use Illuminate\Support\Facades\Log;

class RateArticle extends Component
{
    public $articleId;
    public $selectedRating = null;
    public $hasRated = false;

    public function mount($articleId)
    {
        $this->articleId = $articleId;
        $this->hasRated = ArticleRating::where('article_id', $articleId)
            ->where('ip_address', request()->ip())
            ->exists();
    }

    public function rate($rating)
    {
        Log::info('Livewire RateArticle: rate() called', [
            'articleId' => $this->articleId,
            'rating' => $rating,
            'hasRated' => $this->hasRated,
            'ip' => request()->ip(),
        ]);
        if ($this->hasRated) return;

        ArticleRating::create([
            'article_id' => $this->articleId,
            'rating' => $rating,
            'ip_address' => request()->ip(),
        ]);
        $this->selectedRating = $rating;
        $this->hasRated = true;
        $this->dispatch('rating-success');
    }

    public function render()
    {
        $average = ArticleRating::where('article_id', $this->articleId)->avg('rating');
        $count = ArticleRating::where('article_id', $this->articleId)->count();
        Log::info('Livewire RateArticle: render()', [
            'articleId' => $this->articleId,
            'average' => $average,
            'count' => $count,
            'selectedRating' => $this->selectedRating,
            'hasRated' => $this->hasRated,
        ]);
        return view('livewire.blog.rate-article', [
            'average' => $average,
            'count' => $count,
        ]);
    }
}
