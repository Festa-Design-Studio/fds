<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        // Get published projects
        $projects = Project::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->get();
        
        return view('work.index', compact('projects'));
    }
    
    /**
     * Display the specified project/case study.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        
        // Get previous and next projects for navigation (only published projects)
        $previousProject = Project::whereNotNull('published_at')
            ->where('id', '<', $project->id)
            ->orderBy('id', 'desc')
            ->first();
            
        $nextProject = Project::whereNotNull('published_at')
            ->where('id', '>', $project->id)
            ->orderBy('id', 'asc')
            ->first();
        
        // Use the case-study-show template as per component showcase
        return view('work.case-study-show', compact('project', 'previousProject', 'nextProject'));
    }
} 