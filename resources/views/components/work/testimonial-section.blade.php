@props([
    'title' => 'What our impact partners say',
    'description' => 'Real stories from organizations making a difference with our collaborative approach to social impact design.',
    'testimonials' => [],
])

<section class="py-20 px-4 md:px-8 lg:px-16">
    <div class="max-w-7xl mx-auto text-center space-y-6">
        <h2 class="text-h2 font-bold text-pepper-green">{{ $title }}</h2>
        <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
            {{ $description }}
        </p>
    </div>

    <div class="p-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($testimonials as $testimonial)
                <x-work.testimonial 
                    :quote="$testimonial['quote'] ?? ''" 
                    :authorName="$testimonial['authorName'] ?? ''" 
                    :authorTitle="$testimonial['authorTitle'] ?? ''"
                />
            @endforeach
            
            {{ $slot }}
        </div>
    </div>
</section> 