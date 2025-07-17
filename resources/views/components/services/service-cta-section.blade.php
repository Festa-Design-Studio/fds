@props([
    'title' => 'Not seeing what you\'re looking for?',
    'description' => 'If your needs are unique or not listed above, we\'d still love to hear from you. Let\'s explore how Festa can help bring your ideas to life.',
    'buttonText' => 'Talk to Festa',
    'buttonUrl' => route('contact.talk-to-festa')
])

<!-- CTA Section -->
<section class="py-20 px-8 text-center lg:max-w-5xl mx-auto">
  <h2 class="text-h2 font-bold text-pepper-green mb-4">
    {{ $title }}
  </h2>
  <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto mb-8">
    {{ $description }}
  </p>
  <!-- Primary Button -->
  <a href="{{ $buttonUrl }}" 
    class="w-auto px-6 py-3 text-body-lg bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 inline-block"
  >
    {{ $buttonText }}
  </a>
</section> 