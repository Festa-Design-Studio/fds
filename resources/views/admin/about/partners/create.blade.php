@extends('layouts.admin')

@section('title', 'Add Partner')

@section('content')
<div class="p-6">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-h2 font-semibold text-the-end-900">Add Partner</h1>
            <p class="text-the-end-600 mt-1">Add a new partner organization for the about page</p>
        </div>
        <x-core.button
            href="{{ route('admin.about.partners.index') }}"
            variant="outline"
            size="medium"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
            Back to Partners
        </x-core.button>
    </div>

    <div class="bg-white border border-white-smoke-200 rounded-lg p-6 shadow-sm">
        <form action="{{ route('admin.about.partners.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Partner Name -->
                <div>
                    <label for="name" class="block text-body font-medium text-the-end-900 mb-2">
                        Partner Name <span class="text-apocalyptic-orange-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="{{ old('name') }}"
                        class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:ring-2 focus:ring-chicken-comb-500 focus:border-chicken-comb-500 transition-colors"
                        placeholder="e.g., Microsoft Corporation"
                        required
                    >
                    @error('name')
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
                        value="{{ old('display_order', 0) }}"
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

            <!-- Website URL -->
            <div>
                <label for="website_url" class="block text-body font-medium text-the-end-900 mb-2">
                    Website URL
                </label>
                <input 
                    type="url" 
                    id="website_url" 
                    name="website_url" 
                    value="{{ old('website_url') }}"
                    class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:ring-2 focus:ring-chicken-comb-500 focus:border-chicken-comb-500 transition-colors"
                    placeholder="https://www.partner-website.com"
                >
                @error('website_url')
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
                    placeholder="Brief description of the partner organization (optional)"
                >{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-apocalyptic-orange-600 text-body-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Logo File Upload -->
            <div>
                <label for="logo_file" class="block text-body font-medium text-the-end-900 mb-2">
                    Partner Logo <span class="text-apocalyptic-orange-500">*</span>
                </label>
                <div class="border-2 border-dashed border-white-smoke-300 rounded-lg p-6 text-center hover:border-chicken-comb-400 transition-colors">
                    <input 
                        type="file" 
                        id="logo_file" 
                        name="logo_file" 
                        accept=".svg,.png,.jpg,.jpeg"
                        class="hidden"
                        required
                        onchange="previewLogo(this)"
                    >
                    <div id="upload-area" class="cursor-pointer" onclick="document.getElementById('logo_file').click()">
                        <svg class="mx-auto h-12 w-12 text-white-smoke-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                        </svg>
                        <p class="text-the-end-600 mb-2">Click to upload logo file</p>
                        <p class="text-the-end-500 text-body-sm">SVG, PNG, JPG, or JPEG files only, max 2MB</p>
                    </div>
                    <div id="preview-area" class="hidden">
                        <div class="flex items-center justify-center mb-4">
                            <div id="logo-preview" class="w-20 h-16 bg-white-smoke-100 rounded-lg flex items-center justify-center border border-white-smoke-200 p-2"></div>
                        </div>
                        <p id="file-name" class="text-the-end-700 font-medium mb-2"></p>
                        <button type="button" onclick="clearPreview()" class="text-chicken-comb-600 hover:text-chicken-comb-700 text-body-sm">
                            Choose different file
                        </button>
                    </div>
                </div>
                @error('logo_file')
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
                    {{ old('is_active', true) ? 'checked' : '' }}
                    class="h-4 w-4 text-chicken-comb-600 focus:ring-chicken-comb-500 border-white-smoke-300 rounded"
                >
                <label for="is_active" class="ml-2 block text-body text-the-end-900">
                    Display this partner on the about page
                </label>
            </div>

            <!-- Form Actions -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-white-smoke-200">
                <x-core.button
                    href="{{ route('admin.about.partners.index') }}"
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
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Create Partner
                </x-core.button>
            </div>
        </form>
    </div>
</div>

<script>
function previewLogo(input) {
    if (input.files && input.files[0]) {
        const file = input.files[0];
        const reader = new FileReader();
        
        reader.onload = function(e) {
            document.getElementById('upload-area').classList.add('hidden');
            document.getElementById('preview-area').classList.remove('hidden');
            
            const previewContainer = document.getElementById('logo-preview');
            if (file.type.startsWith('image/')) {
                previewContainer.innerHTML = `<img src="${e.target.result}" alt="Logo preview" class="max-w-full max-h-full object-contain">`;
            } else {
                previewContainer.innerHTML = `<span class="text-the-end-600 text-xs">Preview not available</span>`;
            }
            
            document.getElementById('file-name').textContent = file.name;
        };
        
        if (file.type.startsWith('image/')) {
            reader.readAsDataURL(file);
        } else {
            reader.readAsText(file);
        }
    }
}

function clearPreview() {
    document.getElementById('logo_file').value = '';
    document.getElementById('upload-area').classList.remove('hidden');
    document.getElementById('preview-area').classList.add('hidden');
    document.getElementById('logo-preview').innerHTML = '';
}
</script>
@endsection 