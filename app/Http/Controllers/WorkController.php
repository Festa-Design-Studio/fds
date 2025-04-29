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
        Log::info('Raw Work Metrics:', $metrics->toArray());
        
        $metrics = $metrics->map(function($metric) {
            // Convert value to integer, removing any non-numeric characters
            $value = (int) preg_replace('/[^0-9]/', '', $metric->value);
            
            Log::info("Processing metric {$metric->id}:", [
                'original_value' => $metric->value,
                'processed_value' => $value
            ]);
            
            return [
                'id' => $metric->id,
                'value' => $value,
                'title' => $metric->title,
                'description' => $metric->description,
                'colorClass' => $metric->color_class
            ];
        });
        
        Log::info('Processed Work Metrics:', $metrics->toArray());
        
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
        
        // Get metrics for the show page
        $metrics = WorkMetric::orderBy('display_order')->get();
        $metrics = $metrics->map(function($metric) {
            // Convert value to integer, removing any non-numeric characters
            $value = (int) preg_replace('/[^0-9]/', '', $metric->value);
            
            Log::info("Processing metric for show page {$metric->id}:", [
                'original_value' => $metric->value,
                'processed_value' => $value
            ]);
            
            return [
                'id' => $metric->id,
                'value' => $value,
                'title' => $metric->title,
                'description' => $metric->description,
                'colorClass' => $metric->color_class
            ];
        });
        
        // Use the case-study-show template as per component showcase
        return view('work.case-study-show', compact('project', 'previousProject', 'nextProject', 'metrics'));
    }
} 