@props([
    'title' => 'Related Articles',
    'articles' => [
        [
            'id' => 1,
            'title' => 'How to create amazing interfaces with Tailwind CSS',
            'slug' => 'how-to-create-amazing-interfaces-with-tailwind-css',
            'excerpt' => 'Learn how to build beautiful, responsive interfaces using Tailwind CSS and Alpine.js',
            'category' => 'Design',
            'image' => 'https://source.unsplash.com/random/600x400/?design',
            'published_at' => now()->subDays(rand(1, 30)),
            'reading_time' => rand(3, 15),
        ],
        [
            'id' => 2,
            'title' => 'The Future of Web Development in 2023',
            'slug' => 'the-future-of-web-development-in-2023',
            'excerpt' => 'Discover the latest trends and technologies shaping the future of web development',
            'category' => 'Development',
            'image' => 'https://source.unsplash.com/random/600x400/?coding',
            'published_at' => now()->subDays(rand(1, 30)),
            'reading_time' => rand(3, 15),
        ],
        [
            'id' => 3,
            'title' => 'Why Laravel is the Best PHP Framework',
            'slug' => 'why-laravel-is-the-best-php-framework',
            'excerpt' => 'Explore the features that make Laravel stand out among other PHP frameworks',
            'category' => 'Laravel',
            'image' => 'https://source.unsplash.com/random/600x400/?php',
            'published_at' => now()->subDays(rand(1, 30)),
            'reading_time' => rand(3, 15),
        ]
    ],
    'showViewAllLink' => true,
    'viewAllUrl' => '/blog',
    'viewAllText' => 'View All Articles',
    'cardSize' => 'md',
])

<section {{ $attributes->merge(['class' => 'py-8']) }}>
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-h4 text-the-end-900">{{ $title }}</h2>
            
            @if($showViewAllLink)
            <a href="{{ $viewAllUrl }}" class="text-primary-600 hover:text-primary-700 font-medium text-sm inline-flex items-center">
                {{ $viewAllText }}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </a>
            @endif
        </div>
        
        <!-- Articles Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($articles as $article)
                <x-blog.related-article-card :article="$article" :size="$cardSize" />
            @endforeach
        </div>
    </div>
</section> 