@extends('layouts.admin')

@section('title', 'Create SDG Alignment - Festa Design Studio')

@section('header_title', 'Create SDG Alignment')

@section('action_button')
<a href="{{ route('admin.sdg-alignments.index') }}">
  <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
    Back to SDG Alignments
  </button>
</a>
@endsection

@section('content')
<div class="p-8 max-w-2xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
  <form method="POST" action="{{ route('admin.sdg-alignments.store') }}">
    @csrf
    <div class="space-y-4">
      <div>
        <label class="block text-body font-medium text-the-end-400 mb-2" for="name">
          SDG Alignment Name
        </label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full h-10 px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 disabled:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed @error('name') border-chicken-comb-600 @enderror" placeholder="Enter SDG alignment name" required>
        @error('name')
          <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
        @enderror
      </div>
      
      <div>
        <label class="block text-body font-medium text-the-end-400 mb-2" for="code">
          SDG Code (e.g., sdg1, sdg2)
        </label>
        <input type="text" id="code" name="code" value="{{ old('code') }}" class="w-full h-10 px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 disabled:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed @error('code') border-chicken-comb-600 @enderror" placeholder="Enter SDG code (optional)">
        @error('code')
          <p class="mt-1 text-chicken-comb-600 text-sm">{{ $message }}</p>
        @enderror
      </div>
      
      <div class="pt-4">
        <button type="submit" class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
          Create SDG Alignment
        </button>
      </div>
    </div>
  </form>
</div>
@endsection 