@props([
    'article' => [
        'title' => 'How to create amazing interfaces with Tailwind CSS',
        'excerpt' => 'Learn how to build beautiful, responsive interfaces using Tailwind CSS and Alpine.js',
        'category' => 'Design',
        'image' => 'https://source.unsplash.com/random/1200x600/?design',
        'published_at' => now()->subDays(rand(1, 30)),
        'reading_time' => rand(3, 15),
        'author' => [
            'name' => 'John Doe',
            'avatar' => 'https://source.unsplash.com/random/100x100/?person',
            'title' => 'UI/UX Designer'
        ]
    ]
])

<article {{ $attributes->merge(['class' => 'py-8 px-4 md:px-8 lg:px-16 mb-10']) }}>
    <div class="lg:max-w-3xl mx-auto">
        <div class="space-y-10">
            <div class="space-y-6">
                <!-- Article Category -->
                <div>
                    <x-blog.category 
                        :type="$article['categoryType'] ?? 'default'" 
                        :colorClass="$article['colorClass'] ?? null"
                    >{{ $article['category'] }}</x-blog.category>
                </div>
                
                <!-- Article title -->
                <h1 class="text-h1 font-black text-the-end-900 mb-5">{{ $article['title'] }}</h1>
                
                <!-- Article Excerpt -->
                <p class="text-body-lg text-the-end-700 mb-6 lg:max-w-2xl">{{ $article['excerpt'] }}</p>
            </div>

            <div class="grid grid-cols-2 gap-6 items-center">
                <!-- Article Card Author -->
                <div class="flex items-center space-x-3">
                    <!-- Author Avatar -->
                    <img src="{{ $article['author']['avatar'] }}" alt="{{ $article['author']['name'] }}"
                        class="w-14 h-14 object-cover rounded-full">
                    <!-- Author Name and Title -->
                    <div>
                        <span class="text-the-end-400 text-body-sm hidden sm:block">Written by</span>
                        <p class="text-body font-medium text-the-end-700">{{ $article['author']['name'] }}</p>
                        <p class="text-body-sm text-the-end-400 hidden sm:block">{{ $article['author']['title'] }}</p>
                    </div>
                </div>

                <!-- Articles date and time of read -->
                <div class="flex-col space-y-1">
                    <div class="flex items-center space-x-1">
                        <svg class="w-4 h-4 fill-chicken-comb-600 mr-2" viewBox="0 0 48 48">
                            <title>calendar-day-view</title>
                            <g>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 13H46V35H2V13Z"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 39H46V42H2V39Z"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6H46V9H2V6Z"></path>
                            </g>
                        </svg>
                        <!-- Article Show page date -->
                        <div class="text-body-sm text-the-end-400">
                            <time datetime="{{ $article['published_at']->format('Y-m-d') }}">{{ $article['published_at']->format('F j, Y') }}</time>
                        </div>
                    </div>

                    <div class="flex items-center space-x-1">
                        <!-- Article Card Clock Icon -->
                        <svg class="w-4 h-4 fill-chicken-comb-600 mr-2" viewBox="0 0 48 48">
                            <g>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 2C11.8497 2 2 11.8497 2 24C2 36.1503 11.8497 46 24 46C36.1503 46 46 36.1503 46 24C46 11.8497 36.1503 2 24 2ZM25.5 23.1875V9H22.5V24.8126L35.937 33.5758L37.5758 31.063L25.5 23.1875Z"></path>
                            </g>
                        </svg>
                        <!-- Article Show page Read Time -->
                        <div class="text-body-sm text-the-end-400">
                            <span>{{ $article['reading_time'] }} min read</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article Featured/Cover Hero Image/Video/GIF -->
            <div class="aspect-video w-full rounded-2xl overflow-hidden bg-white-smoke-100">
                <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</article> 