@extends('layouts.app')

@section('title', 'Thank You - Festa Design Studio')

@section('content')
<main class="relative min-h-screen bg-gradient-to-br from-white-smoke-50 via-pot-of-gold-50 to-white-smoke-100 flex flex-col items-center justify-center px-6 py-16 overflow-hidden">

  <!-- Floating Shapes -->
  <div class="absolute inset-0 pointer-events-none">
    <svg width="100%" height="600" viewBox="0 0 800 600">
      <defs>
        <linearGradient id="texturedGradient" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" style="stop-color:#fef9c3;stop-opacity:0.4"/>
          <stop offset="100%" style="stop-color:#fee2e2;stop-opacity:0.2"/>
        </linearGradient>
        
        <pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse">
          <rect width="100" height="100" fill="#f6f6f6" opacity="0.05">
            <animate attributeName="opacity" values="0.05;0.1;0.05" dur="3s" repeatCount="indefinite"/>
          </rect>
        </pattern>
      </defs>
      
      <!-- Layered Elements -->
      <g>
        <!-- Main circular element with texture -->
        <circle cx="400" cy="300" r="150" fill="url(#texturedGradient)"/>
        <circle cx="400" cy="300" r="150" fill="url(#grain)">
          <animate attributeName="r" values="150;160;150" dur="10s" repeatCount="indefinite"/>
        </circle>
        
        <!-- Floating overlapping circles -->
        <circle cx="250" cy="270" r="50" fill="url(#texturedGradient)" opacity="0.6">
          <animate attributeName="cy" values="250;270;250" dur="8s" repeatCount="indefinite"/>
        </circle>
        
        <circle cx="500" cy="350" r="70" fill="url(#texturedGradient)" opacity="0.4">
          <animate attributeName="cy" values="350;330;350" dur="12s" repeatCount="indefinite"/>
        </circle>
        
        <!-- Soft flowing paths -->
        <path d="M250,400 C350,350 450,450 550,400" 
              fill="none" 
              stroke="#72b043" 
              stroke-width="2" 
              opacity="0.15">
          <animate attributeName="d" 
            values="M250,400 C350,350 450,450 550,400;
                    M250,400 C350,450 450,350 550,400;
                    M250,400 C350,350 450,450 550,400"
            dur="15s" 
            repeatCount="indefinite"/>
        </path>
      </g>
    </svg>
  </div>

  <!-- Thank You Content -->
  <section class="relative z-10 text-center space-y-6">
    <h1 class="text-h1 font-black text-the-end-900">Thank you!</h1>
    <p class="text-body-lg text-the-end-700 max-w-xl mx-auto">
      We've received your message and will get back to you in 2 business days. In the meantime, you can check our recent articles.
    </p>
    <x-core.button href="{{ route('resources.blog') }}" variant="secondary" size="large">
      Visit our blog
    </x-core.button>
  </section>

</main>

<style>
  /* Animation classes for floating shapes */
  .animate-float-slow {
    animation: float 8s ease-in-out infinite;
  }
  
  .animate-float-medium {
    animation: float 6s ease-in-out infinite;
  }
  
  .animate-float-fast {
    animation: float 4s ease-in-out infinite;
  }
  
  @keyframes float {
    0% {
      transform: translateY(0px);
    }
    50% {
      transform: translateY(-20px);
    }
    100% {
      transform: translateY(0px);
    }
  }
</style>
@endsection 