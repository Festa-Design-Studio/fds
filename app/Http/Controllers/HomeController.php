<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get the most recent published project
        $latestProject = Project::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->first();
        
        // Get the most recent published article
        $latestArticle = Article::where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->with(['category', 'author'])
            ->first();
        
        return view('home', compact('latestProject', 'latestArticle'));
    }
} 