@props(['education'])

@php
    // Ensure education is an array for foreach
    $educationData = is_string($education) ? json_decode($education, true) : $education;
@endphp

<!-- Education section -->
<section class="mt-10 space-y-4">
  <h2
    class="text-h3 font-semibold text-the-end-900 border-b border-white-smoke-300 pb-2"
  >
    Education
  </h2>
  <ul
    class="list-disc list-outside ml-3.5 text-body-sm text-the-end-700 space-y-2.5"
  >
    @foreach($educationData as $item)
      <li>
        {{ $item['degree'] }} —
        <span class="text-chicken-comb-600">{{ $item['institution'] }}</span>
      </li>
    @endforeach
  </ul>
</section> 