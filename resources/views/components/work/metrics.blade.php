@props(['metrics' => [], 'version' => null])

<section class="py-20 px-4 md:px-8 lg:px-16">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($metrics as $metric)
                <div class="text-center space-y-3">
                    <div 
                        x-data="{ 
                            count: 0,
                            target: parseInt('{{ $metric['value'] }}') || 0,
                            duration: 3000,
                            startTime: null,
                            isAnimating: false
                        }"
                        x-init="
                            console.log('Metric value:', '{{ $metric['value'] }}', 'Parsed target:', parseInt('{{ $metric['value'] }}'));
                            
                            function animate(timestamp) {
                                if (!startTime) startTime = timestamp;
                                const progress = Math.min((timestamp - startTime) / duration, 1);
                                count = Math.floor(progress * target);
                                
                                if (progress < 1) {
                                    requestAnimationFrame(animate);
                                } else {
                                    isAnimating = false;
                                }
                            }
                            
                            const observer = new IntersectionObserver((entries) => {
                                entries.forEach(entry => {
                                    if (entry.isIntersecting && !isAnimating) {
                                        isAnimating = true;
                                        startTime = null;
                                        requestAnimationFrame(animate);
                                        observer.unobserve(entry.target);
                                    }
                                });
                            }, { threshold: 0.5 });
                            
                            observer.observe($el);
                        "
                        x-text="count.toLocaleString()"
                        class="text-display font-black {{ $metric['colorClass'] ?? 'text-chicken-comb-600' }}"
                    ></div>
                    <h3 class="text-h4 font-bold text-the-end-900">{{ $metric['title'] }}</h3>
                    <p class="text-body text-the-end-700">{{ $metric['description'] }}</p>
                </div>
            @endforeach
            
            {{ $slot }}
        </div>
    </div>
</section> 