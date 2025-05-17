<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class ResourcesController extends Controller
{
    public function blog()
    {
        Log::info('--- Blog Page: Starting to fetch articles ---');
        // Log a few recent articles regardless of status/date for debugging
        $debug_articles = Article::orderBy('created_at', 'desc')->limit(5)->get(['id', 'title', 'status', 'published_at', 'created_at']);
        Log::info('Debug: Checking last 5 created articles (or fewer if less than 5 exist):');
        if ($debug_articles->isEmpty()) {
            Log::info('Debug: No articles found in the database at all.');
        } else {
            foreach ($debug_articles as $article_debug) {
                Log::info('Debug Article Details: ID=' . $article_debug->id . ', Title=' . Str::limit($article_debug->title, 30) . ', Status=' . $article_debug->status . ', PublishedAt=' . $article_debug->published_at . ', CreatedAt=' . $article_debug->created_at);
            }
        }
        Log::info('---');

        // First, check if there's a featured article
        $featuredArticle = Article::where('status', 'published')
                            ->where('published_at', '<=', now())
                            ->where('is_featured', true)
                            ->with('category', 'author')
                            ->first();

        // Then get all articles, excluding the featured one if it exists
        $articlesQuery = Article::where('status', 'published')
                            ->where('published_at', '<=', now());
                            
        // Don't include the featured article in the regular listing
        if ($featuredArticle) {
            $articlesQuery->where('id', '!=', $featuredArticle->id);
        }
        
        $articles = $articlesQuery->with('category', 'author')
                            ->latest('published_at')
                            ->paginate(10);

        $categories = Category::withCount(['articles' => function ($query) {
                                $query->where('status', 'published')->where('published_at', '<=', now());
                            }])
                            ->where('articles_count', '>', 0)
                            ->orderBy('name')
                            ->get();

        Log::info('Blog Page: Fetched articles for display. Total published & visible: ' . $articles->total());
        if ($articles->isEmpty() && !$debug_articles->isEmpty()) {
            Log::info('Blog Page: No articles are meeting the "published" status and "published_at <= now()" criteria.');
        }
        foreach ($articles as $article_item) {
            Log::info('Blog Page: Visible Article ID=' . $article_item->id . ', Title=' . Str::limit($article_item->title, 30));
        }
        Log::info('--- Blog Page: Finished fetching articles ---');

        $activeCategory = null;
        return view('resources.blog.index', compact('articles', 'categories', 'activeCategory', 'featuredArticle'));
    }

    public function blogByCategory($categorySlug)
    {
        $activeCategory = Category::where('slug', $categorySlug)->firstOrFail();

        // First, check if there's a featured article in this category
        $featuredArticle = Article::where('status', 'published')
                            ->where('published_at', '<=', now())
                            ->where('category_id', $activeCategory->id)
                            ->where('is_featured', true)
                            ->with('category', 'author')
                            ->first();

        // Then get all articles in this category, excluding the featured one if it exists
        $articlesQuery = Article::where('status', 'published')
                            ->where('published_at', '<=', now())
                            ->where('category_id', $activeCategory->id);
                            
        // Don't include the featured article in the regular listing
        if ($featuredArticle) {
            $articlesQuery->where('id', '!=', $featuredArticle->id);
        }
        
        $articles = $articlesQuery->with('category', 'author')
                            ->latest('published_at')
                            ->paginate(10); // Consider a config value for items per page

        // Fetch all categories again for display, marking the active one
        $categories = Category::withCount(['articles' => function ($query) {
                                $query->where('status', 'published')->where('published_at', '<=', now());
                            }])
                            ->where('articles_count', '>', 0)
                            ->orderBy('name')
                            ->get();

        // For the view, to optionally highlight the active category or adjust title
        $pageTitle = $activeCategory->name . ' Articles'; 
        $pageSubtitle = 'Browse articles in the category: ' . $activeCategory->name;

        return view('resources.blog.index', compact('articles', 'categories', 'activeCategory', 'pageTitle', 'pageSubtitle', 'featuredArticle'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)
                            ->where('status', 'published')
                            ->where('published_at', '<=', now())
                            ->with('category', 'author')
                            ->firstOrFail();

        // Calculate reading time (200 words per minute)
        $plainText = strip_tags($article->content);
        $wordCount = str_word_count($plainText);
        $readingTime = max(1, ceil($wordCount / 200));

        $articleDataForHeader = $article->forArticleHeader();

        $relatedArticlesData = Article::where('status', 'published')
            ->where('published_at', '<=', now())
            ->where('category_id', $article->category_id)
            ->where('id', '!=', $article->id)
            ->with('category', 'author')
            ->latest('published_at')
            ->take(3)
            ->get()
            ->map(function($relatedArticle) {
                return [
                    'title' => $relatedArticle->title,
                    'excerpt' => Str::limit($relatedArticle->excerpt, 100),
                    'url' => route('blog.show', $relatedArticle->slug),
                    'thumbnail' => $relatedArticle->image_path ? asset('storage/' . $relatedArticle->image_path) : null,
                ];
            })->toArray();

        return view('resources.blog.show', compact('article', 'articleDataForHeader', 'relatedArticlesData', 'readingTime'));
    }

    public function toolkit()
    {
        return view('resources.toolkit.index');
    }

    public function designSystem()
    {
        return view('resources.design-system.index');
    }
} 