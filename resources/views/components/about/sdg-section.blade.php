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
      @for ($i = 1; $i <= 17; $i++)
      <div class="flex items-center justify-center">
        <img
          src="/img/sdg/sdg-{{ $i }}.svg"
          alt="SDG {{ $i }}: {{ $sdgTitles[$i] ?? 'Sustainable Development Goal '.$i }}"
          class="w-24 h-24"
        />
      </div>
      @endfor
      <!-- Global goals -->
      <div class="flex items-center justify-center">
        <img
          src="/img/sdg/global-goals.svg"
          alt="Global Goals"
          class="w-24 h-24"
        />
      </div>
    </div>

    <!-- CTA Button -->
    <div class="flex justify-center">
      <x-core.button variant="secondary" size="large" href="https://www.globalgoals.org/" target="_blank">
        Learn more about SDGs
      </x-core.button>
    </div>
  </div>
</section> 