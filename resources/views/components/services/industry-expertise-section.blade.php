<!-- Industry expertise service mini card section-->
<div class="mx-auto">
  <!-- Service mini card layout -->
  <div>
    <div class="flex flex-col lg:flex-row justify-between items-baseline gap-4 border-t border-white-smoke-300 lg:mb-20 mb-6">
      <!-- Service mini card layout with title and description -->
      <h3 class="text-h5 mt-10 mb-1.5 lg:mb-0 lg:w-1/3 text-chicken-comb-600">{{ $title ?? 'Project design' }}</h3>
      <p class="text-body-sm text-the-end-700 mb-4 lg:w-1/3">
        {{ $description ?? 'Building meaningful project frameworks, step by step.
        We help nonprofits and startups turn bold ideas into structured, scalable initiatives. Industries we\'ve supported include:' }}
      </p>
    </div>

    <!-- Service mini card grid layout here -->
    {{ $slot }}
  </div>
</div> 