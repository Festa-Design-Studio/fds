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
        $query = Project::query();

        // Apply filters if present
        if ($request->has('sector') && $request->sector != '') {
            $query->where('sector', $request->sector);
        }

        if ($request->has('industry') && $request->industry != '') {
            $query->where('industry', $request->industry);
        }

        if ($request->has('sdg') && $request->sdg != '') {
            $query->where('sdg_alignment', 'like', '%' . $request->sdg . '%');
        }

        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('excerpt', 'like', '%' . $request->search . '%');
        }

        $projects = $query->paginate(10);

        return view('admin.work.index', compact('projects'));
    }

    /**
     * Show the form for creating a new work/project.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.work.create');
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
        return view('admin.work.edit', compact('project'));
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