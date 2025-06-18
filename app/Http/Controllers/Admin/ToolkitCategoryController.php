<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ToolkitCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ToolkitCategoryController extends Controller
{
    public function index()
    {
        $categories = ToolkitCategory::ordered()->paginate(15);

        return view('admin.toolkit.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.toolkit.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'color_class' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
        ]);

        $validated['slug'] = Str::slug($validated['name']);

        // Ensure unique slug
        $originalSlug = $validated['slug'];
        $count = 1;
        while (ToolkitCategory::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = $originalSlug.'-'.$count++;
        }

        ToolkitCategory::create($validated);

        return redirect()->route('admin.toolkit.categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(ToolkitCategory $category)
    {
        return view('admin.toolkit.categories.edit', compact('category'));
    }

    public function update(Request $request, ToolkitCategory $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'color_class' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
        ]);

        if ($category->name !== $validated['name']) {
            $validated['slug'] = Str::slug($validated['name']);

            // Ensure unique slug
            $originalSlug = $validated['slug'];
            $count = 1;
            while (ToolkitCategory::where('slug', $validated['slug'])->where('id', '!=', $category->id)->exists()) {
                $validated['slug'] = $originalSlug.'-'.$count++;
            }
        }

        $category->update($validated);

        return redirect()->route('admin.toolkit.categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(ToolkitCategory $category)
    {
        if ($category->toolkits()->exists()) {
            return redirect()->route('admin.toolkit.categories.index')
                ->with('error', 'Cannot delete category with existing toolkit items.');
        }

        $category->delete();

        return redirect()->route('admin.toolkit.categories.index')->with('success', 'Category deleted successfully.');
    }
}
