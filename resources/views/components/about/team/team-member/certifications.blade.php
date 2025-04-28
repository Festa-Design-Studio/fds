@props(['certifications'])

@php
    // Ensure certifications is an array for foreach
    $certificationsData = is_string($certifications) ? json_decode($certifications, true) : $certifications;
@endphp

<!-- Certifications section-->
<section class="mt-10 space-y-6">
    <h2 class="text-h3 font-semibold text-pepper-green border-b border-white-smoke-300 pb-2">Certifications</h2>

    <div class="space-y-6">
        @foreach($certificationsData as $certification)
            <div class="flex items-center gap-4">
                @if(isset($certification['logo']) && $certification['logo'])
                    @php
                        $logoPath = $certification['logo'];
                        $logoUrl = str_starts_with($logoPath, 'http') 
                            ? $logoPath 
                            : (str_starts_with($logoPath, '/storage') 
                                ? $logoPath 
                                : asset('storage/' . $logoPath));
                    @endphp
                    <img class="w-10 h-10" src="{{ $logoUrl }}" alt="{{ $certification['organization'] ?? 'Organization' }}" class="w-10 h-10 object-contain">
                @else
                    <div class="w-10 h-10 bg-white-smoke-200 rounded-md flex items-center justify-center">
                        <svg class="w-5 h-5 text-the-end-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                        </svg>
                    </div>
                @endif
                <div>
                    <p class="text-body-sm text-the-end-700">
                        {{ $certification['name'] ?? 'Certification' }} 
                        @if(isset($certification['organization']))
                            — <span class="text-chicken-comb-600">{{ $certification['organization'] }}</span>
                        @endif
                    </p>
                    @if(isset($certification['date']))
                        <p class="text-body-sm text-the-end-600">{{ $certification['date'] }}</p>
                    @endif
                    @if(isset($certification['description']))
                        <p class="text-body-sm text-the-end-600 mt-1">{{ $certification['description'] }}</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</section> 