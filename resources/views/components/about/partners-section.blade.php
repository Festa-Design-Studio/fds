@props(['title' => 'Our partners', 'description' => 'Working together with leading organizations to create meaningful impact through design.'])

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
        {{ $slot }}
      </div>
    </div>
  </div>
</section> 