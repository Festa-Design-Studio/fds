@extends('layouts.app')

@section('title', 'Project Design - Festa Design Studio')

@section('content')
    <!-- Breadcrumbs navigation -->
    <x-core.breadcrumbs
        :items="[
            ['label' => 'Services', 'url' => route('services')],
            ['label' => 'Project Design']
        ]"
    />

    <!-- Project Design Hero Section -->
    <x-services.service-hero-section 
        serviceType="Project Design"
        title="Designing for impact and clarity"
        description="We partner with nonprofits and purpose-led teams to co-create strong project frameworks, strategies, and funding narratives that drive real change."
    />
    
    <!-- Project Design Core Services -->
    <x-services.service-core-section 
        expertiseTitle="Project design expertise"
        expertiseDescription="Translating purpose into powerful visuals. We craft design systems and storytelling tools that speak clearly and connect deeply. Industries we've worked in include:"
        :deliverables="[
            [
                'title' => 'Theory of change',
                'description' => 'Clarify your long-term vision and back it up with measurable.'
            ],
            [
                'title' => 'Grant writing support',
                'description' => 'Transform your project ideas into compelling funding proposals.'
            ],
            [
                'title' => 'Logframe design',
                'description' => 'Structure your goals, indicators, and assumptions with clarity.'
            ],
            [
                'title' => 'Workplans & Budgets',
                'description' => 'Break down your project into manageable actions and resource needs.'
            ],
            [
                'title' => 'M&E Frameworks',
                'description' => 'Track, measure, and report on progress with purpose and precision.'
            ],
            [
                'title' => 'Project Reviews',
                'description' => 'Evaluate project plans or past performance with expert insights.'
            ]
        ]"
    />
    
    <!-- Core Services CTA -->
    <x-services.service-cta-section />
@endsection 