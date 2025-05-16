@props([
    'categories' => [],
    'justifyCenter' => true,
])

<div class="flex flex-wrap {{ $justifyCenter ? 'justify-center' : '' }} gap-2">
    {{-- Link to view all articles if not already on the main blog page or if a category is active --}}
    @php
        $showAllLink = !Route::is('resources.blog') || collect($categories)->contains('isActive', true);
    @endphp
    @if($showAllLink)
        <a href="{{ route('resources.blog') }}"
           class="inline-flex items-center px-3 py-1 rounded-full text-body-sm transition-colors duration-150 ease-in-out bg-gray-100 text-gray-700 border border-gray-300 hover:bg-gray-200">
            All Articles
        </a>
    @endif

    @foreach ($categories as $category)
        @if (isset($category['type']) && isset($category['label']))
            <x-blog.category 
                :type="$category['type']" 
                :url="$category['url'] ?? null"
                :colorClass="$category['colorClass'] ?? null"
                :class="($category['isActive'] ?? false) ? 'ring-2 ring-offset-1 ring-chicken-comb-500 font-semibold' : ''"
            >
                {{ $category['label'] }}
            </x-blog.category>
        @endif
    @endforeach
    
    {{ $slot }}
</div> 