<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Assuming any authenticated admin can update categories
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $categoryId = $this->route('category') ? $this->route('category')->id : null;
        return [
            'name' => 'required|string|max:255|unique:categories,name,' . $categoryId,
            'slug' => 'nullable|string|max:255|unique:categories,slug,' . $categoryId . '|alpha_dash',
            'description' => 'nullable|string',
            'color_class' => 'nullable|string|max:255',
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        // If slug is provided, ensure it's properly formatted.
        // If not provided and name is changed, regenerate slug from name.
        if ($this->filled('slug')) {
            $this->merge([
                'slug' => \Illuminate\Support\Str::slug($this->input('slug')),
            ]);
        } elseif ($this->filled('name') && !$this->filled('slug')) {
            // Check if the name is actually being changed if the category model is available
            $category = $this->route('category');
            if ($category && $this->input('name') !== $category->name) {
                $this->merge([
                    'slug' => \Illuminate\Support\Str::slug($this->input('name')),
                ]);
            }
        }
    }
}
