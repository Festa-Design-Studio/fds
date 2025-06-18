@extends('layouts.admin')

@section('title', 'Edit SDG Goal')

@php
use Illuminate\Support\Facades\Storage;
@endphp

@section('content')
<div class="p-6">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-h2 font-semibold text-the-end-900">Edit SDG Goal</h1>
            <p class="text-the-end-600 mt-1">Update SDG {{ $aboutSdg->number }}: {{ $aboutSdg->title }}</p>
        </div>
        <x-core.button
            href="{{ route('admin.about.sdg.index') }}"
            variant="outline"
            size="medium"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
            Back to SDGs
        </x-core.button>
    </div>

    <div class="bg-white border border-white-smoke-200 rounded-lg p-6 shadow-sm">
        <form action="{{ route('admin.about.sdg.update', $aboutSdg) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- SDG Number -->
                <div>
                    <label for="number" class="block text-body font-medium text-the-end-900 mb-2">
                        SDG Number <span class="text-apocalyptic-orange-500">*</span>
                    </label>
                    <select id="number" name="number" class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:ring-2 focus:ring-chicken-comb-500 focus:border-chicken-comb-500 transition-colors" required>
                        <option value="">Select SDG Number</option>
                        @for ($i = 1; $i <= 17; $i++)
                            <option value="{{ $i }}" {{ old('number', $aboutSdg->number) == $i ? 'selected' : '' }}>
                                SDG {{ $i }}
                            </option>
                        @endfor
                    </select>
                    @error('number')
                        <p class="text-apocalyptic-orange-600 text-body-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Display Order -->
                <div>
                    <label for="display_order" class="block text-body font-medium text-the-end-900 mb-2">
                        Display Order
                    </label>
                    <input 
                        type="number" 
                        id="display_order" 
                        name="display_order" 
                        value="{{ old('display_order', $aboutSdg->display_order) }}"
                        min="0"
                        class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:ring-2 focus:ring-chicken-comb-500 focus:border-chicken-comb-500 transition-colors"
                        placeholder="0"
                    >
                    <p class="text-the-end-500 text-body-sm mt-1">Lower numbers appear first. Leave as 0 for default ordering.</p>
                    @error('display_order')
                        <p class="text-apocalyptic-orange-600 text-body-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- SDG Title -->
            <div>
                <label for="title" class="block text-body font-medium text-the-end-900 mb-2">
                    SDG Title <span class="text-apocalyptic-orange-500">*</span>
                </label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ old('title', $aboutSdg->title) }}"
                    class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:ring-2 focus:ring-chicken-comb-500 focus:border-chicken-comb-500 transition-colors"
                    placeholder="e.g., No Poverty"
                    required
                >
                @error('title')
                    <p class="text-apocalyptic-orange-600 text-body-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-body font-medium text-the-end-900 mb-2">
                    Description
                </label>
                <textarea 
                    id="description" 
                    name="description" 
                    rows="3"
                    class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:ring-2 focus:ring-chicken-comb-500 focus:border-chicken-comb-500 transition-colors"
                    placeholder="Brief description of this SDG goal (optional)"
                >{{ old('description', $aboutSdg->description) }}</textarea>
                @error('description')
                    <p class="text-apocalyptic-orange-600 text-body-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Current SVG Display -->
            @if($aboutSdg->svg_path)
            <div class="bg-white-smoke-50 border border-white-smoke-200 rounded-lg p-4">
                <label class="block text-body font-medium text-the-end-900 mb-3">Current SDG Icon</label>
                <div class="flex items-center space-x-4">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center border border-white-smoke-200">
                        @if(Storage::disk('public')->exists($aboutSdg->svg_path))
                            <div class="w-12 h-12">
                                <img src="{{ asset('storage/' . $aboutSdg->svg_path) }}" alt="SDG {{ $aboutSdg->number }}" class="w-full h-full object-contain">
                            </div>
                        @else
                            <div class="w-12 h-12 bg-gray-200 rounded flex items-center justify-center">
                                <span class="text-gray-500 text-xs">No icon</span>
                            </div>
                        @endif
                    </div>
                    <div>
                        <p class="text-the-end-700 font-medium">{{ basename($aboutSdg->svg_path) }}</p>
                        <p class="text-the-end-500 text-body-sm">Current icon file</p>
                    </div>
                </div>
            </div>
            @endif

            <!-- SVG File Upload -->
            <div>
                <label for="svg_file" class="block text-body font-medium text-the-end-900 mb-2">
                    {{ $aboutSdg->svg_path ? 'Replace SDG Icon (SVG)' : 'SDG Icon (SVG)' }}
                    @if(!$aboutSdg->svg_path) <span class="text-apocalyptic-orange-500">*</span> @endif
                </label>
                <div class="border-2 border-dashed border-white-smoke-300 rounded-lg p-6 text-center hover:border-chicken-comb-400 transition-colors">
                    <input 
                        type="file" 
                        id="svg_file" 
                        name="svg_file" 
                        accept=".svg"
                        class="hidden"
                        {{ !$aboutSdg->svg_path ? 'required' : '' }}
                        onchange="previewSVG(this)"
                    >
                    <div id="upload-area" class="cursor-pointer" onclick="document.getElementById('svg_file').click()">
                        <svg class="mx-auto h-12 w-12 text-white-smoke-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                        </svg>
                        <p class="text-the-end-600 mb-2">
                            {{ $aboutSdg->svg_path ? 'Click to upload new SVG file' : 'Click to upload SVG file' }}
                        </p>
                        <p class="text-the-end-500 text-body-sm">SVG files only, max 2MB</p>
                        @if($aboutSdg->svg_path)
                            <p class="text-the-end-500 text-body-sm mt-1">(Leave empty to keep current icon)</p>
                        @endif
                    </div>
                    <div id="preview-area" class="hidden">
                        <div class="flex items-center justify-center mb-4">
                            <div id="svg-preview" class="w-16 h-16 bg-white-smoke-100 rounded-lg flex items-center justify-center"></div>
                        </div>
                        <p id="file-name" class="text-the-end-700 font-medium mb-2"></p>
                        <button type="button" onclick="clearPreview()" class="text-chicken-comb-600 hover:text-chicken-comb-700 text-body-sm">
                            Choose different file
                        </button>
                    </div>
                </div>
                @error('svg_file')
                    <p class="text-apocalyptic-orange-600 text-body-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Active Status -->
            <div class="flex items-center">
                <input 
                    type="checkbox" 
                    id="is_active" 
                    name="is_active" 
                    value="1"
                    {{ old('is_active', $aboutSdg->is_active) ? 'checked' : '' }}
                    class="h-4 w-4 text-chicken-comb-600 focus:ring-chicken-comb-500 border-white-smoke-300 rounded"
                >
                <label for="is_active" class="ml-2 block text-body text-the-end-900">
                    Display this SDG goal on the about page
                </label>
            </div>

            <!-- Form Actions -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-white-smoke-200">
                <x-core.button
                    href="{{ route('admin.about.sdg.index') }}"
                    variant="outline"
                    size="medium"
                >
                    Cancel
                </x-core.button>
                <x-core.button
                    type="submit"
                    variant="secondary"
                    size="medium"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125" />
                    </svg>
                    Update SDG Goal
                </x-core.button>
            </div>
        </form>
    </div>
</div>

<script>
function previewSVG(input) {
    if (input.files && input.files[0]) {
        const file = input.files[0];
        
        // Validate file type
        if (!file.type.includes('svg') && !file.name.toLowerCase().endsWith('.svg')) {
            alert('Please select a valid SVG file.');
            input.value = '';
            return;
        }
        
        const reader = new FileReader();
        
        reader.onload = function(e) {
            try {
                document.getElementById('upload-area').classList.add('hidden');
                document.getElementById('preview-area').classList.remove('hidden');
                
                // Clean and validate SVG content
                let svgContent = e.target.result;
                if (svgContent.includes('<svg')) {
                    document.getElementById('svg-preview').innerHTML = svgContent;
                    document.getElementById('file-name').textContent = file.name;
                } else {
                    throw new Error('Invalid SVG content');
                }
            } catch (error) {
                alert('Error reading SVG file. Please try a different file.');
                clearPreview();
            }
        };
        
        reader.onerror = function() {
            alert('Error reading file. Please try again.');
            clearPreview();
        };
        
        reader.readAsText(file);
    }
}

function clearPreview() {
    document.getElementById('svg_file').value = '';
    document.getElementById('upload-area').classList.remove('hidden');
    document.getElementById('preview-area').classList.add('hidden');
    document.getElementById('svg-preview').innerHTML = '';
}
</script>
@endsection 