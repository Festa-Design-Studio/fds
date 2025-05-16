@extends('layouts.app') {{-- Assuming this is your main frontend layout --}}

@section('title', $article->meta_title ?? $article->title . ' - Blog - Festa Design Studio')
@section('meta_description', $article->meta_description ?? $article->excerpt)

@section('content')
    <article class="py-8 md:py-12">
        {{-- Article Header Component --}}
        <x-blog.article-header :article="$articleDataForHeader" />

        {{-- Main Article Content --}}
        <div class="prose prose-lg lg:prose-xl max-w-4xl mx-auto px-4 my-8">
            {!! $article->content !!} {{-- Make sure content is sanitized if it contains user-generated HTML --}}
        </div>

        {{-- Article Interaction Components (Share/Rate) --}}
        <div class="max-w-4xl mx-auto px-4 my-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 border-t border-b border-gray-200 py-6">
                <x-blog.rate-article :articleId="$article->id" />
                <x-blog.share-article 
                    :title="$article->title"
                    :url="route('blog.show', $article->slug)"
                />
            </div>
        </div>

        {{-- Related Articles & Footer --}}
        {{-- The x-blog.article-footer component itself includes related articles --}}
        <x-blog.article-footer
            :articleId="$article->id"
            :title="$article->title"
            :url="route('blog.show', $article->slug)"
            :relatedArticles="$relatedArticlesData"
        />

    </article>
@endsection

@push('styles')
{{-- If you have specific styles for prose or blog content --}}
{{-- <link rel="stylesheet" href="{{ asset('css/prose-styles.css') }}"> --}}
@endpush

@push('scripts')
{{-- If you have specific scripts for blog interactions e.g. for rating or sharing --}}
{{-- <script src="{{ asset('js/blog-interactions.js') }}"></script> --}}
@endpush 