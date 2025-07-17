@extends('layouts.app')

@section('title', $pageSeo?->og_title ?: ($pageTitle ?? 'Blog - Festa Design Studio'))

@section('meta_description', $pageSeo?->meta_description ?: 'Explore insights, stories, and resources on design for social impact. Read our latest articles on nonprofit design, project design, and creating meaningful change.')

@section('meta_keywords', $pageSeo?->meta_keywords ?: 'design blog, nonprofit design articles, social impact design, design for good resources, project design insights')

@section('og_title', $pageSeo?->og_title ?: ($pageTitle ?? 'Blog - Festa Design Studio'))
@section('og_description', $pageSeo?->og_description ?: 'Explore insights, stories, and resources on design for social impact. Read our latest articles on nonprofit design and creating meaningful change.')
@section('og_image', $pageSeo?->og_image ?: asset('images/blog-og-image.jpg'))
@section('og_url', url()->current())

@section('twitter_title', $pageSeo?->twitter_title ?: ($pageTitle ?? 'Blog - Festa Design Studio'))
@section('twitter_description', $pageSeo?->twitter_description ?: 'Explore insights, stories, and resources on design for social impact. Read our latest articles on nonprofit design.')
@section('twitter_image', $pageSeo?->twitter_image ?: asset('images/blog-twitter-card.jpg'))

@section('structured_data')
@if($pageSeo?->structured_data)
{!! json_encode($pageSeo->structured_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
@else
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "CollectionPage",
    "name": "{{ $pageTitle ?? 'Blog - Festa Design Studio' }}",
    "description": "Explore insights, stories, and resources on design for social impact from Festa Design Studio",
    "url": "{{ url()->current() }}",
    "mainEntity": {
        "@type": "Blog",
        "name": "Festa Design Studio Blog",
        "description": "Insights and resources on design for social impact"
    }
}
</script>
@endif
@endsection

@section('content')
    <x-core.breadcrumbs 
        :items="array_values(array_filter([
            ['label' => 'Blog', 'url' => route('resources.blog')],
            // Add current category to breadcrumbs if active
            isset($activeCategory) ? ['label' => $activeCategory->name, 'url' => null] : null
        ]))"
    />
    
    <!-- Featured Article Container -->
    <div class="py-8 px-4 md:px-8 lg:px-16">
        <div class="max-w-7xl mx-auto">
            @if (isset($featuredArticle) && $featuredArticle)
                <x-blog.featured-article 
                    :title="$featuredArticle->title"
                    :excerpt="$featuredArticle->excerpt"
                    :image="$featuredArticle->image_path ? asset('storage/' . $featuredArticle->image_path) : null"
                    :category="$featuredArticle->category->name ?? null"
                    :categoryType="$featuredArticle->category->slug ?? 'default'"
                    :author="$featuredArticle->author->name ?? 'Festa Team'"
                    :authorTitle="$featuredArticle->author->job_title ?? null"
                    :authorAvatar="$featuredArticle->author->profile_photo_path ? asset('storage/' . $featuredArticle->author->profile_photo_path) : ($featuredArticle->author ? 'https://ui-avatars.com/api/?name=' . urlencode($featuredArticle->author->name) . '&color=7F9CF5&background=EBF4FF' : null)"
                    :date="$featuredArticle->published_at ? $featuredArticle->published_at->format('M d, Y') : null"
                    :url="route('blog.show', $featuredArticle->slug)"
                />
            @endif
        </div>
    </div>
    
    <div class="py-12">
        <x-blog.grid-section 
            :title="$pageTitle ?? 'Our Latest Articles'"
            :subtitle="$pageSubtitle ?? 'Insights, stories, and updates from the Festa Design Studio team.'"
            :showCategories="true"
            :categories="$categories->map(function($category) use ($activeCategory) {
                return [
                    'label' => $category->name,
                    'type' => $category->slug,
                    'url' => route('resources.blog.category', $category->slug),
                    'isActive' => isset($activeCategory) && $activeCategory->slug === $category->slug,
                    'colorClass' => $category->color_class,
                ];
            })->all()"
            :showLoadMore="$articles->hasMorePages()"
            :loadMoreUrl="$articles->hasMorePages() ? 
                (isset($activeCategory) ? 
                    $articles->appends(['categorySlug' => $activeCategory->slug])->nextPageUrl() : 
                    $articles->nextPageUrl()) 
                : '#'"
            loadMoreText="Load More Articles"
        >
            @forelse ($articles as $article)
                <x-blog.article-card 
                    :title="$article->title"
                    :excerpt="$article->excerpt"
                    :date="$article->published_at ? $article->published_at->format('M d, Y') : null"
                    :readTime="$article->reading_time ? $article->reading_time . ' min read' : null"
                    :image="$article->image_path ? asset('storage/' . $article->image_path) : null"
                    :category="$article->category->name ?? null"
                    :categoryType="$article->category->slug ?? 'default'"
                    :colorClass="$article->category->color_class ?? null"
                    :author="$article->author->name ?? 'Festa Team'"
                    :authorTitle="$article->author->job_title ?? null"
                    :authorAvatar="$article->author->profile_photo_path ? asset('storage/' . $article->author->profile_photo_path) : ($article->author ? 'https://ui-avatars.com/api/?name=' . urlencode($article->author->name) . '&color=7F9CF5&background=EBF4FF' : null)"
                    :url="route('blog.show', $article->slug)"
                />
            @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-10">
                    <p class="text-xl text-gray-600">No articles published {{ isset($activeCategory) ? 'in this category' : 'yet' }}. Check back soon!</p>
                </div>
            @endforelse
        </x-blog.grid-section>

        {{-- Basic Pagination (if not using load more button from grid-section) --}}
        {{-- <div class="mt-12">
            {{ isset($activeCategory) ? $articles->appends(['categorySlug' => $activeCategory->slug])->links() : $articles->links() }}
        </div> --}}
    </div>
@endsection 