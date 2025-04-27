@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100 min-h-screen flex items-center justify-center px-4 py-12">
    <div class="max-w-lg text-center space-y-6">
        <h1 class="text-display font-black text-the-end-900">404</h1>
        <h2 class="text-h2 font-bold text-the-end-900">Page Not Found</h2>
        <p class="text-body-lg text-the-end-700">The page you're looking for seems to have taken a different path.</p>
        
        <!-- Large Primary Button -->
        <a href="{{ url('/') }}" 
            class="inline-flex lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
            Return back home
        </a>
    </div>
</section>
@endsection 