@props([
    'eyebrow' => 'Sector challenges',
    'title' => 'Navigating Limited Resources with Purpose-Driven Design',
    'description' => 'Understanding the real barriers organizations face—and how Festa empowers impact through design, branding, and digital strategy.',
    'challenges' => []
])

@php
    // Default challenges for nonprofits if none provided
    $defaultChallenges = [
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2-1.343-2-3-2zM12 4c4.418 0 8 3.582 8 8s-3.582 8-8 8-8-3.582-8-8 3.582-8 8-8zm0 14c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6z"/></svg>',
            'title' => 'Resource Constraints',
            'description' => '67% of nonprofits face significant funding challenges, impacting their operational capacity and growth potential.',
            'source' => 'Nonprofit Finance Fund Survey 2023',
            'sourceUrl' => 'https://nff.org/survey'
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
            'title' => 'Brand Visibility',
            'description' => '73% of nonprofits struggle with effective brand communication, limiting their ability to reach potential supporters.',
            'source' => 'Nonprofit Brand Study 2023',
            'sourceUrl' => 'https://nonprofitbrandstudy.org/2023'
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h1a1 1 0 011 1v6.586a1 1 0 01-.293.707L12 23l-6.707-6.707A1 1 0 015 15.586V9a1 1 0 011-1h1m10 0V6a2 2 0 00-2-2H9a2 2 0 00-2 2v2m10 0H7"/></svg>',
            'title' => 'Digital Presence',
            'description' => '58% of nonprofits report challenges in maintaining an effective digital presence across multiple platforms.',
            'source' => 'Digital Nonprofit Report 2023',
            'sourceUrl' => 'https://digitalnonprofit.org/report-2023'
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/></svg>',
            'title' => 'Stakeholder Engagement',
            'description' => '61% of nonprofits find it challenging to maintain consistent engagement with donors, volunteers, and beneficiaries.',
            'source' => 'Engagement Analytics Study 2023',
            'sourceUrl' => 'https://engagementanalytics.org/nonprofit-study-2023'
        ]
    ];

    // Use provided challenges or default to nonprofit challenges
    $challengesToShow = !empty($challenges) ? $challenges : $defaultChallenges;
@endphp

<!-- Sector Challenges Section -->
<section class="py-20 px-4 md:px-8 lg:px-16 bg-white-smoke-100">
    <div class="max-w-6xl mx-auto space-y-8">
        <!-- Eyebrow -->
        <p class="text-body-sm text-chicken-comb-600 text-center uppercase tracking-wide">
            {{ $eyebrow }}
        </p>

        <!-- Section Title -->
        <h2 class="text-h2 font-bold text-center text-pepper-green">
            {{ $title }}
        </h2>

        <!-- Section Description -->
        <p class="text-body-lg text-the-end-700 text-center max-w-3xl mx-auto">
            {{ $description }}
        </p>

        <!-- Challenges Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mt-12">
            @foreach($challengesToShow as $challenge)
                <div class="bg-white-smoke-50 border border-white-smoke-300 rounded-lg p-6">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-lg bg-pot-of-gold-100 flex items-center justify-center">
                            @if(str_contains($challenge['icon'], '<svg'))
                                <!-- Full SVG code provided -->
                                <div class="w-6 h-6 text-pot-of-gold-600 [&>svg]:w-full [&>svg]:h-full [&>svg]:text-current">
                                    {!! $challenge['icon'] !!}
                                </div>
                            @else
                                <!-- Legacy path data -->
                                <svg class="w-6 h-6 text-pot-of-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    {!! $challenge['icon'] !!}
                                </svg>
                            @endif
                        </div>
                        <h3 class="text-h5 font-semibold text-the-end-900">{{ $challenge['title'] }}</h3>
                    </div>
                
                    <p class="text-body text-the-end-700 mb-4">{{ $challenge['description'] }}</p>
                
                    @if(isset($challenge['source']))
                        <div class="text-body-sm text-the-end-600">
                            <p>Source: 
                                @if(isset($challenge['sourceUrl']) && $challenge['sourceUrl'] !== '#')
                                    <a href="{{ $challenge['sourceUrl'] }}" class="hover:underline hover:text-pepper-green-600" target="_blank" rel="noopener">
                                        {{ $challenge['source'] }}
                                    </a>
                                @else
                                    {{ $challenge['source'] }}
                                @endif
                            </p>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section> 