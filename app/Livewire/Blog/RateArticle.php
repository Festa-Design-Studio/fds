<?php

namespace App\Livewire\Blog;

use App\Models\ArticleRating;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class RateArticle extends Component
{
    public $articleId;

    public $selectedRating = null;

    public $hasRated = false;

    public $isLoading = false;

    public function mount($articleId)
    {
        $this->articleId = $articleId;
        $existingRating = ArticleRating::where('article_id', $articleId)
            ->where('ip_address', request()->ip())
            ->first();
        
        if ($existingRating) {
            $this->hasRated = true;
            $this->selectedRating = $existingRating->rating;
        }
    }

    public function rate($rating)
    {
        Log::info('Livewire RateArticle: rate() called', [
            'articleId' => $this->articleId,
            'rating' => $rating,
            'hasRated' => $this->hasRated,
            'ip' => request()->ip(),
        ]);
        if ($this->hasRated || $this->isLoading) {
            return;
        }

        $this->isLoading = true;

        try {
            ArticleRating::create([
                'article_id' => $this->articleId,
                'rating' => $rating,
                'ip_address' => request()->ip(),
            ]);
            $this->selectedRating = $rating;
            $this->hasRated = true;
            $this->dispatch('rating-success');
        } catch (\Exception $e) {
            Log::error('Rating submission failed', [
                'error' => $e->getMessage(),
                'articleId' => $this->articleId,
                'rating' => $rating,
            ]);
        } finally {
            $this->isLoading = false;
        }
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
