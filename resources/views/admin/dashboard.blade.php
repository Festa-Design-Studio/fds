@extends('layouts.admin')

@section('title', 'Admin Dashboard - Festa Design Studio')

@section('action_button')
<button class="px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 inline-flex items-center justify-center gap-2">
    Create New Post
</button>
@endsection

@section('content')
<div class="grid md:grid-cols-3 gap-6 mb-8">
    <!--Data showing how many user visited each articles and number of articles, total toolkit and downloads, total work case study published and their views-->
    <div class="bg-pepper-green-50 p-6 rounded-xl border border-white-smoke-300">
        <span class="text-body-sm text-pepper-green-600/50">Articles</span>
        <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Total posts</h3>
        <p class="text-h4 font-bold text-pepper-green-600 mb-2">248</p>
        <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Total views</h3>
        <p class="text-h4 font-bold text-pepper-green-600">1.3k</p>
    </div>
    <div class="bg-apocalyptic-orange-50 p-6 rounded-xl border border-white-smoke-300">
        <span class="text-body-sm text-apocalyptic-orange-600/50">Work</span>
        <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Total posts</h3>
        <p class="text-h4 font-bold text-chicken-comb-600 mb-2">36</p>
        <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Total views</h3>
        <p class="text-h4 font-bold text-chicken-comb-600">6.3k</p>
    </div>
    <div class="bg-pot-of-gold-50 p-6 rounded-xl border border-white-smoke-300">
        <span class="text-body-sm text-pot-of-gold-600/50">Ratings</span>
        <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Total ratings</h3>
        <p class="text-h4 font-bold text-pot-of-gold-600 mb-2">{{ $totalRatings }}</p>
        <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Average rating</h3>
        <p class="text-h4 font-bold text-pot-of-gold-600">{{ number_format($averageRating, 1) }}/5</p>
    </div>
</div>
<!-- Additional content will be added later in development -->
@endsection 