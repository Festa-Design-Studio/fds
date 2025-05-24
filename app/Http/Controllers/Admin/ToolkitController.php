<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Toolkit;
use App\Models\ToolkitCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ToolkitController extends Controller
{
    public function index()
    {
        $toolkits = Toolkit::with('category')
            ->latest()
            ->paginate(15);
        
        $categories = ToolkitCategory::active()->ordered()->get();
        
        return view('admin.toolkit.index', compact('toolkits', 'categories'));
    }

    public function create()
    {
        $categories = ToolkitCategory::active()->ordered()->get();
        return view('admin.toolkit.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'link_url' => 'nullable|url',
            'link_text' => 'nullable|string|max:255',
            'toolkit_category_id' => 'required|exists:toolkit_categories,id',
            'tags' => 'nullable|string',
        ]);

        // Handle checkbox values manually
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_published'] = $request->has('is_published');

        // Process tags: convert comma-separated string to array
        if (!empty($validated['tags'])) {
            $validated['tags'] = array_map('trim', explode(',', $validated['tags']));
            // Remove empty tags
            $validated['tags'] = array_filter($validated['tags'], function($tag) {
                return !empty($tag);
            });
            // Reset array keys
            $validated['tags'] = array_values($validated['tags']);
        } else {
            $validated['tags'] = [];
        }

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('toolkits', 'public');
        }

        Toolkit::create($validated);

        return redirect()->route('admin.toolkit.index')->with('success', 'Toolkit created successfully.');
    }

    public function show(Toolkit $toolkit)
    {
        return view('admin.toolkit.show', compact('toolkit'));
    }

    public function edit(Toolkit $toolkit)
    {
        $categories = ToolkitCategory::active()->ordered()->get();
        return view('admin.toolkit.edit', compact('toolkit', 'categories'));
    }

    public function update(Request $request, Toolkit $toolkit)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'link_url' => 'nullable|url',
            'link_text' => 'nullable|string|max:255',
            'toolkit_category_id' => 'required|exists:toolkit_categories,id',
            'tags' => 'nullable|string',
        ]);

        // Handle checkbox values manually
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_published'] = $request->has('is_published');

        // Process tags: convert comma-separated string to array
        if (!empty($validated['tags'])) {
            $validated['tags'] = array_map('trim', explode(',', $validated['tags']));
            // Remove empty tags
            $validated['tags'] = array_filter($validated['tags'], function($tag) {
                return !empty($tag);
            });
            // Reset array keys
            $validated['tags'] = array_values($validated['tags']);
        } else {
            $validated['tags'] = [];
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($toolkit->image_path) {
                Storage::disk('public')->delete($toolkit->image_path);
            }
            $validated['image_path'] = $request->file('image')->store('toolkits', 'public');
        }

        $toolkit->update($validated);

        return redirect()->route('admin.toolkit.index')->with('success', 'Toolkit updated successfully.');
    }

    public function destroy(Toolkit $toolkit)
    {
        // Delete associated image if it exists
        if ($toolkit->image_path) {
            Storage::disk('public')->delete($toolkit->image_path);
        }

        $toolkit->delete();

        return redirect()->route('admin.toolkit.index')->with('success', 'Toolkit deleted successfully.');
    }
} 