@props(['options' => [], 'placeholder' => 'Select an option'])

<!-- Toolkits select -->
<div class="relative">
  <select
    {{ $attributes->merge(['class' => 'appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600']) }}
  >
    <option value="">{{ $placeholder }}</option>
    @foreach($options as $value => $label)
      <option value="{{ $value }}">{{ $label }}</option>
    @endforeach
  </select>
  <svg
    class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-the-end-400 pointer-events-none"
    fill="none"
    stroke="currentColor"
    viewBox="0 0 24 24"
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="2"
      d="M19 9l-7 7-7-7"
    ></path>
  </svg>
</div> 