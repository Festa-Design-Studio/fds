@props([
    'expertiseTitle' => 'Service expertise',
    'expertiseDescription' => 'Translating purpose into powerful visuals. We craft design systems and storytelling tools that speak clearly and connect deeply.',
    'deliverables' => [
        [
            'title' => 'Example deliverable',
            'description' => 'Example description of the deliverable'
        ]
    ]
])

<!-- Core Services Section -->
<div class="py-20 px-6 md:px-8 lg:px-16 mx-auto max-w-7xl mb-10 bg-white-smoke-100 rounded-lg">
    <div class="flex flex-col lg:flex-row justify-between items-baseline gap-4 border-t border-white-smoke-300 lg:mb-20 mb-6">
        <h3 class="text-h5 mt-10 mb-1.5 lg:mb-0 lg:w-1/3 text-chicken-comb-600">{{ $expertiseTitle }}</h3>
        <p class="text-body-sm text-the-end-700 mb-4 lg:w-1/3">
            {{ $expertiseDescription }}
        </p>
    </div>

    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-10 mx-auto mb-12">
        @foreach($deliverables as $deliverable)
            <!-- Service deliverable card -->
            <div class="bg-white-smoke-50 rounded-lg p-4 transition-all duration-150 hover:shadow-sm hover:bg-white-smoke-100 border border-the-end-100">
                <div class="flex items-start gap-3">
                    <div class="p-1.5 bg-pepper-green-100 rounded">
                        <svg class="w-4 h-4 text-pepper-green-600" viewBox="0 0 16 16">
                            <path d="M13.78 4.22a.75.75 0 0 1 0 1.06l-7.25 7.25a.75.75 0 0 1-1.06 0L2.22 9.28a.75.75 0 0 1 1.06-1.06L6 10.94l6.72-6.72a.75.75 0 0 1 1.06 0z" fill="currentColor" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-body font-medium text-the-end-900">{{ $deliverable['title'] }}</h4>
                        <p class="text-body-sm text-the-end-600">{{ $deliverable['description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div> 