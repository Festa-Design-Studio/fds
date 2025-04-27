@props(['name', 'title', 'email' => null, 'linkedin' => null, 'avatar' => null])

<!-- Team member avatar header section -->
<header class="text-center space-y-4 pb-8">
  <!-- Team member avatar -->
  <img
    src="{{ $avatar ? asset('storage/' . $avatar) : '/src/img/profile-placeholder.jpg' }}"
    alt="Portrait of {{ $name }}"
    class="mx-auto rounded-full w-28 h-28 object-cover"
  />

  <!-- Team member name and title -->
  <h1 class="text-h1 font-bold text-the-end-900">{{ $name }}</h1>

  <p class="text-body-lg text-the-end-700">{{ $title }}</p>

  <!-- Team email and linkedin -->
  <div class="text-body text-the-end-600 flex flex-col items-center space-y-1">
    @if($email)
      <a
        href="mailto:{{ $email }}"
        class="hover:underline text-apocalyptic-orange-600"
      >{{ $email }}</a>
    @endif
    
    @if($linkedin)
      <a
        href="{{ $linkedin }}"
        target="_blank"
        rel="noopener noreferrer"
        class="hover:underline text-apocalyptic-orange-600"
      >
        LinkedIn
      </a>
    @endif
  </div>
</header> 