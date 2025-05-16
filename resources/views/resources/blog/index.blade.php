@extends('layouts.app')

@section('title', 'Blog - Festa Design Studio')

@section('content')
    <div class="py-12">
        <x-blog.grid-section 
            title="Our Latest Articles"
            subtitle="Insights, stories, and updates from the Festa Design Studio team."
            :showCategories="false"
            :showLoadMore="$articles->hasMorePages()"
            loadMoreUrl="{{ $articles->nextPageUrl() }}"
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
                    :author="$article->author->name ?? 'Festa Team'"
                    :authorTitle="$article->author->job_title ?? null"
                    :authorAvatar="$article->author->profile_photo_path ? asset('storage/' . $article->author->profile_photo_path) : ($article->author ? 'https://ui-avatars.com/api/?name=' . urlencode($article->author->name) . '&color=7F9CF5&background=EBF4FF' : null)"
                    :url="route('blog.show', $article->slug)"
                />
            @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-10">
                    <p class="text-xl text-gray-600">No articles published yet. Check back soon!</p>
                </div>
            @endforelse
        </x-blog.grid-section>

        {{-- Basic Pagination (if not using load more button from grid-section) --}}
        {{-- <div class="mt-12">
            {{ $articles->links() }}
        </div> --}}
    </div>
@endsection 