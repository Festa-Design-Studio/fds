@props([
    'eyebrow' => 'Nonprofit sector challenges',
    'title' => 'Navigating Limited Resources with Purpose-Driven Design',
    'description' => 'Understanding the real barriers nonprofits face—and how Festa empowers impact through design, branding, and digital strategy.',
    'expertise' => []
])

<!-- Sector Expertise Section -->
<section class="py-20 px-4 md:px-8 lg:px-16 bg-leaf-50/50">
    <div class="max-w-3xl mx-auto space-y-8">
        <!-- Eyebrow -->
        <p class="text-body-sm text-chicken-comb-600 text-center uppercase tracking-wide">
            {{ $eyebrow }}
        </p>

        <!-- Section Title -->
        <h2 class="text-h2 font-bold text-center text-pepper-green">{{ $title }}</h2>

        <!-- Section Description -->
        <p class="text-body-lg text-the-end-700 text-center max-w-3xl mx-auto">
            {{ $description }}
        </p>

        <!-- Sector expertise Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
            @foreach($expertise as $item)
                <!-- Specific Expertise -->
                <div class="bg-white-smoke-50 rounded-lg p-6 hover:shadow-lg transition-all border border-white-smoke-300">
                    <!-- Card Header with Service Icon -->
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 rounded-xl bg-pepper-green-100 flex items-center justify-center">
                            <svg class="w-8 h-8 text-pepper-green-600">
                                <path d="{{ $item['icon'] ?? 'M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7' }}"/>
                            </svg>
                        </div>
                        <h3 class="text-h5 font-semibold text-the-end-900">{{ $item['title'] }}</h3>
                    </div>
                
                    <!-- Service Options -->
                    <div class="space-y-4">
                        <div class="p-4 bg-white-smoke-100 rounded-lg">
                            <p class="text-body-sm text-the-end-700 mb-4">{{ $item['intro'] }}</p>
                            <ul class="space-y-2 mb-4 text-body-sm">
                                @foreach($item['points'] as $point)
                                    <li class="text-the-end-700 flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-pepper-green-600"></span>
                                        {{ $point }}
                                    </li>
                                @endforeach
                            </ul>
                            <p class="text-body-sm text-the-end-700">{{ $item['conclusion'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section> 