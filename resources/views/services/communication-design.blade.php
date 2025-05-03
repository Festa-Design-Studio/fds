@extends('layouts.app')

@section('title', 'Communication Design - Festa Design Studio')

@section('content')
    <!-- Breadcrumbs navigation -->
    <x-core.breadcrumbs
        :items="[
            ['label' => 'Services', 'url' => route('services')],
            ['label' => 'Communication Design']
        ]"
    />

    <!-- Communication Design Hero Section -->
    <x-services.service-hero-section 
        serviceType="Communication Design"
        title="Crafting clear and compelling messages"
        description="We help purpose-driven organizations communicate their vision effectively through strategic messaging and powerful visual storytelling."
    />
    
    <!-- Communication Design Core Services -->
    <x-services.service-core-section 
        expertiseTitle="Communication design expertise"
        expertiseDescription="We turn complex ideas into clear, engaging messages that resonate with your audience and drive action. Our communication solutions include:"
        :deliverables="[
            [
                'title' => 'Brand Strategy',
                'description' => 'Define your unique voice and positioning in a crowded marketplace.'
            ],
            [
                'title' => 'Visual Identity',
                'description' => 'Create cohesive visual systems that express your organization\'s values.'
            ],
            [
                'title' => 'Content Strategy',
                'description' => 'Plan and produce content that engages your audience across channels.'
            ],
            [
                'title' => 'Messaging Frameworks',
                'description' => 'Develop consistent, audience-focused messaging that drives action.'
            ],
            [
                'title' => 'Report Design',
                'description' => 'Transform complex data into visually compelling, accessible reports.'
            ],
            [
                'title' => 'Digital Storytelling',
                'description' => 'Share your impact through powerful narratives that connect emotionally.'
            ]
        ]"
    />
    
    <!-- Core Services CTA -->
    <x-services.service-cta-section />
@endsection 