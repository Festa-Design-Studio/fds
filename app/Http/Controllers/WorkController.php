<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\WorkMetric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WorkController extends Controller
{
    public function index()
    {
        // Get published projects
        $projects = Project::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->get();

        // Get metrics and log them for debugging
        $metrics = WorkMetric::orderBy('display_order')->get();
        Log::info('Work Metrics:', $metrics->toArray());
        
        $metrics = $metrics->map(function($metric) {
            return [
                'value' => $metric->value,
                'title' => $metric->title,
                'description' => $metric->description,
                'colorClass' => $metric->color_class
            ];
        });
        
        // Return response with no-cache headers
        return response()
            ->view('work.index', compact('projects', 'metrics'))
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
            ->header('Pragma', 'no-cache')
            ->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
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