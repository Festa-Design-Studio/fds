<!-- Sectors we serve section -->
<section class="py-20 px-4 md:px-8 lg:px-16 bg-leaf-50 space-y-10">
  <div class="max-w-7xl mx-auto text-center space-y-6">
    <!-- Sectors we serve eyebrow, headline and subheadline-->
    <span class="text-body-sm text-chicken-comb-600 uppercase tracking-wider">{{ $eyebrow ?? 'Sectors we serve' }}</span>
    <h2 class="text-h2 font-bold md:max-w-xl mx-auto text-pepper-green">{{ $headline ?? 'Partnering across purpose-driven industries' }}</h2>
    <p class="text-body-lg md:max-w-xl mx-auto text-the-end-700 max-w-2xl mx-auto">
      {{ $subheadline ?? 'Creating transformative design solutions for organizations dedicated to positive social change and sustainable impact.' }}
    </p>
  </div>
  
  <!-- Sector card grid layout here-->
  {{ $slot }}

</section> 