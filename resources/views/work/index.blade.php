@extends('layouts.work')

@section('title', 'Our Work - Festa Design Studio')

@section('breadcrumbs')
    <!-- Breadcrumb -->
    <x-core.breadcrumbs :items="[
        ['label' => 'Work', 'url' => '']
    ]" class="" />
@endsection

@section('content')
    <!-- 2. Hero Section -->
    <x-work.hero 
        title="Our Portfolio of Impact"
        description="Explore our collection of purpose-driven projects that create meaningful change for organizations making a difference."
    />

    <!-- 3. Metrics Section -->
    <x-work.metrics :metrics="$metrics" :version="time()" />

    <!-- 4. Filter Component -->
    <x-work.filter 
        :sectorOptions="[
            'nonprofit' => 'Nonprofit',
            'startup' => 'Startup',
            'education' => 'Education',
            'healthcare' => 'Healthcare'
        ]"
        :industryOptions="[
            'tech' => 'Technology',
            'healthcare' => 'Healthcare',
            'education' => 'Education',
            'environment' => 'Environment'
        ]"
        :sdgOptions="[
            'sdg1' => 'No Poverty',
            'sdg2' => 'Zero Hunger',
            'sdg3' => 'Good Health & Well-being',
            'sdg4' => 'Quality Education',
            'sdg13' => 'Climate Action'
        ]"
        searchPlaceholder="Search projects..."
    />

    <!-- 5. Work Grid -->
    <x-work.grid 
        title="Our Projects"
        :items="$projects->map(function($project) {
            $tags = [];
            
            if ($project->sector) {
                $tags[] = ['type' => 'sector', 'label' => $project->sector];
            }
            
            if ($project->industry) {
                $tags[] = ['type' => 'industry', 'label' => $project->industry];
            }
            
            if ($project->sdg_alignment) {
                // Map SDG alignment to the correct code and label format
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
                if (Str::startsWith($project->sdg_alignment, 'sdg')) {
                    $sdgCode = $project->sdg_alignment;
                    $sdgLabel = isset($sdgCodes[$sdgCode]) ? $sdgCodes[$sdgCode] : $project->sdg_alignment;
                } else {
                    // If it's a label, keep it and get the code
                    $sdgLabel = $project->sdg_alignment;
                    $sdgCode = isset($sdgLabels[$sdgLabel]) ? $sdgLabels[$sdgLabel] : 'sdg'.array_search($sdgLabel, array_values($sdgCodes)) + 1;
                }
                
                $tags[] = ['type' => 'sdg', 'label' => $sdgLabel, 'code' => $sdgCode];
            }
            
            return [
                'title' => $project->title,
                'description' => $project->excerpt,
                'image' => asset('storage/' . $project->featured_image),
                'url' => route('work.show', $project->slug),
                'tags' => $tags
            ];
        })->toArray()"
    >
        <!-- 6. Load More Work Button -->
        <x-slot name="footer">
            @if($projects->count() > 3)
                <x-core.button variant="secondary" size="large" class="load-more-btn">
                    Load more work
                </x-core.button>
            @endif
        </x-slot>
    </x-work.grid>

    <!-- 7. Testimonial Section -->
    <x-work.testimonial-section 
        title="What Our Partners Say"
        description="Real stories from organizations making a difference with our collaborative approach to social impact design."
        :testimonials="[
            [
                'quote' => 'The design system has completely transformed how we approach our projects. We\'ve seen a 45% increase in engagement.',
                'authorName' => 'Elena Rodriguez',
                'authorTitle' => 'Lead Designer, TechCorp'
            ],
            [
                'quote' => 'Working with Festa helped us clarify our message and reach more people in need. Their strategic approach made all the difference.',
                'authorName' => 'Michael Chen',
                'authorTitle' => 'Executive Director, Health Forward'
            ],
            [
                'quote' => 'Our rebrand exceeded all expectations. Festa took the time to understand our mission and translated it beautifully into our visual identity.',
                'authorName' => 'Sarah Johnson',
                'authorTitle' => 'Communications Director, EcoAction'
            ]
        ]"
    />
@endsection 