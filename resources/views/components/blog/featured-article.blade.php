@props([
    'title' => '',
    'excerpt' => '',
    'image' => '',
    'category' => '',
    'categoryType' => 'default',
    'author' => '',
    'authorTitle' => '',
    'authorAvatar' => '',
    'date' => '',
    'url' => '#',
])

<article class="py-8 px-4">
    <div class="bg-gradient-to-r from-chicken-comb-100 via-apocalyptic-orange-100 to-pot-of-gold-100 rounded-xl overflow-hidden">
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Featured Article Image Column -->
            <div class="aspect-[4/3] md:aspect-auto">
                @if ($image)
                    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover">
                @else
                    <div class="w-full h-full flex items-center justify-center bg-white-smoke-300">
                        <svg class="w-16 h-16 text-white-smoke-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                @endif
            </div>
            
            <!-- Content Column -->
            <div class="p-6 md:p-8 flex flex-col justify-center">
                @if ($category)
                    <div class="mb-4">
                        <x-blog.category :type="$categoryType">{{ $category }}</x-blog.category>
                    </div>
                @endif

                <h2 class="text-h2 font-bold text-the-end-900 mb-4">{{ $title }}</h2>
                
                @if ($excerpt)
                    <p class="text-body-lg text-the-end-700 mb-6">
                        {{ $excerpt }}
                    </p>
                @endif
                
                @if ($author)
                    <div class="flex items-center space-x-4 mb-6">
                        @if ($authorAvatar)
                            <img src="{{ $authorAvatar }}" alt="{{ $author }}" class="w-12 h-12 rounded-full object-cover">
                        @else
                            <div class="w-12 h-12 rounded-full bg-white-smoke-300 flex items-center justify-center">
                                <span class="text-white-smoke-600 text-lg font-medium">{{ substr($author, 0, 1) }}</span>
                            </div>
                        @endif
                        
                        <div>
                            <p class="text-body font-medium text-the-end-900">{{ $author }}</p>
                            <p class="text-body-sm text-the-end-600">
                                @if ($authorTitle)
                                    {{ $authorTitle }} 
                                    @if ($date)
                                        • {{ $date }}
                                    @endif
                                @else
                                    @if ($date)
                                        {{ $date }}
                                    @endif
                                @endif
                            </p>
                        </div>
                    </div>
                @endif
                
                <div>
                    <a href="{{ $url }}" class="inline-flex items-center px-4 py-2 border-2 text-body border-pepper-green-600/50 text-the-end-700 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2">
                        Read Article
                        <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</article> 