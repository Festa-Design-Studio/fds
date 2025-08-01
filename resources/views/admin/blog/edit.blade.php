@extends('layouts.admin') {{-- Or your admin layout --}}

@section('header_title', 'Edit Blog Article')

@section('styles')
@vite('resources/css/festa-rich-text-editor.css')
@endsection

@section('action_button')
<a href="{{ route('admin.blog.posts') }}">
  <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
    Back to Blog
  </button>
</a>
@endsection

@section('content')
<div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
  <form class="space-y-4" action="{{ route('admin.blog.update', $article->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
      <div>
        <label class="block text-body font-medium text-the-end-400 mb-2" for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $article->title) }}" class="w-full h-10 px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 disabled:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed @error('title') border-chicken-comb-600 @enderror" placeholder="Enter blog title" required>
        @error('title')
          <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
        @enderror

        <label class="block text-body font-medium text-the-end-400 mb-2 mt-4" for="slug">Slug</label>
        <input type="text" id="slug" name="slug" value="{{ old('slug', $article->slug) }}" class="w-full h-10 px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 @error('slug') border-chicken-comb-600 @enderror" placeholder="Enter slug">
        @error('slug')
          <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
        @enderror

        <label class="block text-body font-medium text-the-end-400 mb-2 mt-4" for="excerpt">Excerpt</label>
        <textarea id="excerpt" name="excerpt" rows="3" class="w-full px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400 focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 @error('excerpt') border-chicken-comb-600 @enderror" placeholder="Write your blog excerpt..." required>{{ old('excerpt', $article->excerpt) }}</textarea>
        @error('excerpt')
          <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
        @enderror

        <div class="space-y-2 mt-4">
          <label class="text-the-end-400 text-body font-medium">Publish Date</label>
          <input type="datetime-local" name="published_at" value="{{ old('published_at', $article->published_at ? $article->published_at->format('Y-m-d\TH:i') : '') }}" class="w-full h-10 px-3 py-2 text-body bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-700 focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 @error('published_at') border-chicken-comb-600 @enderror">
          @error('published_at')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
        </div>
      </div>
      <div class="space-y-3.5">
        <div>
          <label class="block text-body font-medium text-the-end-400 mb-2" for="category_id">Category</label>
          <select id="category_id" name="category_id" class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 appearance-none focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 @error('category_id') border-chicken-comb-600 @enderror" required>
            <option value="">Select Category</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}" {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
          </select>
          @error('category_id')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label class="block text-body font-medium text-the-end-400 mb-2" for="user_id">Author</label>
          <select id="user_id" name="user_id" class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 appearance-none focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 @error('user_id') border-chicken-comb-600 @enderror" required>
            <option value="">Select Author</option>
            @foreach ($authors as $author)
              <option value="{{ $author->id }}" {{ old('user_id', $article->user_id) == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
            @endforeach
          </select>
          @error('user_id')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
        </div>
        @if($article->image_path)
        <div class="mb-3">
          <p class="text-sm text-the-end-600 mb-2">Current Featured Image</p>
          <img src="{{ asset('storage/' . $article->image_path) }}" alt="{{ $article->title }}" class="h-32 w-auto object-cover rounded-md">
        </div>
        @endif
        <div>
          <label class="block text-body font-medium text-the-end-400 mb-2.5 mt-4">Change Featured Image (optional)</label>
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-white-smoke-300 border-dashed rounded-lg hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50">
            <div class="space-y-1 text-center">
              <svg class="mx-auto h-6 w-6 text-the-end-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-body-sm text-the-end-600">
                <label for="image" class="relative cursor-pointer rounded-md font-medium text-chicken-comb-600">
                  <span>Upload a file</span>
                  <input id="image" name="image" type="file" class="sr-only" accept="image/*">
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-[11px] text-the-end-400">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
          @error('image')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label class="block text-body font-medium text-the-end-400 mb-2" for="status">Status</label>
          <select id="status" name="status" class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 appearance-none focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 @error('status') border-chicken-comb-600 @enderror" required>
            <option value="draft" {{ old('status', $article->status) == 'draft' ? 'selected' : '' }}>Draft</option>
            <option value="published" {{ old('status', $article->status) == 'published' ? 'selected' : '' }}>Published</option>
            <option value="archived" {{ old('status', $article->status) == 'archived' ? 'selected' : '' }}>Archived</option>
          </select>
          @error('status')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
        </div>
        
        <!-- Featured Article Option -->
        <div class="mt-4">
          <label class="block text-body font-medium text-the-end-400 mb-2">Featured Article</label>
          <div class="flex items-center space-x-4">
            <x-core.radio 
              name="is_featured" 
              value="1" 
              label="Yes" 
              :checked="old('is_featured', $article->is_featured) == 1"
            />
            <x-core.radio 
              name="is_featured" 
              value="0" 
              label="No" 
              :checked="old('is_featured', $article->is_featured) === null || old('is_featured', $article->is_featured) == 0"
            />
          </div>
          <p class="mt-1 text-body-sm text-the-end-500">Featured articles appear at the top of the blog homepage. Only one article can be featured at a time.</p>
          @error('is_featured')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label class="block text-body font-medium text-the-end-400 mb-2" for="meta_title">Meta Title (SEO)</label>
          <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title', $article->meta_title) }}" class="w-full h-10 px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400" placeholder="Meta Title">
          @error('meta_title')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label class="block text-body font-medium text-the-end-400 mb-2" for="meta_description">Meta Description (SEO)</label>
          <textarea id="meta_description" name="meta_description" rows="2" class="w-full px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400">{{ old('meta_description', $article->meta_description) }}</textarea>
          @error('meta_description')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
        </div>
      </div>
    </div>
    <div>
      <label class="block text-body font-medium text-the-end-400 mb-2" for="content">Blog Content</label>
      <input id="content-hidden" type="hidden" name="content" value="{{ old('content', $article->content) }}">
      <div id="festa-editor" class="festa-rich-text-editor w-full min-h-[300px] bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400 @error('content') border-chicken-comb-600 @enderror"></div>
      @error('content')
        <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
      @enderror
    </div>
    <div class="flex items-center space-x-4">
      <button type="submit" class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
        Update Article
      </button>
      <a href="{{ route('admin.blog.posts') }}" class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
        Cancel
      </a>
    </div>
  </form>
</div>
@endsection

@push('scripts')
@vite(['resources/js/festa-rich-text-editor.js', 'resources/js/festa-editor-init.js', 'resources/js/add-video-button.js', 'resources/js/force-video-button.js'])

<script>
  console.log('=== DEBUGGING SCRIPT LOADING ===');
  console.log('Scripts should be loaded now');
  console.log('typeof FestaRichTextEditor:', typeof FestaRichTextEditor);
  console.log('typeof initFestaEditor:', typeof initFestaEditor);
  console.log('Available window objects with "Festa":', Object.keys(window).filter(key => key.includes('Festa')));
  
  document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, initializing editor');
    console.log('typeof FestaRichTextEditor:', typeof FestaRichTextEditor);
    console.log('typeof initFestaEditor:', typeof initFestaEditor);
    
    // Enhanced initialization with multiple fallbacks
    function tryInitializeEditor() {
      console.log('=== TRYING TO INITIALIZE EDITOR ===');
      console.log('typeof FestaRichTextEditor:', typeof FestaRichTextEditor);
      console.log('typeof initFestaEditor:', typeof initFestaEditor);
      
      if (typeof FestaRichTextEditor !== 'undefined' && typeof initFestaEditor === 'function') {
        console.log('Both classes available, initializing...');
        try {
          initFestaEditor('festa-editor', 'content-hidden');
          return true;
        } catch (error) {
          console.error('Error in initFestaEditor:', error);
          return false;
        }
      } else {
        console.log('Classes not yet available:');
        console.log('- FestaRichTextEditor:', typeof FestaRichTextEditor);
        console.log('- initFestaEditor:', typeof initFestaEditor);
        return false;
      }
    }
    
    // Try immediate initialization
    if (tryInitializeEditor()) {
      return;
    }
    
    // Try with short delay
    setTimeout(() => {
      if (tryInitializeEditor()) {
        return;
      }
      
      // Try with longer delay
      setTimeout(() => {
        if (tryInitializeEditor()) {
          return;
        }
        
        console.error('Failed to initialize editor after multiple attempts');
        console.log('All window objects:', Object.keys(window).slice(0, 20)); // Show first 20 for debugging
      }, 1000);
    }, 500);
    
    // Add content size validation
    const form = document.querySelector('form');
    const contentInput = document.getElementById('content-hidden');
    const maxSizeInMB = 90; // Leave some buffer below 100MB POST limit
    const warningThresholdMB = 50;
    
    function checkContentSize() {
      const content = contentInput.value;
      const sizeInBytes = new Blob([content]).size;
      const sizeInMB = sizeInBytes / (1024 * 1024);
      
      // Remove any existing warnings
      const existingWarning = document.getElementById('content-size-warning');
      if (existingWarning) {
        existingWarning.remove();
      }
      
      if (sizeInMB > warningThresholdMB) {
        const warningDiv = document.createElement('div');
        warningDiv.id = 'content-size-warning';
        warningDiv.className = sizeInMB > maxSizeInMB 
          ? 'mt-2 p-3 bg-chicken-comb-50 border border-chicken-comb-300 rounded-lg text-chicken-comb-700'
          : 'mt-2 p-3 bg-pot-of-gold-50 border border-pot-of-gold-300 rounded-lg text-pot-of-gold-700';
        
        const message = sizeInMB > maxSizeInMB
          ? `⚠️ Content size (${sizeInMB.toFixed(1)}MB) exceeds maximum allowed size (${maxSizeInMB}MB). Please reduce content size by removing some images or videos.`
          : `⚠️ Content size (${sizeInMB.toFixed(1)}MB) is approaching the maximum limit. Consider optimizing images if you plan to add more content.`;
        
        warningDiv.innerHTML = `<p class="text-sm font-medium">${message}</p>`;
        contentInput.closest('div').appendChild(warningDiv);
        
        return sizeInMB <= maxSizeInMB;
      }
      
      return true;
    }
    
    // Check content size on input change
    contentInput.addEventListener('change', checkContentSize);
    
    // Check initial content size
    setTimeout(checkContentSize, 1000);
    
    // Validate before form submission
    form.addEventListener('submit', function(e) {
      if (!checkContentSize()) {
        e.preventDefault();
        alert('Content size exceeds the maximum allowed limit. Please reduce the size of your content.');
      }
    });
  });
</script>
@endpush 