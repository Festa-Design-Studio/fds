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
        buttonText="View all work"
        buttonUrl="#"
    >
        <x-work.card
            title="Community Engagement Platform"
            description="A digital solution connecting nonprofits with volunteers to increase community involvement."
            image="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
            url="#"
            :tags="[
                ['type' => 'sector', 'label' => 'Nonprofit'],
                ['type' => 'industry', 'label' => 'Community'],
                ['type' => 'sdg', 'label' => 'Partnerships for the Goals']
            ]"
        />
        
    </x-home.work-section>

    <x-home.insights-section
        title="Knowledge for impact"
        description="Explore our latest thoughts on design, social impact, and creating meaningful change."
        buttonText="View all articles"
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