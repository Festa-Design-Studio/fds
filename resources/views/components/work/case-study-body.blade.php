@props([
    'content' => null,
    'solutionGallery' => [],
    'resultsGallery' => []
])

<article class="mx-auto max-w-3xl py-20 px-7 md:px-8 lg:px-16">
    <!-- Content Section -->
    @if($content)
    <div class="space-y-8 mb-16">
        <div class="case-study-content">
            {!! $content !!}
        </div>
        
        @if(isset($solutionGallery) && count($solutionGallery) > 0)
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
            @foreach($solutionGallery as $image)
            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="{{ asset('storage/' . $image['url']) }}"
                        alt="{{ $image['alt'] ?? '' }}" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">
                    {{ $image['caption'] ?? '' }}
                </figcaption>
            </figure>
            @endforeach
        </div>
        @endif
        
        @if(isset($resultsGallery) && count($resultsGallery) > 0)
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
            @foreach($resultsGallery as $image)
            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="{{ asset('storage/' . $image['url']) }}"
                        alt="{{ $image['alt'] ?? '' }}" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">
                    {{ $image['caption'] ?? '' }}
                </figcaption>
            </figure>
            @endforeach
        </div>
        @endif
    </div>
    @endif

    {{ $slot }}
</article>

@once
@push('styles')
<style>
    /* Case Study Content Styling */
    .case-study-content h3.text-h4 {
        font-size: clamp(1.25rem, 3.5vw, 1.5rem);
        line-height: 1.4;
        font-weight: 600;
        color: var(--color-the-end-900);
        margin-bottom: 1rem;
        margin-top: 1.5rem;
    }
    
    .case-study-content h4.text-h6 {
        font-size: clamp(1rem, 2.5vw, 1.125rem);
        line-height: 1.5;
        font-weight: 500;
        color: var(--color-chicken-comb-600);
        margin-bottom: 0.75rem;
        margin-top: 1.5rem;
    }
    
    .case-study-content p.text-body-lg {
        font-size: clamp(1rem, 2.5vw, 1.125rem);
        line-height: 1.7;
        margin-bottom: 1.25rem;
        color: var(--color-the-end-700);
    }
    
    .case-study-content p.text-body {
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 1rem;
        color: var(--color-the-end-700);
    }
    
    .case-study-content p.text-body-sm {
        font-size: 0.875rem;
        line-height: 1.5;
        margin-bottom: 1rem;
        color: var(--color-the-end-600);
    }
    
    .case-study-content ul,
    .case-study-content ol {
        margin-left: 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    .case-study-content li {
        margin-bottom: 0.5rem;
    }
    
    .case-study-content figure {
        margin: 2rem 0;
    }
    
    .case-study-content figcaption {
        text-align: center;
        font-size: 0.875rem;
        color: var(--color-the-end-600);
        margin-top: 0.5rem;
    }
    
    /* Enhance image display */
    .case-study-content img {
        max-width: 100%;
        height: auto;
        border-radius: 0.375rem;
        margin: 1.5rem 0;
        display: block;
    }
    
    /* Responsive video container */
    .case-study-content .responsive-video {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
        max-width: 100%;
        margin: 1.5rem 0;
        border-radius: 0.375rem;
        background: var(--color-white-smoke-200);
    }
    
    .case-study-content .responsive-video iframe,
    .case-study-content .responsive-video video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 0.375rem;
        border: none;
    }
</style>
@endpush
@endonce 