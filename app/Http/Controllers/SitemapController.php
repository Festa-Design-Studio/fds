<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Project;
use App\Models\Category;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SitemapController extends Controller
{
    /**
     * Main sitemap index - lists all sitemap files
     */
    public function index()
    {
        $sitemaps = [
            [
                'url' => route('sitemap.static'),
                'lastmod' => now()->toAtomString(),
            ],
            [
                'url' => route('sitemap.blog'),
                'lastmod' => $this->getLatestBlogDate(),
            ],
            [
                'url' => route('sitemap.work'),
                'lastmod' => $this->getLatestWorkDate(),
            ],
        ];

        return response()->view('sitemaps.index', compact('sitemaps'))
            ->header('Content-Type', 'application/xml');
    }

    /**
     * Static pages sitemap
     */
    public function static()
    {
        $urls = Cache::remember('sitemap_static', 86400, function () {
            return [
                [
                    'url' => route('home'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '1.0'
                ],
                [
                    'url' => route('about'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.9'
                ],
                [
                    'url' => route('about.team'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.8'
                ],
                [
                    'url' => route('about.process'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.8'
                ],
                [
                    'url' => route('about.focus'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.7'
                ],
                [
                    'url' => route('about.design-for-good'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.7'
                ],
                [
                    'url' => route('services'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.9'
                ],
                [
                    'url' => route('services.project-design'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.8'
                ],
                [
                    'url' => route('services.communication-design'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.8'
                ],
                [
                    'url' => route('services.campaign-design'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.8'
                ],
                [
                    'url' => route('services.sectors.nonprofits'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.7'
                ],
                [
                    'url' => route('services.sectors.startup'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.7'
                ],
                [
                    'url' => route('work'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'weekly',
                    'priority' => '0.9'
                ],
                [
                    'url' => route('resources.blog'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'daily',
                    'priority' => '0.8'
                ],
                [
                    'url' => route('resources.toolkit'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'weekly',
                    'priority' => '0.7'
                ],
                [
                    'url' => route('resources.design-system'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.6'
                ],
                [
                    'url' => route('contact'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'yearly',
                    'priority' => '0.8'
                ],
                [
                    'url' => route('privacy'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'yearly',
                    'priority' => '0.3'
                ],
                [
                    'url' => route('terms'),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'yearly',
                    'priority' => '0.3'
                ],
            ];
        });

        return response()->view('sitemaps.static', compact('urls'))
            ->header('Content-Type', 'application/xml');
    }

    /**
     * Blog articles sitemap
     */
    public function blog()
    {
        $urls = Cache::remember('sitemap_blog', 3600, function () {
            $urls = [];

            // Blog categories
            $categories = Category::withCount(['articles' => function ($query) {
                $query->where('status', 'published')->where('published_at', '<=', now());
            }])
            ->where('articles_count', '>', 0)
            ->get();

            foreach ($categories as $category) {
                $urls[] = [
                    'url' => route('resources.blog.category', $category->slug),
                    'lastmod' => $category->updated_at->toAtomString(),
                    'changefreq' => 'weekly',
                    'priority' => '0.6'
                ];
            }

            // Published blog articles
            $articles = Article::where('status', 'published')
                ->where('published_at', '<=', now())
                ->orderBy('published_at', 'desc')
                ->get();

            foreach ($articles as $article) {
                $urls[] = [
                    'url' => route('blog.show', $article->slug),
                    'lastmod' => $article->updated_at->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => $article->is_featured ? '0.8' : '0.7'
                ];
            }

            return $urls;
        });

        return response()->view('sitemaps.blog', compact('urls'))
            ->header('Content-Type', 'application/xml');
    }

    /**
     * Client work/projects sitemap
     */
    public function work()
    {
        $urls = Cache::remember('sitemap_work', 3600, function () {
            $urls = [];

            // Published projects
            $projects = Project::whereNotNull('published_at')
                ->where('published_at', '<=', now())
                ->orderBy('published_at', 'desc')
                ->get();

            foreach ($projects as $project) {
                $urls[] = [
                    'url' => route('work.show', $project->slug),
                    'lastmod' => $project->updated_at->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => $project->is_featured ? '0.9' : '0.8'
                ];
            }

            // Client pages (if they have projects)
            $clients = Client::whereHas('projects', function ($query) {
                $query->whereNotNull('published_at')->where('published_at', '<=', now());
            })->get();

            foreach ($clients as $client) {
                $urls[] = [
                    'url' => route('client.show', $client->slug),
                    'lastmod' => $client->updated_at->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.6'
                ];
            }

            return $urls;
        });

        return response()->view('sitemaps.work', compact('urls'))
            ->header('Content-Type', 'application/xml');
    }

    /**
     * Get the latest blog article date
     */
    private function getLatestBlogDate()
    {
        $latest = Article::where('status', 'published')
            ->where('published_at', '<=', now())
            ->latest('updated_at')
            ->first();

        return $latest ? $latest->updated_at->toAtomString() : now()->toAtomString();
    }

    /**
     * Get the latest work project date
     */
    private function getLatestWorkDate()
    {
        $latest = Project::whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->latest('updated_at')
            ->first();

        return $latest ? $latest->updated_at->toAtomString() : now()->toAtomString();
    }
}
