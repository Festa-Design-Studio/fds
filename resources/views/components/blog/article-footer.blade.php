@props([
    'articleId' => 1,
    'title' => 'Article Title',
    'url' => 'https://example.com/article',
    'relatedArticles' => []
])

<div {{ $attributes->merge(['class' => 'space-y-10 mt-28']) }}>
    <!-- Rate and share article section-->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 border-t border-b border-the-end-200 py-4">
        <!-- Rate this article -->
        <x-blog.rate-article :articleId="$articleId" />

        <!-- Share this article -->
        <x-blog.share-article :title="$title" :url="$url" />
    </div>

    <!-- Related Articles Section -->
    <x-blog.related-articles-section :articles="$relatedArticles" />
</div> 