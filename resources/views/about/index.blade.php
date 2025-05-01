@extends('layouts.app')

@section('title', 'About Us - Festa Design Studio')

@section('content')
    <!-- Breadcrumbs navigation -->
    <x-core.breadcrumbs
        :items="[
            ['label' => 'About']
        ]"
    />

    <!-- Hero Section -->
    <x-about.hero-section />
    
    <!-- Team Section -->
    <x-about.team-section title="Our Amazing Team">
        <x-slot name="header">
            <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto mt-4">
                Meet the talented individuals behind our creative design solutions.
            </p>
        </x-slot>
        
        @foreach($teamMembers as $member)
            <x-about.team-card
                name="{{ $member->name }}"
                position="{{ $member->title }}"
                image="{{ $member->avatar ? asset('storage/' . $member->avatar) : asset('src/img/fds-logomark.png') }}"
                linkedin="{{ $member->linkedin }}"
            >
                <x-core.button 
                    href="{{ route('about.team.show', $member) }}" 
                    variant="neutral" 
                    size="small"
                >
                    View Profile
                </x-core.button>
            </x-about.team-card>
        @endforeach
    </x-about.team-section>
    
    <!-- How We Work Section -->
    <x-about.how-we-work />
    
    <!-- SDG Section -->
    <x-about.sdg-section />
    
    <!-- Partners Section -->
    <x-about.partners-section 
        title="Organizations We've Worked With" 
        description="We're proud to collaborate with leading organizations across various sectors."
    >
        <x-about.partner-logo>
            <svg class="h-28 w-auto opacity-75 hover:opacity-100 transition-opacity" viewBox="0 0 337.6 72">
                <title>Microsoft_logo</title>
                <g>
                    <path fill="#737373" d="M140.4,14.4v43.2h-7.5V23.7h-0.1l-13.4,33.9h-5l-13.7-33.9h-0.1v33.9h-6.9V14.4h10.8l12.4,32h0.2l13.1-32H140.4z"></path>
                    <path fill="#F25022" d="M0 0H34.2V34.2H0z"></path>
                    <path fill="#7FBA00" d="M37.8 0H72V34.2H37.8z"></path>
                    <path fill="#00A4EF" d="M0 37.8H34.2V72H0z"></path>
                    <path fill="#FFB900" d="M37.8 37.8H72V72H37.8z"></path>
                </g>
            </svg>
        </x-about.partner-logo>
        
        <x-about.partner-logo>
            <svg class="h-28 w-auto opacity-75 hover:opacity-100 transition-opacity" viewBox="0 0 200 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30 15H5C2.23858 15 0 17.2386 0 20V40C0 42.7614 2.23858 45 5 45H30C32.7614 45 35 42.7614 35 40V20C35 17.2386 32.7614 15 30 15Z" fill="#0A66C2"/>
                <path d="M8.64286 23.5714H13.3929V37.5H8.64286V23.5714ZM11.0179 14.6429C12.6964 14.6429 14.0714 16.0179 14.0714 17.6964C14.0714 19.375 12.6964 20.75 11.0179 20.75C9.33929 20.75 7.96429 19.375 7.96429 17.6964C7.96429 16.0179 9.33929 14.6429 11.0179 14.6429Z" fill="white"/>
                <path d="M16.4821 23.5714H21.0893V25.7143H21.1607C21.9107 24.3929 23.6607 23 26.3393 23C31.1607 23 32.1429 26.1964 32.1429 30.3036V37.5H27.3929V31.1429C27.3929 29.3214 27.3214 26.9643 24.7857 26.9643C22.25 26.9643 21.2321 28.9643 21.2321 31.0714V37.5H16.4821V23.5714Z" fill="white"/>
            </svg>
        </x-about.partner-logo>
        
        <x-about.partner-logo>
            <svg class="h-28 w-auto opacity-75 hover:opacity-100 transition-opacity" viewBox="0 0 200 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M35 30C35 38.2843 28.2843 45 20 45C11.7157 45 5 38.2843 5 30C5 21.7157 11.7157 15 20 15C28.2843 15 35 21.7157 35 30Z" fill="#4285F4"/>
                <path d="M74.5 15H67.5L60 45H67L69 35H73L75 45H82L74.5 15ZM69.5 30L71 22.5L72.5 30H69.5Z" fill="#EA4335"/>
                <path d="M90 15H83V45H90V15Z" fill="#FBBC05"/>
                <path d="M115 15H108V32.5L102 15H95V45H102V27.5L108 45H115V15Z" fill="#34A853"/>
            </svg>
        </x-about.partner-logo>
    </x-about.partners-section>
@endsection 