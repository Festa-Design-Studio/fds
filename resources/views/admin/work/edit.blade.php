@extends('layouts.admin')

@section('title', 'Edit Work - Festa Design Studio')

@section('header_title', 'Edit Work')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/festa-editor.css') }}">
@endsection

@section('action_button')
<div class="flex gap-4">
  <a href="{{ route('work.show', $project->slug) }}" target="_blank">
    <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-pepper-green-600/50 text-the-end-700 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center">
      View Work
    </button>
  </a>
  <a href="{{ route('admin.work.index') }}">
    <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
      Back to Work
    </button>
  </a>
</div>
@endsection

@section('content')
<div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
  <form class="space-y-4" method="POST" action="{{ route('admin.work.update', $project->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
      <div>
        <label class="block text-body font-medium text-the-end-400 mb-2" for="title">
          Work Title
        </label>
        <input type="text" id="title" name="title" value="{{ old('title', $project->title) }}" class="w-full h-10 px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 disabled:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed @error('title') border-chicken-comb-600 @enderror" placeholder="Enter work title" required>
        @error('title')
          <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
        @enderror

        <label class="block text-body font-medium text-the-end-400 mb-2 mt-4" for="excerpt">
          Work Sub-headline (excerpt)
        </label>
        <textarea id="excerpt" name="excerpt" rows="3" class="w-full px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400 focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 @error('excerpt') border-chicken-comb-600 @enderror" placeholder="Write your work sub-headline..." required>{{ old('excerpt', $project->excerpt) }}</textarea>
        @error('excerpt')
          <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
        @enderror

        <div class="space-y-2 mt-4">
          <label class="text-the-end-400 text-body font-medium">Published Date</label>
          <input type="date" name="published_at" value="{{ old('published_at', $project->published_at ? \Carbon\Carbon::parse($project->published_at)->format('Y-m-d') : now()->format('Y-m-d')) }}" class="w-full h-10 px-3 py-2 text-body bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-700 focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 @error('published_at') border-chicken-comb-600 @enderror" required>
          @error('published_at')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div class="space-y-3.5">
        <div>
          <label class="block text-body font-medium text-the-end-400 mb-2" for="sector_id">
            Sector
          </label>
          <div class="flex items-center space-x-2">
            <select id="sector_id" name="sector_id" class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 appearance-none focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 @error('sector_id') border-chicken-comb-600 @enderror" required>
              <option value="">Select a sector</option>
              @foreach($sectors as $sector)
                <option value="{{ $sector->id }}" {{ old('sector_id', $project->sector_id) == $sector->id ? 'selected' : '' }}>
                  {{ $sector->name }}
                </option>
              @endforeach
            </select>
            <a href="{{ route('admin.sectors.create') }}" target="_blank" class="inline-flex items-center justify-center h-10 px-3 py-2 bg-pepper-green-600 text-white rounded-full hover:bg-pepper-green-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
              </svg>
            </a>
            <a href="{{ route('admin.sectors.index') }}" target="_blank" class="inline-flex items-center justify-center h-10 px-3 py-2 bg-the-end-600 text-white rounded-full hover:bg-the-end-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
          @error('sector_id')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
          
          <!-- Keep old sector field for backward compatibility (hidden) -->
          <input type="hidden" id="sector" name="sector" value="{{ old('sector', $project->sector) }}">
        </div>

        <div>
          <label class="block text-body font-medium text-the-end-400 mb-2" for="client_id">
            Client
          </label>
          <select id="client_id" name="client_id" class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 appearance-none focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 @error('client_id') border-chicken-comb-600 @enderror">
            <option value="">Select a client</option>
            @foreach($clients as $client)
              <option value="{{ $client->id }}" {{ old('client_id', $project->client_id) == $client->id ? 'selected' : '' }}>
                {{ $client->name }}
              </option>
            @endforeach
          </select>
          @error('client_id')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label class="block text-body font-medium text-the-end-400 mb-2" for="industry_id">
            Industry
          </label>
          <div class="flex items-center space-x-2">
            <select id="industry_id" name="industry_id" class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 appearance-none focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 @error('industry_id') border-chicken-comb-600 @enderror" required>
              <option value="">Select an industry</option>
              @foreach($industries as $industry)
                <option value="{{ $industry->id }}" {{ old('industry_id', $project->industry_id) == $industry->id ? 'selected' : '' }}>
                  {{ $industry->name }}
                </option>
              @endforeach
            </select>
            <a href="{{ route('admin.industries.create') }}" target="_blank" class="inline-flex items-center justify-center h-10 px-3 py-2 bg-pepper-green-600 text-white rounded-full hover:bg-pepper-green-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
              </svg>
            </a>
            <a href="{{ route('admin.industries.index') }}" target="_blank" class="inline-flex items-center justify-center h-10 px-3 py-2 bg-the-end-600 text-white rounded-full hover:bg-the-end-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
          @error('industry_id')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
          
          <!-- Keep old industry field for backward compatibility (hidden) -->
          <input type="hidden" id="industry" name="industry" value="{{ old('industry', $project->industry) }}">
        </div>

        <div>
          <label class="block text-body font-medium text-the-end-400 mb-2" for="sdg_alignment_id">
            SDG Alignment
          </label>
          <div class="flex items-center space-x-2">
            <select id="sdg_alignment_id" name="sdg_alignment_id" class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 appearance-none focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 @error('sdg_alignment_id') border-chicken-comb-600 @enderror" required>
              <option value="">Select an SDG goal</option>
              @foreach($sdgAlignments as $sdgAlignment)
                <option value="{{ $sdgAlignment->id }}" {{ old('sdg_alignment_id', $project->sdg_alignment_id) == $sdgAlignment->id ? 'selected' : '' }}>
                  {{ $sdgAlignment->name }}
                </option>
              @endforeach
            </select>
            <a href="{{ route('admin.sdg-alignments.create') }}" target="_blank" class="inline-flex items-center justify-center h-10 px-3 py-2 bg-pepper-green-600 text-white rounded-full hover:bg-pepper-green-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
              </svg>
            </a>
            <a href="{{ route('admin.sdg-alignments.index') }}" target="_blank" class="inline-flex items-center justify-center h-10 px-3 py-2 bg-the-end-600 text-white rounded-full hover:bg-the-end-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
          @error('sdg_alignment_id')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
          
          <!-- Keep old sdg_alignment field for backward compatibility (hidden) -->
          <input type="hidden" id="sdg_alignment" name="sdg_alignment" value="{{ old('sdg_alignment', $project->sdg_alignment) }}">
        </div>

        <div>
          <label class="block text-body font-medium text-the-end-400 mb-2.5 mt-4">
            Featured Image
          </label>
          @if($project->featured_image)
            <div class="mb-3">
              <p class="text-sm text-the-end-600 mb-2">Current image:</p>
              <img src="{{ asset('storage/' . $project->featured_image) }}" alt="{{ $project->title }}" class="h-32 w-auto object-cover rounded-md">
            </div>
          @endif
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-white-smoke-300 border-dashed rounded-lg hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50">
            <div class="space-y-1 text-center">
              <svg class="mx-auto h-6 w-6 text-the-end-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-body-sm text-the-end-600">
                <label for="featured_image" class="relative cursor-pointer rounded-md font-medium text-chicken-comb-600">
                  <span>Upload a new image</span>
                  <input id="featured_image" name="featured_image" type="file" class="sr-only" accept="image/*">
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-[11px] text-the-end-400">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
          @error('featured_image')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
          
          <div class="space-y-2 mt-2">
            <label class="block text-body font-medium text-the-end-400">Featured work</label>
            <div class="space-y-1">
              <label class="flex items-center space-x-2">
                <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $project->is_featured) ? 'checked' : '' }} class="w-4 h-4 border-the-end-200 text-pepper-green-600 focus:ring-pepper-green-300 hover:border-pepper-green-500">
                <span class="text-the-end-900">Featured work</span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Work Content Area with Custom Festa Rich Text Editor -->
    <div>
      <label class="block text-body font-medium text-the-end-400 mb-2" for="content">
        Work content
      </label>
      <input id="content-hidden" type="hidden" name="content" value="{{ old('content', $project->content) }}">
      <div id="festa-editor" class="festa-rich-text-editor w-full min-h-[300px] bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400 @error('content') border-chicken-comb-600 @enderror"></div>
      @error('content')
        <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
      @enderror
    </div>

    <div class="flex items-center space-x-4">
      <!-- Submit buttons -->
      <button type="submit" name="save_draft" value="1" class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-pepper-green-600/50 text-the-end-700 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center">
        Save changes
      </button>
      
      <button type="submit" class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
        Update & publish
      </button>
    </div>
  </form>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/festa-rich-text-editor.js') }}"></script>
<script src="{{ asset('js/festa-editor-init.js') }}"></script>
<script src="{{ asset('js/add-video-button.js') }}"></script>
<script src="{{ asset('js/force-video-button.js') }}"></script>
<script>
console.log('Admin edit work page loaded');

// Script to handle the sector_id, industry_id, and sdg_alignment_id selects
document.addEventListener('DOMContentLoaded', function() {
  // Handle sector_id changes
  const sectorSelect = document.getElementById('sector_id');
  const sectorHidden = document.getElementById('sector');
  
  if (sectorSelect && sectorHidden) {
    sectorSelect.addEventListener('change', function() {
      const selectedOption = this.options[this.selectedIndex];
      // Default to empty string if nothing selected
      sectorHidden.value = selectedOption.text.toLowerCase().replace(/\s+/g, '-');
    });
  }
  
  // Handle industry_id changes
  const industrySelect = document.getElementById('industry_id');
  const industryHidden = document.getElementById('industry');
  
  if (industrySelect && industryHidden) {
    industrySelect.addEventListener('change', function() {
      const selectedOption = this.options[this.selectedIndex];
      // Default to empty string if nothing selected
      industryHidden.value = selectedOption.text.toLowerCase().replace(/\s+/g, '-');
    });
  }
  
  // Handle sdg_alignment_id changes
  const sdgSelect = document.getElementById('sdg_alignment_id');
  const sdgHidden = document.getElementById('sdg_alignment');
  
  if (sdgSelect && sdgHidden) {
    sdgSelect.addEventListener('change', function() {
      const selectedOptionValue = this.value;
      if (selectedOptionValue) {
        // Find the data-code attribute or use a default format
        const selectedOption = this.options[this.selectedIndex];
        fetch(`/api/sdg/${selectedOptionValue}`)
          .then(response => response.json())
          .then(data => {
            if (data && data.code) {
              sdgHidden.value = data.code;
            } else {
              // Default to sdgX format based on option text
              const num = parseInt(selectedOptionValue);
              sdgHidden.value = isNaN(num) ? '' : 'sdg' + num;
            }
          })
          .catch(error => {
            console.error('Error fetching SDG code:', error);
            // Fallback - if we can't get the code, use the index
            const optionIndex = this.selectedIndex;
            if (optionIndex > 0) {
              sdgHidden.value = 'sdg' + optionIndex;
            } else {
              sdgHidden.value = '';
            }
          });
      } else {
        sdgHidden.value = '';
      }
    });
  }
});
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, initializing editor');
    initFestaEditor('festa-editor', 'content-hidden');
    
    // Debug script to verify editor is fully initialized
    setTimeout(function() {
      console.log('Debug check: Editor initialized?', !!window.FestaRichTextEditor);
      
      const editorWrapper = document.querySelector('.festa-editor-wrapper');
      if (editorWrapper) {
        console.log('Editor wrapper found:', editorWrapper);
        
        // Check if toolbar was created correctly
        const toolbar = document.querySelector('.festa-editor-toolbar');
        if (toolbar) {
          console.log('Toolbar found with children:', toolbar.children.length);
          console.log('Toolbar buttons:', Array.from(toolbar.querySelectorAll('button')).map(b => b.title));
          
          // Force add video button after 500ms
          setTimeout(function() {
            if (typeof addVideoButtonToEditors === 'function') {
              addVideoButtonToEditors();
            }
          }, 500);
        } else {
          console.error('Toolbar not found!');
        }
      } else {
        console.error('Editor wrapper not found!');
      }
    }, 1000);
  });
</script>
@endsection 