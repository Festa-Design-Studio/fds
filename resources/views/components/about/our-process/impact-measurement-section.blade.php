@props(['impactItems' => collect()])

<!-- Impact Measurement Section -->
<section class="py-24 bg-white-smoke-50">
  <div class="container mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="max-w-3xl mx-auto text-center mb-16">
      <h2 class="text-h2 lg:text-h1 font-bold text-the-end-900 mb-6">
        Impact we measure
      </h2>
      <p class="text-body-lg text-the-end-700 leading-relaxed">
        We track meaningful metrics that demonstrate the tangible value our design solutions bring to social impact organizations.
      </p>
    </div>

    <!-- Impact Cards Grid -->
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      @foreach($impactItems as $item)
        <article class="group relative bg-white-smoke-100 rounded-2xl border border-white-smoke-300 p-8 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
          <div class="flex flex-col items-center text-center">
            <!-- Icon -->
            <div class="mb-6 p-4 bg-pepper-green-50 rounded-2xl group-hover:scale-110 transition-transform duration-300">
              @if($item->icon)
                <div class="w-8 h-8 text-pepper-green-600">
                  {!! $item->icon !!}
                </div>
              @else
                <svg class="w-8 h-8 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
              @endif
            </div>

            <!-- Metric Display -->
            @if($item->show_metric && $item->metric_value)
              <div class="mb-6">
                <div class="text-h1 font-bold text-pepper-green-600 mb-2">
                  {{ $item->metric_value }}
                </div>
                @if($item->metric_label)
                  <div class="text-body-sm font-medium text-pepper-green-600 uppercase tracking-wide">
                    {{ $item->metric_label }}
                  </div>
                @endif
              </div>
            @endif

            <!-- Content -->
            <div class="text-center">
              <h3 class="text-h5 font-semibold text-the-end-900 mb-3">
                {{ $item->title }}
              </h3>
              <p class="text-body text-the-end-700 leading-relaxed">
                {{ $item->description }}
              </p>
            </div>

            <!-- Metric Type Badge -->
            @if($item->metric_type)
              <div class="mt-6">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-body-xs font-medium bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200">
                  {{ $item->metric_type }}
                </span>
              </div>
            @endif
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section> 