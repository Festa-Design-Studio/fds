<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Ensure the authenticated user has permission to update articles
        // You might want to check ownership or roles/permissions:
        // $article = $this->route('article'); // If using route model binding for 'article' parameter
        // return Auth::user()->can('update', $article);
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // The route parameter for admin article update is 'id'
        // e.g., Route::put('/blog/posts/{id}', [BlogController::class, 'update'])->name('blog.update');
        $articleId = $this->route('id');

        return [
            'title' => 'required|string|max:255',
            'slug' => [
                'nullable',
                'string',
                'max:255',
                Rule::unique('articles', 'slug')->ignore($articleId),
            ],
            'excerpt' => 'nullable|string|max:1000',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'nullable|exists:categories,id',
            'published_at' => 'nullable|date',
            'status' => 'required|string|in:draft,published,archived',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:1000',
            'reading_time' => 'nullable|integer|min:1',
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {
        // Auto-generate slug if 'slug' is not provided or if title changed and slug should be updated
        // Be careful with auto-updating slugs for published articles due to SEO.
        if (empty($this->slug) && !empty($this->title)) {
            $this->merge([
                'slug' => \Illuminate\Support\Str::slug($this->title),
            ]);
        }
        // Example: if you want to update slug when title changes
        // $article = $this->route('article');
        // if ($article && $this->title !== $article->title && empty($this->slug)) {
        //     $this->merge(['slug' => \Illuminate\Support\Str::slug($this->title)]);
        // }
    }
}
