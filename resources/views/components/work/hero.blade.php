@props([
    'title' => 'Our impactful work',
    'description' => 'Explore our collection of purpose-driven projects that create meaningful change.',
])

<section class="py-16 px-4 md:px-8 lg:px-16">
    <div class="max-w-7xl mx-auto text-center space-y-6">
        <h1 class="text-h1 font-black text-the-end-900">{{ $title }}</h1>
        <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
            {{ $description }}
        </p>
        
        @if(isset($slot) && !empty(trim($slot)))
            <div class="mt-6">
                {{ $slot }}
            </div>
        @endif
    </div>
</section> 