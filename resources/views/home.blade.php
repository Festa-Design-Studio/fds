@extends('layouts.app')

@section('title', 'Festa Design Studio - Home')

@section('content')
    <x-home.hero-section>
        <x-slot name="button">
            <x-core.button variant="secondary" size="large">
                Why We Design for Good
            </x-core.button>
        </x-slot>
    </x-home.hero-section>

    <x-home.work-section
        title="Work in action"
        description="Discover how our collaborative design approach drives real-world change for mission-driven organizations."
        buttonText="View all our work"
        buttonUrl="{{ route('work') }}"
    >
        {{-- Display most recent work card--}}
        @if($latestProject)
            @php
                $tags = [];
                if ($latestProject->sector) {
                    $tags[] = ['type' => 'sector', 'label' => $latestProject->sector];
                }
                if ($latestProject->industry) {
                    $tags[] = ['type' => 'industry', 'label' => $latestProject->industry];
                }
                if ($latestProject->sdg_alignment) {
                    // Map SDG alignment to the correct label format, matching work/index.blade.php
                    $sdgLabels = [
                        'No Poverty' => 'sdg1',
                        'Zero Hunger' => 'sdg2',
                        'Good Health & Well-being' => 'sdg3',
                        'Quality Education' => 'sdg4',
                        'Gender equality' => 'sdg5',
                        'Clean water & sanitation' => 'sdg6',
                        'Affordable & clean energy' => 'sdg7',
                        'Decent work & economic growth' => 'sdg8',
                        'Industry, innovation and infrastructure' => 'sdg9',
                        'Reduced inequalities' => 'sdg10',
                        'Sustainable cities & communities' => 'sdg11',
                        'Responsible consumption & production' => 'sdg12',
                        'Climate Action' => 'sdg13',
                        'Life below water' => 'sdg14',
                        'Life on land' => 'sdg15',
                        'Peace, justice & strong institutions' => 'sdg16',
                        'Partnerships for the goals' => 'sdg17'
                    ];
                    
                    // Flip the map to look up by code
                    $sdgCodes = array_flip($sdgLabels);
                    
                    // If it's already a code (starts with 'sdg'), get the label
                    $sdgLabel = $latestProject->sdg_alignment;
                    if (str_starts_with($latestProject->sdg_alignment, 'sdg')) {
                        $sdgCode = $latestProject->sdg_alignment;
                        $sdgLabel = isset($sdgCodes[$sdgCode]) ? $sdgCodes[$sdgCode] : $latestProject->sdg_alignment;
                    }
                    
                    $tags[] = ['type' => 'sdg', 'label' => $sdgLabel];
                }
            @endphp
            
            <x-work.card
                title="{!! html_entity_decode($latestProject->title) !!}"
                description="{!! html_entity_decode($latestProject->excerpt) !!}"
                image="{{ asset('storage/' . $latestProject->featured_image) }}"
                url="{{ route('work.show', $latestProject->slug) }}"
                :tags="$tags"
            />
        @else
            <div class="bg-white-smoke-100 p-8 rounded-2xl text-center">
                <p class="text-the-end-700">No recent client's work published</p>
            </div>
        @endif
    </x-home.work-section>

    <x-home.insights-section
        title="Knowledge for impact"
        description="Explore our latest thoughts on design, social impact, and creating meaningful change."
        buttonText="View all our articles"
        buttonUrl="#"
    >
        <x-blog.article-card 
            title="The Future of Purpose-Driven Design"
            excerpt="How designers are shaping positive social impact through thoughtful, strategic approaches to digital experiences."
            date="Jun 15, 2023"
            readTime="5 min read"
            image="https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
            category="Design Insights"
            categoryType="design"
            author="Samuel Wilson"
            authorAvatar="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
            url="#"
        />
        
    </x-home.insights-section>
@endsection 