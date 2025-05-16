<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\User; // For author selection
use App\Http\Requests\Admin\StoreArticleRequest;
use App\Http\Requests\Admin\UpdateArticleRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // In Laravel 12, we don't need to set middleware in the constructor
        // as it's normally handled in the routes file
    }

    /**
     * Display blog posts list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function posts()
    {
        $articles = Article::with('category', 'author')->latest()->paginate(15);
        return view('admin.blog.posts', compact('articles'));
    }

    /**
     * Show the form for creating a new blog post.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        $authors = User::orderBy('name')->get(); // Assuming you want to select from Users table
        return view('admin.blog.create', compact('categories', 'authors'));
    }

    /**
     * Store a new blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreArticleRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('blog_images', 'public');
        }

        // If user_id is not part of validated data (e.g., if you want to auto-assign logged-in user)
        // you could set it here: $data['user_id'] = auth()->id();
        // Ensure 'user_id' is then made nullable or removed from StoreArticleRequest if auto-assigned.
        // For now, assuming 'user_id' comes from the form as per current request rules.

        // Auto-generate slug if not provided and not handled by prepareForValidation
        if (empty($data['slug']) && !empty($data['title'])) {
            $data['slug'] = Str::slug($data['title']);
            // Ensure uniqueness if auto-generating here
            $originalSlug = $data['slug'];
            $count = 1;
            while (Article::where('slug', $data['slug'])->exists()) {
                $data['slug'] = $originalSlug . '-' . $count++;
            }
        }


        Article::create($data);

        return redirect()->route('admin.blog.posts')->with('success', 'Article created successfully.');
    }

    /**
     * Show the form for editing a blog post.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::orderBy('name')->get();
        $authors = User::orderBy('name')->get();
        return view('admin.blog.edit', compact('article', 'categories', 'authors'));
    }

    /**
     * Update a blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($article->image_path && Storage::disk('public')->exists($article->image_path)) {
                Storage::disk('public')->delete($article->image_path);
            }
            $data['image_path'] = $request->file('image')->store('blog_images', 'public');
        }

        // Auto-generate slug if not provided and title changed (and not handled by prepareForValidation)
        if (empty($data['slug']) && !empty($data['title']) && $article->title !== $data['title']) {
             $data['slug'] = Str::slug($data['title']);
             $originalSlug = $data['slug'];
             $count = 1;
             while (Article::where('slug', $data['slug'])->where('id', '!=', $article->id)->exists()) {
                 $data['slug'] = $originalSlug . '-' . $count++;
             }
        }


        $article->update($data);

        return redirect()->route('admin.blog.posts')->with('success', 'Article updated successfully.');
    }

    /**
     * Delete a blog post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        if ($article->image_path && Storage::disk('public')->exists($article->image_path)) {
            Storage::disk('public')->delete($article->image_path);
        }

        $article->delete();

        return redirect()->route('admin.blog.posts')->with('success', 'Article deleted successfully.');
    }

    /**
     * Display blog categories.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function categories()
    {
        $categories = Category::latest()->paginate(15);
        // For now, just listing. CRUD operations for categories would require more views and methods.
        return view('admin.blog.categories', compact('categories'));
    }
} 