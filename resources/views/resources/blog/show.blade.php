@extends('layouts.app') {{-- Assuming this is your main frontend layout --}}

@section('title', $article->meta_title ?? $article->title . ' - Blog - Festa Design Studio')
@section('meta_description', $article->meta_description ?? ($article->excerpt ? Str::limit($article->excerpt, 155) : Str::limit(strip_tags($article->content), 155)))

@section('content')
    <x-core.breadcrumbs 
        :items="[
            ['label' => 'Blog', 'url' => route('resources.blog')],
            ['label' => $article->title, 'url' => null] 
        ]"
    />
    <article class="bg-gradient-to-br from-leaf-100/40 to-white-smoke-50 py-20 px-4 md:px-8 lg:px-16">
        {{-- Article Header Component --}}
        <x-blog.article-header :article="$articleDataForHeader" />

    

        {{-- Main Article Content --}}
        <div class="prose prose-lg lg:prose-xl max-w-3xl mx-auto px-4 my-8  text-the-end-700 festa-editor-content">
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

@push('meta')
    <meta property="og:title" content="{{ $article->meta_title ?? $article->title }}">
    <meta property="og:description" content="{{ $article->meta_description ?? ($article->excerpt ? Str::limit($article->excerpt, 155) : Str::limit(strip_tags($article->content), 155)) }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $article->image_path ? asset('storage/' . $article->image_path) : asset('default-image.jpg') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $article->meta_title ?? $article->title }}">
    <meta name="twitter:description" content="{{ $article->meta_description ?? ($article->excerpt ? Str::limit($article->excerpt, 155) : Str::limit(strip_tags($article->content), 155)) }}">
    <meta name="twitter:image" content="{{ $article->image_path ? asset('storage/' . $article->image_path) : asset('default-image.jpg') }}">

    {{-- JSON-LD Structured Data --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "{{ $article->title }}",
        "description": "{{ $article->excerpt ? Str::limit($article->excerpt, 155) : Str::limit(strip_tags($article->content), 155) }}",
        "image": "{{ $article->image_path ? asset('storage/' . $article->image_path) : asset('default-image.jpg') }}",
        "datePublished": "{{ $article->published_at->toISOString() }}",
        "dateModified": "{{ $article->updated_at->toISOString() }}",
        "author": {
            "@type": "Person",
            "name": "{{ $article->author ? $article->author->name : 'Festa Design Studio' }}",
            "url": "{{ route('about.team') }}"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Festa Design Studio",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('images/festa-logo.png') }}"
            },
            "url": "{{ route('home') }}"
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ url()->current() }}"
        },
        "articleSection": "{{ $article->category ? $article->category->name : 'Design' }}",
        "keywords": "{{ $article->category ? $article->category->name : 'design, nonprofit, social impact' }}",
        "wordCount": "{{ str_word_count(strip_tags($article->content)) }}",
        "timeRequired": "PT{{ $article->reading_time ?? 1 }}M",
        "url": "{{ url()->current() }}"
    }
    </script>

    {{-- BreadcrumbList Schema --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "{{ route('home') }}"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Blog",
                "item": "{{ route('resources.blog') }}"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "{{ $article->title }}",
                "item": "{{ url()->current() }}"
            }
        ]
    }
    </script>
@endpush 