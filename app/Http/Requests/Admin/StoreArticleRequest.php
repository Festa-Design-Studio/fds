<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Ensure the authenticated user has permission to create articles
        // For now, we'll assume any authenticated user can.
        // You might want to check for specific roles or permissions:
        // return Auth::user()->can('create articles');
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:articles,slug', // Nullable if auto-generated
            'excerpt' => 'nullable|string|max:1000',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 'image' is the input name for file upload
            'user_id' => 'required|exists:users,id', // If not setting automatically
            'category_id' => 'nullable|exists:categories,id',
            'published_at' => 'nullable|date',
            'status' => 'required|string|in:draft,published,archived',
            'is_featured' => 'nullable|boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:1000',
            'reading_time' => 'nullable|integer|min:1',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * This is a good place to auto-generate the slug if 'slug' is not provided
     * and you are not using a package for it.
     * Also, if user_id is not part of the form but should be the authenticated user.
     */
    protected function prepareForValidation()
    {
        if (empty($this->slug) && !empty($this->title)) {
            $this->merge([
                'slug' => \Illuminate\Support\Str::slug($this->title),
            ]);
        }

        // If user_id is not submitted in the form, set it to the authenticated user's ID.
        // Ensure your form does not have a user_id field if you use this.
        // Or, make user_id 'nullable' in rules and handle it in controller if this is too implicit.
        // For now, assuming 'user_id' might be passed or set in controller.
        // If you want to force authenticated user:
        // if (!$this->user_id) {
        //     $this->merge([
        //         'user_id' => auth()->id(),
        //     ]);
        // }
    }
}
