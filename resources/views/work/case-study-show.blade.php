@extends('layouts.app')

@section('title', "$project->title - Festa Design Studio")

@push('meta')
    <meta name="description" content="{{ $project->excerpt ? Str::limit($project->excerpt, 155) : Str::limit(strip_tags($project->content), 155) }}">
    <meta name="keywords" content="design, {{ $project->sector->name ?? $project->sector }}, {{ $project->industry->name ?? $project->industry }}, social impact, project design">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $project->title }} - Festa Design Studio">
    <meta property="og:description" content="{{ $project->excerpt ? Str::limit($project->excerpt, 155) : Str::limit(strip_tags($project->content), 155) }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $project->featured_image ? asset('storage/' . $project->featured_image) : asset('images/festa-og-image.jpg') }}">
    <meta property="og:site_name" content="Festa Design Studio">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $project->title }} - Festa Design Studio">
    <meta name="twitter:description" content="{{ $project->excerpt ? Str::limit($project->excerpt, 155) : Str::limit(strip_tags($project->content), 155) }}">
    <meta name="twitter:image" content="{{ $project->featured_image ? asset('storage/' . $project->featured_image) : asset('images/festa-og-image.jpg') }}">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CreativeWork",
        "name": "{{ $project->title }}",
        "description": "{{ $project->excerpt ? Str::limit($project->excerpt, 155) : Str::limit(strip_tags($project->content), 155) }}",
        "image": "{{ $project->featured_image ? asset('storage/' . $project->featured_image) : asset('images/festa-og-image.jpg') }}",
        "url": "{{ url()->current() }}",
        "dateCreated": "{{ $project->created_at->toISOString() }}",
        "dateModified": "{{ $project->updated_at->toISOString() }}",
        "author": {
            "@type": "Organization",
            "name": "Festa Design Studio",
            "url": "{{ url('/') }}",
            "logo": "{{ asset('images/festa-logo.png') }}"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Festa Design Studio",
            "url": "{{ url('/') }}",
            "logo": "{{ asset('images/festa-logo.png') }}"
        },
        "genre": "{{ $project->sector->name ?? $project->sector }}",
        "keywords": "design, {{ $project->sector->name ?? $project->sector }}, {{ $project->industry->name ?? $project->industry }}, social impact, project design",
        "about": {
            "@type": "Thing",
            "name": "{{ $project->industry->name ?? $project->industry }} Design"
        }@if($project->client),
        "client": {
            "@type": "Organization",
            "name": "{{ $project->client->name }}",
            "url": "{{ $project->client->website_url }}"
        }@endif
    }
    </script>
@endpush

@section('breadcrumbs')
    <!-- Breadcrumb navigation -->
    <x-core.breadcrumbs :items="[
        ['label' => 'Work', 'url' => route('work')],
        ['label' => $project->title, 'url' => '']
    ]" />
@endsection

@section('content')
<!-- Work Case study Show page Content area-->
<div class="bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50">
    
    <!-- Project Work Case Study Header -->
    <x-work.case-study-header
        :title="$project->title"
        :client="$project->client"
        :sector="is_object($project->sector) ? $project->sector?->name : $project->sector"
        :industry="is_object($project->industry) ? $project->industry?->name : $project->industry"
        :sdgAlignment="is_object($project->sdgAlignment) ? $project->sdgAlignment?->name : $project->sdg_alignment"
        :excerpt="$project->excerpt"
        :featuredImage="$project->featured_image"
    />
    
    <!-- Project Work Case Study Body -->
    <x-work.case-study-body
        :content="$project->content"
    />
    
    <!-- Project Work Case Study Footer -->
    <x-work.case-study-footer
        :previousProject="$previousProject"
        :nextProject="$nextProject"
    />
</div>
@endsection 