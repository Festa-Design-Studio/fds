@props(['methodologyItems' => collect()])

<!-- Our methodology Section -->
<section class="py-24 bg-white-smoke-50">
  <div class="container mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="max-w-3xl mx-auto text-center mb-16">
      <h2 class="text-h2 lg:text-h1 font-bold text-the-end-900 mb-6">
        Our methodology
      </h2>
      <p class="text-body-lg text-the-end-700 leading-relaxed">
        Our proven {{ $methodologyItems->count() }}-step methodology ensures seamless collaboration and exceptional results for every project we undertake.
      </p>
    </div>

    <!-- Methodology Cards Grid -->
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      @foreach($methodologyItems as $index => $item)
        <article class="group relative bg-white-smoke-100 rounded-2xl border border-white-smoke-300 p-8 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
          <div class="flex flex-col items-center text-center">
            <!-- Step Number -->
            <div class="mb-6 w-12 h-12 bg-pepper-green-50 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
              <span class="text-h5 font-bold text-pepper-green-600">
                {{ $item->step_number ?? ($index + 1) }}
              </span>
            </div>

            <!-- Content -->
            <div class="text-center">
              <h3 class="text-h5 font-semibold text-the-end-900 mb-3">
                {{ $item->title }}
              </h3>
              <p class="text-body text-the-end-700 leading-relaxed">
                {{ $item->description }}
              </p>
            </div>
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section> 