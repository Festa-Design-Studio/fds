@extends('layouts.app')

@section('title', 'Campaign Design - Festa Design Studio')

@section('content')
    <!-- Breadcrumbs navigation -->
    <x-core.breadcrumbs
        :items="[
            ['label' => 'Services', 'url' => route('services')],
            ['label' => 'Campaign Design']
        ]"
    />

    <!-- Campaign Design Hero Section -->
    <x-services.service-hero-section 
        serviceType="Campaign Design"
        title="Driving purposeful engagement and action"
        description="We design strategic campaigns that mobilize audiences, change behaviors, and create measurable impact for mission-driven organizations."
    />
    
    <!-- Campaign Design Core Services -->
    <x-services.service-core-section 
        expertiseTitle="Campaign design expertise"
        expertiseDescription="From awareness to action, we design comprehensive campaigns that connect with audiences and deliver results. Our campaign capabilities include:"
        :deliverables="[
            [
                'title' => 'Campaign Strategy',
                'description' => 'Define clear objectives, audience targeting, and measurement frameworks.'
            ],
            [
                'title' => 'Multichannel Planning',
                'description' => 'Create integrated experiences across digital, social, and traditional media.'
            ],
            [
                'title' => 'Fundraising Campaigns',
                'description' => 'Develop compelling appeals that inspire generosity and participation.'
            ],
            [
                'title' => 'Behavior Change Design',
                'description' => 'Apply behavioral insights to create campaigns that shift attitudes and actions.'
            ],
            [
                'title' => 'Advocacy Campaigns',
                'description' => 'Mobilize supporters to drive policy change and social progress.'
            ],
            [
                'title' => 'Impact Reporting',
                'description' => 'Share campaign results through compelling visuals and storytelling.'
            ]
        ]"
    />
    
    <!-- Core Services CTA -->
    <x-services.service-cta-section />
@endsection 