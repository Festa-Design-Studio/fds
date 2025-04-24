@props([
    'title' => '',
    'date' => '',
    'readTime' => '',
    'image' => '',
    'url' => '#',
])

<div class="bg-white-smoke-300/40 rounded-lg overflow-hidden flex h-full">
    <!-- Compact Article Image Container -->
    <div class="relative w-1/3">
        @if ($image)
            <img class="w-full h-full object-cover" src="{{ $image }}" alt="{{ $title }}">
        @else
            <div class="w-full h-full flex items-center justify-center bg-white-smoke-300">
                <svg class="w-8 h-8 text-white-smoke-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
        @endif
    </div>

    <!-- Compact Article Content Container -->
    <div class="w-2/3 p-4 space-y-2">
        <!-- Title -->
        <h3 class="text-h5 font-bold text-the-end-900 hover:text-pepper-green-600 transition-colors duration-200 line-clamp-2">
            <a href="{{ $url }}" class="hover:underline">{{ $title }}</a>
        </h3>

        <!-- Compact Article Meta Information -->
        <div class="flex items-center space-x-2 text-body-sm text-the-end-600">
            @if ($date)
                <span>{{ $date }}</span>
            @endif
            
            @if ($date && $readTime)
                <span>•</span>
            @endif
            
            @if ($readTime)
                <span>{{ $readTime }}</span>
            @endif
        </div>
    </div>
</div> 