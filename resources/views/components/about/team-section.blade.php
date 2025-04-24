@props(['title' => 'Meet our team'])

<!-- Team Section layout -->
<section class="py-20 px-4 md:px-8 lg:px-16">
  <div class="max-w-7xl mx-auto">
    <!-- Section Header -->
    <div class="text-center mb-12">
      <h2 class="text-h2 font-bold text-pepper-green mb-4">{{ $title }}</h2>
      {{ $header ?? '' }}
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      {{ $slot }}
    </div>
  </div>
</section> 