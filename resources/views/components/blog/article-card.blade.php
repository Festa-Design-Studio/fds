@props([
    'title' => '',
    'excerpt' => '',
    'date' => '',
    'readTime' => '',
    'image' => '',
    'category' => '',
    'categoryType' => 'default',
    'author' => '',
    'authorTitle' => '',
    'authorAvatar' => '',
    'url' => '#',
    'colorClass' => null,
])

<article class="bg-white-smoke-100 rounded-lg overflow-hidden border border-white-smoke-300 h-full flex flex-col">
    <!-- Article Card Image Container -->
    <div class="relative w-full h-48 flex-shrink-0">
        @if ($image)
            <img class="w-full h-full object-cover" src="{{ $image }}" alt="{{ $title }}">
        @else
            <div class="w-full h-full flex items-center justify-center bg-white-smoke-300">
                <svg class="w-12 h-12 text-white-smoke-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
        @endif
        
        <!-- Article Card Category Badge -->
        @if ($category)
            <div class="absolute top-4 left-4">
                <x-blog.category :type="$categoryType" :colorClass="$colorClass ?? null">{{ $category }}</x-blog.category>
            </div>
        @endif
    </div>

    <!-- Article Card Content Container -->
    <div class="p-4 flex-grow flex flex-col">
        <div class="space-y-3 flex-grow flex flex-col">
        <!-- Article Card Meta Information -->
        <div class="flex items-center space-x-4 text-body-sm text-the-end-600">
            @if ($date)
                <span class="flex items-center">
                    <!-- Article Card Calendar Icon -->
                    <svg class="w-4 h-4 fill-the-end-600 mr-2" viewBox="0 0 48 48">
                        <title>calendar-day-view</title>
                        <g fill="#2a2a2a">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 13H46V35H2V13Z" fill="#2a2a2a"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 39H46V42H2V39Z" fill="#2a2a2a"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6H46V9H2V6Z" fill="#2a2a2a"></path>
                        </g>
                    </svg>
                    {{ $date }}
                </span>
            @endif
            
            @if ($readTime)
                <span class="flex items-center">
                    <!-- Article Card Clock Icon -->
                    <svg class="w-4 h-4 fill-the-end-600 mr-2" viewBox="0 0 48 48">
                        <g>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 2C11.8497 2 2 11.8497 2 24C2 36.1503 11.8497 46 24 46C36.1503 46 46 36.1503 46 24C46 11.8497 36.1503 2 24 2ZM25.5 23.1875V9H22.5V24.8126L35.937 33.5758L37.5758 31.063L25.5 23.1875Z"></path>
                        </g>
                    </svg>
                    {{ $readTime }}
                </span>
            @endif
        </div>

        <!-- Article Card Title -->
        <h3 class="text-h4 font-bold text-the-end-900 hover:text-pepper-green-600 transition-colors duration-200 line-clamp-2">
            <a href="{{ $url }}" class="hover:underline">{{ $title }}</a>
        </h3>

        <!-- Article Card Excerpt -->
        @if ($excerpt)
            <p class="text-body-sm text-the-end-700 line-clamp-3 flex-grow">
                {{ $excerpt }}
            </p>
        @endif

        <!-- Article Card Author -->
        @if ($author)
            <div class="flex items-center justify-between pt-4 border-t border-the-end-100 mt-auto">
                <div class="flex items-center space-x-3">
                    <!-- Author Avatar -->
                    @if ($authorAvatar)
                        <img class="w-10 h-10 rounded-full object-cover" src="{{ $authorAvatar }}" alt="{{ $author }}">
                    @else
                        <div class="w-10 h-10 rounded-full bg-white-smoke-300 flex items-center justify-center">
                            <span class="text-white-smoke-600 text-sm font-medium">{{ substr($author, 0, 1) }}</span>
                        </div>
                    @endif
                    
                    <!-- Author Name and Title -->
                    <div>
                        <p class="text-body-sm font-medium text-the-end-900">{{ $author }}</p>
                        @if ($authorTitle)
                            <p class="text-body-sm text-the-end-600">{{ $authorTitle }}</p>
                        @endif
                    </div>
                </div>
            </div>
        @endif
        </div>
    </div>
</article> 