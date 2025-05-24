@props(['title' => 'Our partners', 'description' => 'Working together with leading organizations to create meaningful impact through design.'])

@php
  $aboutPartners = \App\Models\AboutPartner::where('is_active', true)
                    ->orderBy('display_order')
                    ->orderBy('name')
                    ->get();
@endphp

<!-- Clients logo-->
<section class="py-20 px-4 md:px-8 lg:px-16">
  <div class="max-w-7xl mx-auto">
    <!-- Section Header -->
    <div class="text-center mb-12">
      <h2 class="text-h2 font-bold text-pepper-green">{{ $title }}</h2>
      <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto mt-4">{{ $description }}</p>
    </div>

    <!-- partners logo card grid layout -->
    <div class="max-w-7xl mx-auto px-4">
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4 md:gap-6">
        @if($aboutPartners->count() > 0)
          {{-- Use database-driven partners --}}
          @foreach($aboutPartners as $partner)
            <x-about.partner-logo>
              @if($partner->website_url)
                <a href="{{ $partner->website_url }}" target="_blank" class="block hover:opacity-75 transition-opacity" title="{{ $partner->name }}{{ $partner->description ? ' - ' . $partner->description : '' }}">
                  <img
                    src="{{ asset('storage/' . $partner->logo_path) }}"
                    alt="{{ $partner->name }} logo"
                    class="h-28 w-auto opacity-75 hover:opacity-100 transition-opacity"
                    onerror="this.style.display='none'"
                  />
                </a>
              @else
                <img
                  src="{{ asset('storage/' . $partner->logo_path) }}"
                  alt="{{ $partner->name }} logo"
                  class="h-28 w-auto opacity-75 hover:opacity-100 transition-opacity"
                  title="{{ $partner->name }}{{ $partner->description ? ' - ' . $partner->description : '' }}"
                  onerror="this.style.display='none'"
                />
              @endif
            </x-about.partner-logo>
          @endforeach
        @else
          {{-- Fallback to original slot-based implementation --}}
          {{ $slot }}
        @endif
      </div>
    </div>
  </div>
</section> 