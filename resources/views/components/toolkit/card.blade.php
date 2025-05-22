@props(['image' => null, 'title' => '', 'description' => '', 'tags' => ''])

<!-- Toolkit Card -->
<article class="bg-white-smoke-100 rounded-xl border border-white-smoke-300">
    <div class="p-6 space-y-4">
      <!-- Toolkit card image -->
      <div>
        @isset($image)
          {{ $image }}
        @endisset
      </div>
      
      <!-- Toolkit card tags layout -->
      @isset($tags)
        {{ $tags }}
      @endisset

      <!-- Toolkit Title and Description -->
      <h3 class="text-h4 font-bold mb-2 text-the-end-900">
        {{ $title }}
      </h3>
      
      <p class="text-body-sm text-the-end-700 mb-4">
        {{ $description }}
      </p>
      
      <!-- Toolkit CTA buttons here -->
      {{ $slot }}
    </div>
</article> 