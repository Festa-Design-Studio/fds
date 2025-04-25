<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        return view('work.index');
    }

    public function caseStudy()
    {
        return view('work.case-study');
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
        
        // Get previous and next projects for navigation
        $previousProject = Project::where('id', '<', $project->id)->orderBy('id', 'desc')->first();
        $nextProject = Project::where('id', '>', $project->id)->orderBy('id', 'asc')->first();
        
        return view('work.show', compact('project', 'previousProject', 'nextProject'));
    }
} 