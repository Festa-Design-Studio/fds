@extends('layouts.app')

@section('title', 'Our Team - Festa Design Studio')

@section('content')
    <!-- Breadcrumbs navigation -->
    <x-core.breadcrumbs
        :items="[
            ['label' => 'About', 'url' => route('about')],
            ['label' => 'Team']
        ]"
    />

    <!-- Team Section -->
    <x-about.team-section title="Meet Our Team">
        <x-slot name="header">
            <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto mt-4">
                Our talented team combines expertise in design, technology, and strategy to deliver outstanding results.
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
@endsection 