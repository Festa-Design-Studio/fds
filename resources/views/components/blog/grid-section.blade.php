@props([
    'title' => 'Latest Articles',
    'subtitle' => 'Explore our latest insights on design, impact, and innovation',
    'showCategories' => true,
    'categories' => [],
    'showLoadMore' => true,
    'loadMoreUrl' => '#',
    'loadMoreText' => 'Load More',
])

<section class="py-12 px-4 md:px-8 lg:px-16">
    <div class="max-w-7xl mx-auto space-y-14">
        <!-- Blog Grid Section Headline-->
        <div class="text-center">
            <h2 class="text-h2 font-bold text-the-end">{{ $title }}</h2>
            @if ($subtitle)
                <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto mt-4">
                    {{ $subtitle }}
                </p>
            @endif
        </div>

        <!-- Article Categories -->
        @if ($showCategories)
            <x-blog.categories-layout :categories="$categories">
                {{ $categories_slot ?? '' }}
            </x-blog.categories-layout>
        @endif

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{ $slot }}
        </div>

        <!-- Load More Button -->
        @if ($showLoadMore)
            <div class="flex justify-center mt-10">
                <x-core.button
                    variant="secondary"
                    size="large"
                    :href="$loadMoreUrl"
                >
                    {{ $loadMoreText }}
                </x-core.button>
            </div>
        @endif
    </div>
</section> 