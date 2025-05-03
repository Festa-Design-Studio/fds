@props([
    'title' => 'What our impact partners say',
    'description' => 'Real stories from organizations making a difference with our collaborative approach to social impact design.',
    'testimonials' => [],
])

@php
    // Debug info to verify the testimonial data
    $testimonialCount = is_array($testimonials) ? count($testimonials) : (is_object($testimonials) && method_exists($testimonials, 'count') ? $testimonials->count() : 0);
    \Illuminate\Support\Facades\Log::info('Testimonial component received data of type: ' . gettype($testimonials));
    \Illuminate\Support\Facades\Log::info('Testimonial component received count: ' . $testimonialCount);
    
    // Convert to array and ensure the correct structure
    $processedTestimonials = [];
    
    if (is_array($testimonials)) {
        // If it's already an array, use it
        $processedTestimonials = $testimonials;
    } elseif (is_object($testimonials) && method_exists($testimonials, 'toArray')) {
        // If it's a collection or similar object, convert to array
        $processedTestimonials = $testimonials->toArray();
    }
    
    // If we have testimonials, log the first one
    if (count($processedTestimonials) > 0) {
        \Illuminate\Support\Facades\Log::info('First testimonial:', [
            'data' => $processedTestimonials[0] ?? 'none'
        ]);
    }
@endphp



<div class="max-w-7xl mx-auto text-center space-y-6">
    <h2 class="text-h2 font-bold text-pepper-green">{{ $title }}</h2>
    <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
        {{ $description }}
    </p>
</div>

<div class="p-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="testimonials-container">
        @foreach($processedTestimonials as $testimonial)
            <div class="p-6 md:p-8 bg-white-smoke-100 border border-white-smoke-300 rounded-xl">
                <div class="mb-6">
                    <svg class="w-12 h-12 fill-chicken-comb-600" viewBox="0 0 32 32" aria-hidden="true" focusable="false">
                        <title>testimonial</title>
                        <g>
                            <defs></defs>
                            <path class="cls-1" d="M12.09,29.04H1.65c-.36,0-.65-.29-.65-.65v-13.04C1,9.06,3.33,4.91,7.92,3.01c.33-.14.71.02.85.35s-.02.71-.35.85c-3.9,1.61-5.96,5.14-6.11,10.48h9.77c.36,0,.65.29.65.65v13.04c0,.36-.29.65-.65.65Z"></path>
                            <path class="cls-1" d="M30.35,29.04h-10.43c-.36,0-.65-.29-.65-.65v-13.04c0-6.29,2.33-10.44,6.92-12.34.33-.14.71.02.85.35s-.02.71-.35.85c-3.9,1.61-5.96,5.14-6.11,10.48h9.77c.36,0,.65.29.65.65v13.04c0,.36-.29.65-.65.65h0Z"></path>
                        </g>
                    </svg>
                </div>
                <blockquote class="text-body leading-[1.7] mb-4 text-the-end-700">
                    {{ $testimonial['quote'] ?? '' }}
                </blockquote>
                <div class="mt-6 flex items-center">
                    @if(!empty($testimonial['author_avatar']))
                    <div class="mr-3 h-12 w-12 rounded-full overflow-hidden">
                        <img 
                            src="{{ asset('storage/' . $testimonial['author_avatar']) }}" 
                            alt="{{ $testimonial['author_name'] ?? 'Testimonial author' }}"
                            class="h-full w-full object-cover"
                            onerror="this.src='https://via.placeholder.com/48?text='; this.onerror=null;"
                        >
                    </div>
                    @endif
                    <div>
                        <div class="text-body font-medium text-the-end">{{ $testimonial['author_name'] ?? '' }}</div>
                        <div class="text-body-sm text-the-end-600">{{ $testimonial['author_title'] ?? '' }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('testimonials-container');
        const testimonials = @json($processedTestimonials);
        
        // Export testimonials data to window for external access
        window.festaTestimonials = testimonials;
    });
</script>
@endpush 