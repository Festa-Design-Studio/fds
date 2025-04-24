@props([
    'title' => '',
    'excerpt' => '',
    'date' => '',
    'author' => '',
    'authorImage' => '',
    'category' => '',
    'image' => '',
    'url' => '#',
])

<article class="bg-white-smoke-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
    <a href="{{ $url }}" class="block">
        <div class="relative aspect-video overflow-hidden">
            @if ($image)
                <img 
                    src="{{ $image }}" 
                    alt="{{ $title }}" 
                    class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                />
            @else
                <div class="w-full h-full flex items-center justify-center bg-white-smoke-300">
                    <span class="text-the-end-500">No image available</span>
                </div>
            @endif
            
            @if ($category)
                <div class="absolute top-4 left-4">
                    <span class="inline-block bg-chicken-comb-600 text-white-smoke-50 text-body-sm font-medium px-3 py-1 rounded-full">
                        {{ $category }}
                    </span>
                </div>
            @endif
        </div>
        
        <div class="p-6">
            <h3 class="text-h5 font-semibold text-the-end-900 mb-3 line-clamp-2 hover:text-chicken-comb-600 transition-colors duration-300">
                {{ $title }}
            </h3>
            
            @if ($excerpt)
                <p class="text-body text-the-end-700 mb-6 line-clamp-3">
                    {{ $excerpt }}
                </p>
            @endif
            
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    @if ($authorImage)
                        <img 
                            src="{{ $authorImage }}" 
                            alt="{{ $author }}" 
                            class="w-10 h-10 rounded-full object-cover mr-3"
                        />
                    @endif
                    
                    <div>
                        <span class="block text-body-sm font-medium text-the-end-900">{{ $author }}</span>
                        @if ($date)
                            <span class="block text-body-sm text-the-end-500">{{ $date }}</span>
                        @endif
                    </div>
                </div>
                
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-chicken-comb-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </div>
        </div>
    </a>
</article> 