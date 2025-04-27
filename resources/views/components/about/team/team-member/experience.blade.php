@props(['experiences', 'title' => 'Professional experience'])

@php
    // Ensure experiences is an array for foreach
    $experiencesData = is_string($experiences) ? json_decode($experiences, true) : $experiences;
@endphp

<!-- Professional Experience section -->
<section class="mt-10 space-y-6">
  <h2 class="text-h3 font-semibold text-the-end-900 border-b border-white-smoke-300 pb-2">{{ $title }}</h2>

  <div class="space-y-6">
    @foreach($experiencesData as $experience)
      <div class="flex items-start gap-4">
        @if(isset($experience['logo']) && $experience['logo'])
          @php
            // Check if the logo is a URL, a storage path, or a relative path
            $logoPath = $experience['logo'];
            if (str_starts_with($logoPath, 'team-members/')) {
                $logoUrl = asset('storage/' . $logoPath);
            } elseif (str_starts_with($logoPath, '/')) {
                $logoUrl = $logoPath; // Assume it's an absolute path from the public directory
            } else {
                $logoUrl = $logoPath; // Assume it's already a URL
            }
          @endphp
          <img 
            src="{{ $logoUrl }}" 
            alt="{{ $experience['company'] ?? 'Company' }}" 
            class="w-12 h-12 object-contain"
          >
        @else
          <div class="w-12 h-12 bg-white-smoke-200 rounded-md flex items-center justify-center">
            <svg class="w-6 h-6 text-the-end-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm3 1h6v4H7V5zm8 8v2h1v1H4v-1h1v-2a1 1 0 011-1h8a1 1 0 011 1zM9 5h2v4H9V5z" clip-rule="evenodd" />
            </svg>
          </div>
        @endif
        <div class="space-y-2">
          <h3 class="text-h4 font-medium text-the-end-800">
            @if(isset($experience['role'])){{ $experience['role'] }}@endif
            @if(isset($experience['role']) && isset($experience['company'])) — @endif
            @if(isset($experience['company'])){{ $experience['company'] }}@endif
          </h3>
          @if(isset($experience['period']) && $experience['period'])
            <p class="text-body-sm text-chicken-comb-600">{{ $experience['period'] }}</p>
          @endif
          @if(isset($experience['description']) && $experience['description'])
            <p class="text-body-sm text-the-end-700">
              {{ $experience['description'] }}
            </p>
          @endif
        </div>
      </div>
    @endforeach
  </div>
</section> 