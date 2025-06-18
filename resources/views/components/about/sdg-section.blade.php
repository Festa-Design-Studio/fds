<!-- SDG Section -->
<section class="py-20 px-4 md:px-8 lg:px-16 bg-white-smoke-100">
  <div class="max-w-7xl mx-auto text-center space-y-8">
    <!-- Eyebrow -->
    <p class="text-body-sm text-chicken-comb-600 uppercase tracking-wide">
      Sustainable Development Goals
    </p>

    <!-- Section Title -->
    <h2 class="text-h2 font-bold text-pepper-green">We design for good</h2>

    <!-- Section Description -->
    <p class="text-body-lg text-the-end-700 max-w-3xl mx-auto">
      We align our design solutions with the United Nations' Sustainable
      Development Goals to create meaningful impact across the globe.
    </p>

    <!-- SDG Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
      @php
        $aboutSdgs = \App\Models\AboutSdg::where('is_active', true)
                      ->orderBy('display_order')
                      ->orderBy('number')
                      ->get();
                      
        // Fallback SDG titles for hardcoded implementation
        $sdgTitles = [
          1 => 'No Poverty',
          2 => 'Zero Hunger', 
          3 => 'Good Health & Well-being',
          4 => 'Quality Education',
          5 => 'Gender Equality',
          6 => 'Clean Water and Sanitation',
          7 => 'Affordable and Clean Energy',
          8 => 'Decent Work and Economic Growth',
          9 => 'Industry, Innovation and Infrastructure',
          10 => 'Reduced Inequalities',
          11 => 'Sustainable Cities and Communities',
          12 => 'Responsible Consumption and Production',
          13 => 'Climate Action',
          14 => 'Life Below Water',
          15 => 'Life on Land',
          16 => 'Peace, Justice and Strong Institutions',
          17 => 'Partnerships for the Goals'
        ];
      @endphp
      
      @if($aboutSdgs->count() > 0)
        {{-- Use database-driven SDGs --}}
        @foreach($aboutSdgs as $sdg)
          <div class="flex items-center justify-center">
            @if($sdg->svg_path && \Storage::disk('public')->exists($sdg->svg_path))
              <img
                src="{{ asset('storage/' . $sdg->svg_path) }}"
                alt="SDG {{ $sdg->number }}: {{ $sdg->title }}"
                class="w-24 h-24"
                title="{{ $sdg->description ?: $sdg->title }}"
              />
            @else
              <img
                src="/img/sdg/sdg-{{ $sdg->number }}.svg"
                alt="SDG {{ $sdg->number }}: {{ $sdg->title }}"
                class="w-24 h-24"
                title="{{ $sdg->description ?: $sdg->title }}"
              />
            @endif
          </div>
        @endforeach
      @else
        {{-- Fallback to original hardcoded implementation --}}
        @for ($i = 1; $i <= 17; $i++)
        <div class="flex items-center justify-center">
          <img
            src="/img/sdg/sdg-{{ $i }}.svg"
            alt="SDG {{ $i }}: {{ $sdgTitles[$i] ?? 'Sustainable Development Goal '.$i }}"
            class="w-24 h-24"
          />
        </div>
        @endfor
      @endif
      
      <!-- Global Goals Logo (always displayed) -->
      <div class="flex items-center justify-center">
        <img
          src="/img/sdg/global-goals.svg"
          alt="Global Goals"
          class="w-24 h-24"
        />
      </div>
    </div>

    <!-- CTA Button -->
    <div class="flex justify-center p-6">
      <x-core.button variant="secondary" size="large" href="https://www.globalgoals.org/" target="_blank">
        Learn more about SDGs
      </x-core.button>
    </div>
  </div>
</section>

 