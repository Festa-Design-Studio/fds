<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\PageSeo;
use App\Models\Project;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        // Cache the most recent published project for 30 minutes
        $latestProject = Cache::remember('home.latest_project', 1800, function () {
            return Project::whereNotNull('published_at')
                ->orderBy('published_at', 'desc')
                ->first();
        });

        // Cache the most recent published article for 15 minutes
        $latestArticle = Cache::remember('home.latest_article', 900, function () {
            return Article::where('status', 'published')
                ->whereNotNull('published_at')
                ->where('published_at', '<=', now())
                ->orderBy('published_at', 'desc')
                ->with(['category', 'author'])
                ->first();
        });

        // Cache page SEO data for 1 hour
        $pageSeo = Cache::remember('home.page_seo', 3600, function () {
            return PageSeo::getForPage('home');
        });

        return view('home', compact('latestProject', 'latestArticle', 'pageSeo'));
    }
}
