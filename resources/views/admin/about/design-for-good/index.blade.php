@extends('layouts.admin')

@section('title', 'Design for Good Content - Festa Design Studio')

@section('header_title', 'Design for Good Content')

@section('action_button')
<div class="flex gap-4">
  <a href="{{ route('about.design-for-good') }}" target="_blank">
    <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-pepper-green-600/50 text-the-end-700 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center">
      View Page
    </button>
  </a>
  @if(count($availableSections) > 0)
  <a href="{{ route('admin.about.design-for-good.create') }}">
    <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-pepper-green-600/50 bg-pepper-green-600 text-white-smoke rounded-full hover:bg-pepper-green-700 active:bg-pepper-green-700 transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center">
      Add Section
    </button>
  </a>
  @endif
  <a href="{{ route('admin.about') }}">
    <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
      Back to About
    </button>
  </a>
</div>
@endsection

@section('content')
<div class="p-8 max-w-6xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
  
  @if(session('success'))
    <div class="mb-6 p-4 bg-pepper-green-50 border border-pepper-green-200 text-pepper-green-700 rounded-md">
      {{ session('success') }}
    </div>
  @endif

  @if($contents->count() > 0)
    <div class="space-y-6">
      @foreach($contents as $content)
        <div class="bg-white-smoke-50 rounded-lg p-6 border border-white-smoke-300">
          <div class="flex justify-between items-start">
            <div class="flex-1">
              <div class="flex items-center gap-3 mb-2">
                <h3 class="text-h4 font-semibold text-the-end-900">
                  {{ $availableSections[$content->section_key] ?? $content->section_key }}
                </h3>
                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium {{ $content->is_active ? 'bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200' : 'bg-white-smoke-200 text-the-end-600 border border-white-smoke-300' }}">
                  {{ $content->is_active ? 'Active' : 'Inactive' }}
                </span>
                <span class="text-xs text-the-end-600 bg-white-smoke-200 px-2 py-1 rounded">
                  Order: {{ $content->display_order }}
                </span>
              </div>
              <p class="text-h5 font-medium text-the-end-800 mb-1">{{ $content->title }}</p>
              @if($content->subtitle)
                <p class="text-body text-the-end-600 mb-2">{{ $content->subtitle }}</p>
              @endif
              @if($content->description)
                <p class="text-body-sm text-the-end-500">{{ Str::limit($content->description, 120) }}</p>
              @endif
            </div>
            <div class="flex gap-2">
              <a href="{{ route('admin.about.design-for-good.edit', $content) }}">
                <button class="px-4 py-2 text-body border border-chicken-comb-600/50 text-chicken-comb-700 rounded-full hover:bg-chicken-comb-50 transition-colors">
                  Edit
                </button>
              </a>
              <form method="POST" action="{{ route('admin.about.design-for-good.destroy', $content) }}" class="inline" onsubmit="return confirm('Are you sure you want to delete this section?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 text-body border border-chicken-comb-600/50 text-chicken-comb-700 rounded-full hover:bg-chicken-comb-50 transition-colors">
                  Delete
                </button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @else
    <div class="text-center py-12">
      <div class="w-16 h-16 bg-white-smoke-200 rounded-full flex items-center justify-center mx-auto mb-4">
        <svg class="w-8 h-8 text-the-end-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
      </div>
      <h3 class="text-h4 font-semibold text-the-end-900 mb-2">No content sections yet</h3>
      <p class="text-body text-the-end-600 mb-6">Start by adding your first content section for the "We Design for Good" page.</p>
      @if(count($availableSections) > 0)
        <a href="{{ route('admin.about.design-for-good.create') }}">
          <button class="px-6 py-3 text-body-lg bg-pepper-green-600 text-white-smoke rounded-full hover:bg-pepper-green-700 transition-colors">
            Add First Section
          </button>
        </a>
      @else
        <p class="text-body-sm text-the-end-500">All available sections have been created.</p>
      @endif
    </div>
  @endif

</div>
@endsection