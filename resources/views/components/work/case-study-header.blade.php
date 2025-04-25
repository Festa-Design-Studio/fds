@props([
    'title' => '',
    'client' => null,
    'sector' => null,
    'industry' => null, 
    'sdgAlignment' => null,
    'excerpt' => '',
    'featuredImage' => null
])

<article class="py-20 px-4 md:px-8 lg:px-16">
    <div class="max-w-3xl mx-auto">
        <article class="space-y-12">
            <div class="space-y-8">
                <!-- Case Study Page Title -->
                <h1 class="text-h1 font-black text-the-end-900 lg:max-w-4xl">{{ $title }}</h1>

                <!-- Client business name and website -->
                <div class="grid grid-cols-2">
                    <div class="space-y-2">
                        <p class="text-body font-medium text-the-end mb-2">Partner</p>
                        @if($client)
                        <a href="{{ route('client.show', $client->slug) }}"
                            class="text-body text-pepper-green-600 hover:text-pepper-green-700 transition-colors duration-150">
                            {{ $client->name }}
                        </a>
                        @else
                        <span class="text-body text-the-end-600">No partner assigned</span>
                        @endif
                    </div>

                    <!-- Work categories and Project showcase filter tags -->
                    <div class="flex-col space-y-4">
                        @if($sector)
                        <div class="space-y-2">
                            <p class="text-body font-medium text-the-end">Sector</p>
                            <!-- Sector Tag -->
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm
                            bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200">
                            {{ $sector }}
                            </span>
                        </div>
                        @endif

                        @if($industry)
                        <div class="space-y-2">
                            <p class="text-body font-medium text-the-end">Industry</p>
                            <!-- Industry Tag -->
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm
                            bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                            {{ $industry }}
                            </span>
                        </div>
                        @endif

                        @if($sdgAlignment)
                        <div class="space-y-2">
                            <p class="text-body font-medium text-the-end">SDG alignment</p>
                            <!-- SDG Tag -->
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm
                            bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border border-apocalyptic-orange-200">
                            {{ $sdgAlignment }}
                            </span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Case Study Excerpt -->
            <div>
                <p class="text-body-lg text-the-end-700 lg:max-w-3xl">{{ $excerpt }}</p>
            </div>

            <!-- Hero Image/Video/GIF support functionalities -->
            <div class="aspect-video w-full rounded-2xl overflow-hidden bg-white-smoke-100">
                @if($featuredImage)
                    <img src="{{ asset('storage/' . $featuredImage) }}"
                        alt="{{ $title }}" class="w-full h-full object-cover">
                @else
                    <div class="w-full h-full flex items-center justify-center bg-white-smoke-200">
                        <span class="text-the-end-400">No image available</span>
                    </div>
                @endif
            </div>
        </article>
    </div>
</article> 