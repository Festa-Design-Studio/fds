<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get the most recent published project
        $latestProject = Project::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->first();
            
        return view('home', compact('latestProject'));
    }
} 