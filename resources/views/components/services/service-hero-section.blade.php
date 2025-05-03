@props([
    'serviceType' => 'Project Design',
    'title' => 'Designing for impact and clarity',
    'description' => 'We partner with nonprofits and purpose-led teams to co-create strong project frameworks, strategies, and funding narratives that drive real change.'
])

<!-- Dynamic Service Hero Section -->
<section class="py-28 px-6 text-center max-w-3xl mx-auto space-y-6 bg">
  <p class="text-body-sm text-chicken-comb-600 uppercase tracking-wider mb-2">
    {{ $serviceType }}
  </p>
  <h1 class="text-h1 font-black text-the-end-900 mb-4">{{ $title }}</h1>
  <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto mb-8">
    {{ $description }}
  </p>
  <a href="{{ route('about.process') }}"
    class="llg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-pepper-green-600/50 text-the-end-700 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center"
  >
    How we work
  </a>
</section> 