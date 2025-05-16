<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\Admin\StoreBlogCategoryRequest;
use App\Http\Requests\Admin\UpdateBlogCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(15);
        return view('admin.blog.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogCategoryRequest $request)
    {
        $data = $request->validated();
        Log::info('Category store validated data', $data);
        $category = Category::create($data);
        Log::info('Category after create', $category->toArray());
        return redirect()->route('admin.blog.categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // Typically not used for admin CRUD, redirect to edit or index.
        return redirect()->route('admin.blog.categories.edit', $category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.blog.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogCategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        Log::info('Category update validated data', $data);
        $category->update($data);
        Log::info('Category after update', $category->fresh()->toArray());
        return redirect()->route('admin.blog.categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // Check if category has articles associated
        if ($category->articles()->count() > 0) {
            return redirect()->route('admin.blog.categories.index')->with('error', 'Category cannot be deleted because it has articles associated with it.');
        }
        $category->delete();
        return redirect()->route('admin.blog.categories.index')->with('success', 'Category deleted successfully.');
    }
}
