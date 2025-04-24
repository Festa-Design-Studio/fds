@props(['metrics' => []])

<section class="py-20 px-4 md:px-8 lg:px-16">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($metrics as $metric)
                <div class="text-center space-y-3">
                    <span class="text-display font-black {{ $metric['colorClass'] ?? 'text-chicken-comb-600' }}">{{ $metric['value'] }}</span>
                    <h3 class="text-h4 font-bold text-the-end-900">{{ $metric['title'] }}</h3>
                    <p class="text-body text-the-end-700">{{ $metric['description'] }}</p>
                </div>
            @endforeach
            
            {{ $slot }}
        </div>
    </div>
</section> 