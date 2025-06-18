<?php

namespace App\Livewire\Admin;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleRatingsDashboard extends Component
{
    use WithPagination;

    public $articleId = null;

    public $dateRange = null;

    public $perPage = 10;

    public function render()
    {
        $articles = Article::with('ratings')
            ->when($this->articleId, fn ($q) => $q->where('id', $this->articleId))
            ->paginate($this->perPage);

        $data = $articles->map(function ($article) {
            $ratings = $article->ratings;

            return [
                'title' => $article->title,
                'average' => $ratings->avg('rating'),
                'total' => $ratings->count(),
                'breakdown' => $ratings->groupBy('rating')->map->count(),
                'ips' => $ratings->pluck('ip_address')->unique(),
                'ratings_over_time' => $ratings->groupBy(fn ($r) => $r->created_at->format('Y-m-d'))->map->count(),
            ];
        });

        return view('livewire.admin.article-ratings-dashboard', [
            'articles' => $articles,
            'data' => $data,
        ]);
    }
}
