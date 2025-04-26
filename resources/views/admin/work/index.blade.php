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
    <div class="flex flex-col justify-between gap-3 items-center mb-8">
      <!-- Filters Form -->
      <form action="#" class="admin-filter-form w-full flex flex-col md:flex-row gap-3 justify-between">
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
        </div>
      </form>
      
      <!-- Clear filters button -->
      <button class="admin-clear-filters mt-3 md:mt-0 px-4 py-2 text-body-sm text-the-end-700 hover:bg-white-smoke-300/50 active:bg-white-smoke-300 rounded-full">
        Clear filters
      </button>
    </div>
    
    <!-- Display session messages -->
    @if (session('success'))
      <div class="mb-4 p-4 bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 rounded-lg">
        {{ session('success') }}
      </div>
    @endif
    
    <!-- No results message (hidden by default) -->
    <div class="admin-no-results-message hidden flex justify-center p-8">
      <p class="text-the-end-600">No matching work case studies found.</p>
    </div>
    
    <div class="space-y-4 admin-work-grid">
      @if($projects->isEmpty())
        <div class="flex justify-center p-8">
          <p class="text-the-end-600">No work case studies found.</p>
        </div>
      @else
        @foreach($projects as $project)
          <!-- admin work card -->
          <div class="admin-work-item flex items-center justify-between p-4 bg-white-smoke-50 rounded-lg"
               data-sector="{{ $project->sector }}"
               data-industry="{{ $project->industry }}"
               data-sdg="{{ Str::startsWith($project->sdg_alignment, 'sdg') ? $project->sdg_alignment : 'sdg'.array_search($project->sdg_alignment, [
                   'No Poverty', 'Zero Hunger', 'Good Health & Well-being', 'Quality Education', 'Gender equality',
                   'Clean water & sanitation', 'Affordable & clean energy', 'Decent work & economic growth',
                   'Industry, innovation and infrastructure', 'Reduced inequalities', 'Sustainable cities & communities',
                   'Responsible consumption & production', 'Climate Action', 'Life below water', 'Life on land',
                   'Peace, justice & strong institutions', 'Partnerships for the goals'
               ]) + 1 }}"
               data-title="{{ $project->title }}"
               data-description="{{ $project->excerpt }}">
            <div class="space-y-1">
              <!-- admin Work title-->
              <h4 class="text-body-lg font-medium text-the-end-900">
                {{ $project->title }}
              </h4>
              <!-- admin Work excerpt-->
              <p class="text-body-sm text-the-end-600">
                Published on {{ \Carbon\Carbon::parse($project->published_at)->format('F j, Y') }}
              </p>
              <div class="flex gap-2 flex-wrap items-center mt-1">
                <!-- admin work tag Categories -->
                <!-- Sector Tag -->
                <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200">
                  {{ ucfirst($project->sector) }}
                </span>
                
                <!-- Industry Tag -->
                @if($project->industry)
                <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                  {{ ucfirst($project->industry) }}
                </span>
                @endif
                
                <!-- SDG Tag -->
                @if($project->sdg_alignment)
                @php
                  $sdgLabel = $project->sdg_alignment;
                  if (Str::startsWith($project->sdg_alignment, 'sdg')) {
                    $sdgMap = [
                      'sdg1' => 'No Poverty',
                      'sdg2' => 'Zero Hunger',
                      'sdg3' => 'Good Health & Well-being',
                      'sdg4' => 'Quality Education',
                      'sdg5' => 'Gender equality',
                      'sdg6' => 'Clean water & sanitation',
                      'sdg7' => 'Affordable & clean energy',
                      'sdg8' => 'Decent work & economic growth',
                      'sdg9' => 'Industry, innovation and infrastructure',
                      'sdg10' => 'Reduced inequalities',
                      'sdg11' => 'Sustainable cities & communities',
                      'sdg12' => 'Responsible consumption & production',
                      'sdg13' => 'Climate Action',
                      'sdg14' => 'Life below water',
                      'sdg15' => 'Life on land',
                      'sdg16' => 'Peace, justice & strong institutions',
                      'sdg17' => 'Partnerships for the goals'
                    ];
                    $sdgLabel = $sdgMap[$project->sdg_alignment] ?? $project->sdg_alignment;
                  }
                @endphp
                <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border border-apocalyptic-orange-200">
                  {{ $sdgLabel }}
                </span>
                @endif
                
                <!-- Show number of post views -->
                <p class="text-body-sm text-the-end-600 ml-auto">
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

    <!-- Load more button -->
    @if($projects->count() > 5)
      <div class="mt-8 flex justify-center">
        <button class="admin-load-more-btn lg:w-auto md:w-auto w-full px-6 py-3 border-2 text-body-lg text-the-end-700 border-pepper-green-600/50 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2">
          Load more work
        </button>
      </div>
    @endif

    <div class="flex justify-between items-center mt-6">
      <p class="admin-count-display text-the-end-600">
        Showing projects from the total of {{ $projects->count() }} works
      </p>
    </div>
  </div>
</div>
@endsection