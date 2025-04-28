@props(['press'])

@php
    // Ensure press is an array for foreach
    $pressData = is_string($press) ? json_decode($press, true) : $press;
    
    // If still not an array, initialize as empty array to prevent errors
    if (!is_array($pressData)) {
        $pressData = [];
    }
@endphp

<!-- As seen in section-->
<section class="mt-10 space-y-8">
  <h2 class="text-h3 font-semibold text-pepper-green border-b border-white-smoke-300 pb-2">As seen in</h2>

  <ul class="space-y-4 text-body-sm text-the-end-700">
    @foreach($pressData as $mention)
      <li>
        <a href="{{ $mention['url'] ?? '#' }}" target="_blank" rel="noopener noreferrer" class="text-apocalyptic-orange-600 hover:underline">
          "{{ $mention['title'] ?? '' }}" — {{ $mention['publication'] ?? '' }}
        </a>
      </li>
    @endforeach
  </ul>
</section> 