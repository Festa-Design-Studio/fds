@extends('layouts.admin')

@section('title', 'Create Toolkit Item - Festa Design Studio')

@section('header_title', 'Create Toolkit Item')

@section('content')
<div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    <form action="{{ route('admin.toolkit.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        
        @if ($errors->any())
            <div class="mb-4 p-4 bg-chicken-comb-50 border border-chicken-comb-300 text-chicken-comb-700 rounded-lg">
                <h4 class="font-medium mb-2">Please fix the following errors:</h4>
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <!-- Title -->
        <div>
            <x-core.input-label for="title" :value="__('Title')" />
            <x-core.text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" required />
            <x-core.input-error class="mt-2" :messages="$errors->get('title')" />
        </div>

        <!-- Description -->
        <div>
            <x-core.input-label for="description" :value="__('Description')" />
            <x-core.textarea id="description" name="description" class="mt-1 block w-full" rows="4" required>{{ old('description') }}</x-core.textarea>
            <x-core.input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <!-- Image -->
        <div>
            <x-core.input-label for="image" :value="__('Image')" />
            <x-core.file-upload id="image" name="image" class="mt-1 block w-full" accept=".jpeg,.jpg,.png,.gif,.svg,.webp,image/jpeg,image/png,image/gif,image/svg+xml,image/webp" />
            <x-core.input-error class="mt-2" :messages="$errors->get('image')" />
            <p class="mt-1 text-sm text-the-end-600">Upload an image (JPEG, PNG, JPG, GIF, SVG, WebP. Max size: 2MB)</p>
        </div>

        <!-- Category -->
        <div>
            <x-core.input-label for="toolkit_category_id" :value="__('Category')" />
            <x-core.select id="toolkit_category_id" name="toolkit_category_id" class="mt-1 block w-full" required>
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('toolkit_category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </x-core.select>
            <x-core.input-error class="mt-2" :messages="$errors->get('toolkit_category_id')" />
        </div>

        <!-- Link URL -->
        <div>
            <x-core.input-label for="link_url" :value="__('Link URL')" />
            <x-core.text-input id="link_url" name="link_url" type="url" class="mt-1 block w-full" :value="old('link_url')" />
            <x-core.input-error class="mt-2" :messages="$errors->get('link_url')" />
        </div>

        <!-- Link Text -->
        <div>
            <x-core.input-label for="link_text" :value="__('Link Text')" />
            <x-core.text-input id="link_text" name="link_text" type="text" class="mt-1 block w-full" :value="old('link_text')" />
            <x-core.input-error class="mt-2" :messages="$errors->get('link_text')" />
        </div>

        <!-- Tags -->
        <div>
            <x-core.input-label for="tags" :value="__('Tags')" />
            <x-core.text-input id="tags" name="tags" type="text" class="mt-1 block w-full" :value="old('tags')" />
            <x-core.input-error class="mt-2" :messages="$errors->get('tags')" />
            <p class="mt-1 text-sm text-the-end-600">Separate tags with commas (e.g., design, ui, ux)</p>
        </div>

        <!-- Checkboxes -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <x-core.checkbox id="is_featured" name="is_featured" :checked="old('is_featured', false)" />
                <x-core.input-label for="is_featured" :value="__('Featured Item')" class="ml-2" />
            </div>
            
            <div>
                <x-core.checkbox id="is_published" name="is_published" :checked="old('is_published', true)" />
                <x-core.input-label for="is_published" :value="__('Published')" class="ml-2" />
            </div>
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-4">
            <x-core.button type="submit">
                {{ __('Create Toolkit Item') }}
            </x-core.button>
            
            <a href="{{ route('admin.toolkit.index') }}" class="text-the-end-600 hover:text-the-end-900">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection 