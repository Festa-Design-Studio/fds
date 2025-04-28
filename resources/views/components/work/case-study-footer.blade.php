@props([
    'previousProject' => null,
    'nextProject' => null
])

<section class="py-20 px-7 md:px-8 lg:px-16">
    <div class="max-w-3xl mx-auto space-y-12">
        <!-- Case Study Navigation for Previous and Next project -->
        <div class="flex justify-between items-center pt-8 border-t border-white-smoke-300">
            @if($previousProject)
                <!-- Dynamic naming of the previous case study and hyperlinking -->
                <a href="{{ route('work.show', $previousProject->slug) }}" class="inline-flex items-center text-pepper-green-600 hover:text-pepper-green-700">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    {{ $previousProject->title }}
                </a>
            @else
                <div></div>
            @endif
            
            @if($nextProject)
                <!-- Dynamic naming of the next case study and hyperlinking -->
                <a href="{{ route('work.show', $nextProject->slug) }}" class="inline-flex items-center text-pepper-green-600 hover:text-pepper-green-700">
                    {{ $nextProject->title }}
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            @else
                <div></div>
            @endif
        </div>
    </div>
</section> 