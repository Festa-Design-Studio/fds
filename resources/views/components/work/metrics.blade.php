@props(['metrics' => [], 'version' => null])

<section class="py-20 px-4 md:px-8 lg:px-16">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($metrics as $metric)
                <div class="text-center space-y-3">
                    <span 
                        x-data="{ 
                            value: 0,
                            alpineValue: '{{ $metric['value'] }}',
                            suffix: '',
                            version: '{{ $version }}'
                        }"
                        x-init="
                            console.log('Initializing metric:', alpineValue, 'Version:', version);
                            duration = 2000;
                            start = 0;
                            // Remove commas and any non-numeric characters except decimal points
                            end = parseInt(alpineValue.replace(/,/g, '').replace(/[^0-9.]/g, ''));
                            console.log('Parsed end value:', end);
                            startTimestamp = null;
                            
                            function step(timestamp) {
                                if (!startTimestamp) startTimestamp = timestamp;
                                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                                value = Math.floor(progress * (end - start) + start);
                                if (progress < 1) {
                                    window.requestAnimationFrame(step);
                                }
                            }
                            
                            observer = new IntersectionObserver((entries) => {
                                entries.forEach(entry => {
                                    if (entry.isIntersecting) {
                                        console.log('Starting animation for:', alpineValue);
                                        window.requestAnimationFrame(step);
                                        observer.unobserve(entry.target);
                                    }
                                });
                            }, { threshold: 0.5 });
                            
                            observer.observe($el);
                        "
                        x-text="value.toLocaleString() + suffix"
                        class="text-display font-black {{ $metric['colorClass'] ?? 'text-chicken-comb-600' }}"
                    ></span>
                    <h3 class="text-h4 font-bold text-the-end-900">{{ $metric['title'] }}</h3>
                    <p class="text-body text-the-end-700">{{ $metric['description'] }}</p>
                </div>
            @endforeach
            
            {{ $slot }}
        </div>
    </div>
</section> 