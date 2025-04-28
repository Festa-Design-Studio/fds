@props(['summary'])

<!-- Team member Professional Summary section -->
<section class="mt-10 space-y-4">
  <h2
    class="text-h3 font-semibold text-pepper-green border-b border-white-smoke-300 pb-2"
  >
    Professional summary
  </h2>
  
  @foreach(explode("\n\n", $summary) as $paragraph)
    <p class="text-body-sm text-the-end-700 leading-relaxed">
      {{ $paragraph }}
    </p>
  @endforeach
</section> 