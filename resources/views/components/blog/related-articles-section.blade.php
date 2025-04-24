@props([
    'title' => 'Related Articles',
    'articles' => [],
])

<div {{ $attributes->merge(['class' => 'mb-12']) }}>
    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">{{ $title }}</h3>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($articles as $article)
            <x-blog.related-article-card 
                :title="$article['title']"
                :excerpt="$article['excerpt']"
                :url="$article['url']"
                :thumbnail="$article['thumbnail'] ?? null"
            />
        @empty
            <div class="col-span-3 text-center py-8 bg-white-smoke-50 rounded-lg">
                <p class="text-the-end-600">No related articles found.</p>
            </div>
        @endforelse
    </div>
</div> 