<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Support\Facades\Cache;

class UtilityController extends Controller
{
    public function privacy()
    {
        return view('utility.privacy');
    }

    public function terms()
    {
        return view('utility.terms');
    }

    public function sitemap()
    {
        $data = Cache::remember('html_sitemap', 3600, function () {
            return [
                'static_pages' => [
                    ['name' => 'Home', 'url' => route('home')],
                    ['name' => 'About Us', 'url' => route('about')],
                    ['name' => 'Our Team', 'url' => route('about.team')],
                    ['name' => 'Our Process', 'url' => route('about.process')],
                    ['name' => 'Services', 'url' => route('services')],
                    ['name' => 'Work', 'url' => route('work')],
                    ['name' => 'Blog', 'url' => route('resources.blog')],
                    ['name' => 'Contact', 'url' => route('contact')],
                ],
                'blog_categories' => Category::withCount(['articles' => function ($query) {
                    $query->where('status', 'published')->where('published_at', '<=', now());
                }])
                    ->where('articles_count', '>', 0)
                    ->orderBy('name')
                    ->get()
                    ->map(function ($category) {
                        return [
                            'name' => $category->name,
                            'url' => route('resources.blog.category', $category->slug),
                            'count' => $category->articles_count,
                        ];
                    }),
                'recent_articles' => Article::where('status', 'published')
                    ->where('published_at', '<=', now())
                    ->orderBy('published_at', 'desc')
                    ->limit(20)
                    ->get()
                    ->map(function ($article) {
                        return [
                            'title' => $article->title,
                            'url' => route('blog.show', $article->slug),
                            'published_at' => $article->published_at,
                        ];
                    }),
                'featured_projects' => Project::whereNotNull('published_at')
                    ->where('published_at', '<=', now())
                    ->where('is_featured', true)
                    ->orderBy('published_at', 'desc')
                    ->get()
                    ->map(function ($project) {
                        return [
                            'title' => $project->title,
                            'url' => route('work.show', $project->slug),
                            'client' => $project->client->name ?? null,
                        ];
                    }),
                'all_projects' => Project::whereNotNull('published_at')
                    ->where('published_at', '<=', now())
                    ->orderBy('published_at', 'desc')
                    ->limit(50)
                    ->get()
                    ->map(function ($project) {
                        return [
                            'title' => $project->title,
                            'url' => route('work.show', $project->slug),
                            'client' => $project->client->name ?? null,
                            'is_featured' => $project->is_featured,
                        ];
                    }),
                'clients' => Client::whereHas('projects', function ($query) {
                    $query->whereNotNull('published_at')->where('published_at', '<=', now());
                })
                    ->orderBy('name')
                    ->get()
                    ->map(function ($client) {
                        return [
                            'name' => $client->name,
                            'url' => route('client.show', $client->slug),
                            'projects_count' => $client->projects()->whereNotNull('published_at')->where('published_at', '<=', now())->count(),
                        ];
                    }),
            ];
        });

        return view('utility.sitemap', $data);
    }
}
