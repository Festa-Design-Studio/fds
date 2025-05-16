@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-h2 font-bold text-the-end-900">
                    {{ isset($testimonial) ? 'Edit Testimonial' : 'Create New Testimonial' }}
                </h1>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-6">
                <form action="{{ isset($testimonial) ? route('admin.work.testimonials.update', $testimonial) : route('admin.work.testimonials.store') }}"
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @if(isset($testimonial))
                        @method('PUT')
                    @endif

                    <div class="space-y-6">
                        <!-- Author Name -->
                        <div>
                            <x-core.text-input
                                name="author_name"
                                label="Author Name"
                                value="{{ old('author_name', $testimonial->author_name ?? '') }}"
                                required
                            />
                            @error('author_name')
                                <p class="mt-1 text-sm text-apocalyptic-orange-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Author Title -->
                        <div>
                            <x-core.text-input
                                name="author_title"
                                label="Author Title"
                                value="{{ old('author_title', $testimonial->author_title ?? '') }}"
                                required
                            />
                            @error('author_title')
                                <p class="mt-1 text-sm text-apocalyptic-orange-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Quote -->
                        <div>
                            <x-core.textarea
                                name="quote"
                                label="Quote"
                                rows="4"
                                required
                            >{{ old('quote', $testimonial->quote ?? '') }}</x-core.textarea>
                            @error('quote')
                                <p class="mt-1 text-sm text-apocalyptic-orange-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Author Avatar -->
                        <div>
                            <label class="text-the-end-900 text-body-sm font-medium mb-2 block">Author Avatar</label>
                            
                            @if(isset($testimonial) && $testimonial->author_avatar)
                                <div class="mb-4 flex items-center space-x-4">
                                    <div class="h-20 w-20 rounded-full overflow-hidden bg-white-smoke-100 border border-white-smoke-300">
                                        <img 
                                            src="{{ asset('storage/' . $testimonial->author_avatar) }}" 
                                            alt="Current avatar" 
                                            class="h-full w-full object-cover"
                                            onerror="this.src='https://via.placeholder.com/80?text=No+Image'; this.onerror=null;"
                                        >
                                    </div>
                                    <div>
                                        <p class="text-sm text-the-end-600">Current avatar</p>
                                        <p class="text-xs text-the-end-400 mt-1">Upload a new image to replace</p>
                                    </div>
                                </div>
                            @endif
                            
                            <div class="flex items-center justify-center w-full">
                                <label for="author_avatar" class="flex flex-col items-center justify-center w-full h-32 
                                    border-2 border-the-end-200 border-dashed rounded-xl 
                                    cursor-pointer bg-white-smoke-50 hover:bg-chicken-comb-50 
                                    hover:border-chicken-comb-600/50">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-8 h-8 mb-4 text-the-end-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                            </path>
                                        </svg>
                                        <p class="mb-2 text-sm text-the-end-500">
                                            <span class="font-medium">Click to upload</span> or drag and drop
                                        </p>
                                        <p class="text-xs text-the-end-400">
                                            PNG, JPG or GIF (MAX. 2MB)
                                        </p>
                                    </div>
                                    <input 
                                        type="file" 
                                        name="author_avatar" 
                                        id="author_avatar" 
                                        accept="image/*"
                                        class="hidden" 
                                    />
                                </label>
                            </div>
                            
                            <div id="file-upload-filename" class="text-sm text-the-end-600 mt-2"></div>
                            
                            @error('author_avatar')
                                <p class="mt-1 text-sm text-apocalyptic-orange-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Display Order -->
                        <div>
                            <x-core.text-input
                                type="number"
                                name="display_order"
                                label="Display Order"
                                value="{{ old('display_order', $testimonial->display_order ?? 0) }}"
                            />
                            @error('display_order')
                                <p class="mt-1 text-sm text-apocalyptic-orange-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Published Status -->
                        <div>
                            <input type="hidden" name="published" value="0">
                            <x-core.checkbox
                                name="published"
                                label="Published"
                                :checked="old('published', $testimonial->published ?? false)"
                                value="1"
                            />
                            @error('published')
                                <p class="mt-1 text-sm text-apocalyptic-orange-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Form Actions -->
                        <div class="flex justify-end space-x-3">
                            <x-core.button
                                variant="neutral"
                                type="button"
                                onclick="window.location.href='{{ route('admin.work.testimonials.index') }}'"
                            >
                                Cancel
                            </x-core.button>

                            <x-core.button
                                variant="primary"
                                type="submit"
                            >
                                {{ isset($testimonial) ? 'Update Testimonial' : 'Create Testimonial' }}
                            </x-core.button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    @push('scripts')
    <script>
        document.getElementById('author_avatar').addEventListener('change', function(e) {
            var fileName = e.target.files[0]?.name || 'No file selected';
            document.getElementById('file-upload-filename').textContent = 'Selected file: ' + fileName;
        });
    </script>
    @endpush
@endsection 