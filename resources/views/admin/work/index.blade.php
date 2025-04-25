@extends('layouts.admin')

@section('title', 'Work - Festa Design Studio')

@section('header_title', 'Work')

@section('action_button')
<a href="{{ route('admin.work.create') }}">
  <button class="lg:w-auto md:w-auto w-full px-6 py-3 border-2 text-body-lg text-the-end-700 border-pepper-green-600/50 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2">
    Create new work
  </button>
</a>
@endsection

@section('content')
<div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
  <div class="">
    <div class="flex flex-col justify-between gap-3 items-center mb-16">
      <!-- Filters Form -->
      <form action="{{ route('admin.work.index') }}" method="GET" class="w-full flex flex-col md:flex-row gap-3 justify-between">
        <!-- Sector select -->
        <div class="relative">
          <select name="sector" class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600">
            <option value="">Sector</option>
            <option value="nonprofit" {{ request('sector') == 'nonprofit' ? 'selected' : '' }}>Nonprofit</option>
            <option value="startup" {{ request('sector') == 'startup' ? 'selected' : '' }}>Startup</option>
          </select>
          <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-the-end-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        
        <!-- Industry select -->
        <div class="relative">
          <select name="industry" class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600">
            <option value="">Industry</option>
            <option value="education" {{ request('industry') == 'education' ? 'selected' : '' }}>Education</option>
            <option value="healthcare" {{ request('industry') == 'healthcare' ? 'selected' : '' }}>Healthcare</option>
            <option value="research-and-development" {{ request('industry') == 'research-and-development' ? 'selected' : '' }}>Research and development</option>
          </select>
          <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-the-end-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        
        <!-- SDG select -->
        <div class="relative">
          <select name="sdg" class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600">
            <option value="">SDG goals</option>
            <option value="sdg1" {{ request('sdg') == 'sdg1' ? 'selected' : '' }}>No Poverty</option>
            <option value="sdg2" {{ request('sdg') == 'sdg2' ? 'selected' : '' }}>Zero Hunger</option>
            <option value="sdg3" {{ request('sdg') == 'sdg3' ? 'selected' : '' }}>Good health & well-being</option>
            <option value="sdg4" {{ request('sdg') == 'sdg4' ? 'selected' : '' }}>Quality Education</option>
            <option value="sdg5" {{ request('sdg') == 'sdg5' ? 'selected' : '' }}>Gender equality</option>
            <option value="sdg6" {{ request('sdg') == 'sdg6' ? 'selected' : '' }}>Clean water & sanitation</option>
            <option value="sdg7" {{ request('sdg') == 'sdg7' ? 'selected' : '' }}>Affordable & clean energy</option>
            <option value="sdg8" {{ request('sdg') == 'sdg8' ? 'selected' : '' }}>Decent work & economic growth</option>
            <option value="sdg9" {{ request('sdg') == 'sdg9' ? 'selected' : '' }}>Industry, innovation and infrastructure</option>
            <option value="sdg10" {{ request('sdg') == 'sdg10' ? 'selected' : '' }}>Reduced inequalities</option>
            <option value="sdg11" {{ request('sdg') == 'sdg11' ? 'selected' : '' }}>Sustainable cities & communities</option>
            <option value="sdg12" {{ request('sdg') == 'sdg12' ? 'selected' : '' }}>Responsible consumption & production</option>
            <option value="sdg13" {{ request('sdg') == 'sdg13' ? 'selected' : '' }}>Climate Action</option>
            <option value="sdg14" {{ request('sdg') == 'sdg14' ? 'selected' : '' }}>Life below water</option>
            <option value="sdg15" {{ request('sdg') == 'sdg15' ? 'selected' : '' }}>Life on land</option>
            <option value="sdg16" {{ request('sdg') == 'sdg16' ? 'selected' : '' }}>Peace, justice & strong institutions</option>
            <option value="sdg17" {{ request('sdg') == 'sdg17' ? 'selected' : '' }}>Partnerships for the goals</option>
          </select>
          <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-the-end-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        
        <!-- Search input -->
        <div class="relative">
          <input type="text" name="search" value="{{ request('search') }}" class="w-full pl-10 pr-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50" placeholder="Search...">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-the-end-400" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
            </svg>
          </div>
          <button type="submit" class="hidden">Search</button>
        </div>
      </form>
    </div>
    
    <!-- Display session messages -->
    @if (session('success'))
      <div class="mb-4 p-4 bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 rounded-lg">
        {{ session('success') }}
      </div>
    @endif
    
    <div class="space-y-4">
      @if($projects->isEmpty())
        <div class="flex justify-center p-8">
          <p class="text-the-end-600">No work case studies found.</p>
        </div>
      @else
        @foreach($projects as $project)
          <!-- admin work card -->
          <div class="flex items-center justify-between p-4 bg-white-smoke-50 rounded-lg">
            <div class="space-y-1">
              <!-- admin Work title-->
              <h4 class="text-body-lg font-medium text-the-end-900">
                {{ $project->title }}
              </h4>
              <!-- admin Work excerpt-->
              <p class="text-body-sm text-the-end-600">
                Published on {{ \Carbon\Carbon::parse($project->published_at)->format('F j, Y') }}
              </p>
              <div class="flex gap-6 items-center mt-1">
                <!-- admin work tag Category -->
                <!-- Sector Tag -->
                <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200">
                  {{ ucfirst($project->sector) }}
                </span>
                <!-- Show number of post views-->
                <p class="text-body-sm text-the-end-600">
                  {{ $project->views ?? 0 }} views
                </p>
              </div>
            </div>
            <div class="flex gap-2">
              <a href="{{ route('admin.work.edit', $project->id) }}" class="p-2 text-pepper-green-600 hover:bg-pepper-green-50 rounded-lg transition-colors">
                Edit
              </a>
              <a href="{{ route('work.show', $project->slug) }}" class="p-2 text-pot-of-gold-500 hover:bg-pot-of-gold-50 rounded-lg transition-colors">
                View
              </a>
              <form action="{{ route('admin.work.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this work case study?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="p-2 text-chicken-comb-600 hover:bg-chicken-comb-50 rounded-lg transition-colors">
                  Delete
                </button>
              </form>
            </div>
          </div>
        @endforeach
      @endif
    </div>

    <div class="flex justify-between items-center mt-6">
      <p class="text-the-end-600">
        Showing {{ $projects->firstItem() ?? 0 }}-{{ $projects->lastItem() ?? 0 }} of {{ $projects->total() }} works
      </p>
      <div class="flex gap-2">
        @if($projects->onFirstPage())
          <button disabled class="lg:w-auto md:w-auto w-full px-3 py-1.5 text-body-sm h-[32px] border-2 border-white-smoke-400 text-the-end-300 rounded-full disabled:cursor-not-allowed transition-all duration-150 ease-in-out">
            Previous
          </button>
        @else
          <a href="{{ $projects->previousPageUrl() }}" class="lg:w-auto md:w-auto w-full px-3 py-1.5 text-body-sm h-[32px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 active:bg-white-smoke-300 transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
            Previous
          </a>
        @endif

        @if($projects->hasMorePages())
          <a href="{{ $projects->nextPageUrl() }}" class="lg:w-auto md:w-auto w-full px-3 py-1.5 text-body-sm h-[32px] border-2 border-pepper-green-600/50 text-the-end-700 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center">
            Next
          </a>
        @else
          <button disabled class="lg:w-auto md:w-auto w-full px-3 py-1.5 text-body-sm h-[32px] border-2 border-pepper-green-200 text-pepper-green-200 rounded-full disabled:cursor-not-allowed transition-all duration-150 ease-in-out">
            Next
          </button>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection