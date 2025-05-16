@extends('layouts.app') {{-- Assuming this is your main frontend layout --}}

@section('title', $article->meta_title ?? $article->title . ' - Blog - Festa Design Studio')
@section('meta_description', $article->meta_description ?? $article->excerpt)

@section('content')
    <x-core.breadcrumbs 
        :items="[
            ['label' => 'Blog', 'url' => route('resources.blog')],
            ['label' => $article->title, 'url' => null] 
        ]"
    />
    <article class=" px-2 py-8 md:py-12">
        {{-- Article Header Component --}}
        <x-blog.article-header :article="$articleDataForHeader" />

    

        {{-- Main Article Content --}}
        <div class="prose prose-lg lg:prose-xl max-w-3xl mx-auto px-4 my-8 text-body text-the-end-700">
            {!! $article->content !!} {{-- Make sure content is sanitized if it contains user-generated HTML --}}
        </div>

        {{-- Related Articles & Footer --}}
        {{-- The x-blog.article-footer component itself includes related articles --}}
        {{-- Remove the old x-blog.article-footer here if present --}}

        {{-- Article Footer (correct layout, matching the showcase) --}}
        <div class="max-w-3xl mx-auto px-4 my-8">
            <x-blog.article-footer 
                :articleId="$article->id"
                :title="$article->title"
                :url="route('blog.show', $article->slug)"
                :relatedArticles="$relatedArticlesData"
            />
        </div>

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