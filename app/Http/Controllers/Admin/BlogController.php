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

        // Auto-generate slug if not provided and not handled by prepareForValidation
        if (empty($data['slug']) && !empty($data['title'])) {
            $data['slug'] = Str::slug($data['title']);
            $originalSlug = $data['slug'];
            $count = 1;
            while (Article::where('slug', $data['slug'])->exists()) {
                $data['slug'] = $originalSlug . '-' . $count++;
            }
        }

        // Automatically calculate reading_time from content
        $plainText = strip_tags($data['content'] ?? '');
        $wordCount = str_word_count($plainText);
        $data['reading_time'] = max(1, ceil($wordCount / 200));

        // If this article is being featured, unfeature any other articles
        if (!empty($data['is_featured']) && $data['is_featured']) {
            Article::where('is_featured', true)->update(['is_featured' => false]);
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
            if ($article->image_path && Storage::disk('public')->exists($article->image_path)) {
                Storage::disk('public')->delete($article->image_path);
            }
            $data['image_path'] = $request->file('image')->store('blog_images', 'public');
        }

        if (empty($data['slug']) && !empty($data['title']) && $article->title !== $data['title']) {
             $data['slug'] = Str::slug($data['title']);
             $originalSlug = $data['slug'];
             $count = 1;
             while (Article::where('slug', $data['slug'])->where('id', '!=', $article->id)->exists()) {
                 $data['slug'] = $originalSlug . '-' . $count++;
             }
        }

        // Automatically calculate reading_time from content
        $plainText = strip_tags($data['content'] ?? '');
        $wordCount = str_word_count($plainText);
        $data['reading_time'] = max(1, ceil($wordCount / 200));

        // If this article is being featured, unfeature any other articles
        if (!empty($data['is_featured']) && $data['is_featured'] && !$article->is_featured) {
            Article::where('is_featured', true)->where('id', '!=', $article->id)->update(['is_featured' => false]);
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