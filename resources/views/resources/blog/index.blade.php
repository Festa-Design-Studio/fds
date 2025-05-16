@extends('layouts.app')

@section('title', $pageTitle ?? 'Blog - Festa Design Studio')

@section('content')
    <x-core.breadcrumbs 
        :items="array_values(array_filter([
            ['label' => 'Blog', 'url' => route('resources.blog')],
            // Add current category to breadcrumbs if active
            isset($activeCategory) ? ['label' => $activeCategory->name, 'url' => null] : null
        ]))"
    />
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