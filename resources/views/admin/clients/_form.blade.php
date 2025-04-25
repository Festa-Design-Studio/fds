<div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
  <form class="space-y-6" method="POST" action="{{ isset($client) ? route('admin.clients.update', $client) : route('admin.clients.store') }}" enctype="multipart/form-data">
    @csrf
    @if(isset($client))
      @method('PUT')
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div>
        <!-- Name -->
        <div class="mb-4">
          <label class="block text-body font-medium text-the-end-400 mb-2" for="name">
            Client Name
          </label>
          <input type="text" id="name" name="name" value="{{ old('name', $client->name ?? '') }}" 
                 class="w-full h-10 px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 @error('name') border-chicken-comb-600 @enderror" 
                 placeholder="Enter client name" required>
          @error('name')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
        </div>

        <!-- Website URL -->
        <div class="mb-4">
          <label class="block text-body font-medium text-the-end-400 mb-2" for="website_url">
            Website URL
          </label>
          <input type="url" id="website_url" name="website_url" value="{{ old('website_url', $client->website_url ?? '') }}" 
                 class="w-full h-10 px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 @error('website_url') border-chicken-comb-600 @enderror" 
                 placeholder="https://example.com">
          @error('website_url')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
        </div>

        <!-- Description -->
        <div>
          <label class="block text-body font-medium text-the-end-400 mb-2" for="description">
            Description
          </label>
          <textarea id="description" name="description" rows="6" 
                   class="w-full px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400 focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 @error('description') border-chicken-comb-600 @enderror" 
                   placeholder="Write about the client...">{{ old('description', $client->description ?? '') }}</textarea>
          @error('description')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div>
        <!-- Logo -->
        <div>
          <label class="block text-body font-medium text-the-end-400 mb-2.5">
            Client Logo
          </label>
          @if(isset($client) && $client->logo)
            <div class="mb-4">
              <p class="text-sm text-the-end-600 mb-2">Current logo:</p>
              <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}" class="h-32 w-auto object-contain rounded-md">
            </div>
          @endif
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-white-smoke-300 border-dashed rounded-lg hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50">
            <div class="space-y-1 text-center">
              <svg class="mx-auto h-12 w-12 text-the-end-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-body-sm text-the-end-600">
                <label for="logo" class="relative cursor-pointer rounded-md font-medium text-chicken-comb-600">
                  <span>Upload a file</span>
                  <input id="logo" name="logo" type="file" class="sr-only" accept="image/*">
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-[11px] text-the-end-400">PNG, JPG, SVG up to 2MB</p>
            </div>
          </div>
          @error('logo')
            <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
          @enderror
        </div>
      </div>
    </div>

    <div class="flex items-center gap-4 pt-4">
      <button type="submit" class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
        {{ isset($client) ? 'Update Client' : 'Create Client' }}
      </button>
      
      <a href="{{ route('admin.clients.index') }}" class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
        Cancel
      </a>
    </div>
  </form>
</div> 