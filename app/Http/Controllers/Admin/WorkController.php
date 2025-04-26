<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WorkController extends Controller
{
    /**
     * Display a listing of the work/projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // We'll handle filtering in JavaScript now, so just load all projects
        // For backward compatibility, maintain the query parameters but don't apply them server-side
        $projects = Project::query()->orderBy('created_at', 'desc')->get();
        
        return view('admin.work.index', compact('projects'));
    }

    /**
     * Show the form for creating a new work/project.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = \App\Models\Client::orderBy('name')->get();
        return view('admin.work.create', compact('clients'));
    }

    /**
     * Store a newly created work/project in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'sector' => 'required|string',
            'industry' => 'required|string',
            'sdg_alignment' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
            'published_at' => 'required|date',
            'client_id' => 'nullable|exists:clients,id',
        ]);

        $project = new Project();
        $project->title = $request->title;
        $project->slug = Str::slug($request->title);
        $project->excerpt = $request->excerpt;
        $project->content = $request->content;
        $project->sector = $request->sector;
        $project->industry = $request->industry;
        $project->sdg_alignment = $request->sdg_alignment;
        $project->is_featured = $request->has('is_featured') ? 1 : 0;
        $project->published_at = $request->published_at;
        $project->client_id = $request->client_id;

        // Handle file upload
        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('uploads/projects', $filename, 'public');
            $project->featured_image = $path; // Store the relative path without 'public/'
        }

        $project->save();

        return redirect()->route('admin.work.index')->with('success', 'Work case study created successfully.');
    }

    /**
     * Show the form for editing the specified work/project.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $clients = \App\Models\Client::orderBy('name')->get();
        return view('admin.work.edit', compact('project', 'clients'));
    }

    /**
     * Update the specified work/project in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'sector' => 'required|string',
            'industry' => 'required|string',
            'sdg_alignment' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
            'published_at' => 'required|date',
            'client_id' => 'nullable|exists:clients,id',
        ]);

        $project = Project::findOrFail($id);
        $project->title = $request->title;
        
        // Only update slug if title changed
        if ($project->title != $request->title) {
            $project->slug = Str::slug($request->title);
        }
        
        $project->excerpt = $request->excerpt;
        $project->content = $request->content;
        $project->sector = $request->sector;
        $project->industry = $request->industry;
        $project->sdg_alignment = $request->sdg_alignment;
        $project->is_featured = $request->has('is_featured') ? 1 : 0;
        $project->published_at = $request->published_at;
        $project->client_id = $request->client_id;

        // Handle file upload
        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('uploads/projects', $filename, 'public');
            $project->featured_image = $path; // Store the relative path without 'public/'
        }

        $project->save();

        return redirect()->route('admin.work.index')->with('success', 'Work case study updated successfully.');
    }

    /**
     * Remove the specified work/project from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('admin.work.index')->with('success', 'Work case study deleted successfully.');
    }
} 