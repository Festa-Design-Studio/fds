@extends('layouts.admin')

@section('title', 'Blog - Festa Design Studio')

@section('header_title', 'Blog')

@section('action_button')
<a href="{{ route('admin.blog.create') }}">
  <button class="lg:w-auto md:w-auto w-full px-6 py-3 border-2 text-body-lg text-the-end-700 border-pepper-green-600/50 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2">
    Create new post
  </button>
</a>
@endsection

@section('content')
<div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
  <div class="">
    <div class="flex flex-col justify-between gap-3 items-center mb-8">
      <!-- Filters Form -->
      <form action="#" class="admin-filter-form w-full flex flex-col md:flex-row gap-3 justify-between">
        <!-- Category select -->
        <div class="relative">
          <select name="category" class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600">
            <option value="">Category</option>
            @isset($categories)
            @foreach($categories as $category)
              <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
              </option>
            @endforeach
            @endisset
          </select>
          <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-the-end-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        <!-- Author select -->
        <div class="relative">
          <select name="author" class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600">
            <option value="">Author</option>
            @isset($authors)
            @foreach($authors as $author)
              <option value="{{ $author->id }}" {{ request('author') == $author->id ? 'selected' : '' }}>
                {{ $author->name }}
              </option>
            @endforeach
            @endisset
          </select>
          <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-the-end-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </div>
        <!-- Status select -->
        <div class="relative">
          <select name="status" class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600">
            <option value="">Status</option>
            <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>Published</option>
            <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
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
      <p class="text-the-end-600">No matching blog posts found.</p>
    </div>

    <div class="space-y-4 admin-blog-grid">
      @if($articles->isEmpty())
        <div class="flex justify-center p-8">
          <p class="text-the-end-600">No blog posts found.</p>
        </div>
      @else
        @foreach($articles as $article)
          <!-- admin blog card -->
          <div class="admin-blog-item flex items-center justify-between p-4 bg-white-smoke-50 rounded-lg"
               data-category="{{ $article->category->name ?? '' }}"
               data-author="{{ $article->author->name ?? '' }}"
               data-status="{{ $article->status }}"
               data-title="{{ $article->title }}"
               data-description="{{ $article->excerpt }}">
            <div class="space-y-1">
              <h4 class="text-body-lg font-medium text-the-end-900">
                {{ $article->title }}
              </h4>
              <p class="text-body-sm text-the-end-600">
                Published on {{ $article->published_at ? $article->published_at->format('F j, Y') : 'Not Published' }}
              </p>
              <div class="flex gap-2 flex-wrap items-center mt-1">
                <!-- Category Tag -->
                @if($article->category)
                <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200">
                  {{ $article->category->name }}
                </span>
                @endif
                <!-- Author Tag -->
                @if($article->author)
                <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                  {{ $article->author->name }}
                </span>
                @endif
                <!-- Status Tag -->
                <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm {{ $article->status == 'published' ? 'bg-pepper-green-100 text-pepper-green-700 border border-pepper-green-200' : 'bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border border-apocalyptic-orange-200' }}">
                  {{ ucfirst($article->status) }}
                </span>
                <!-- Show number of post views if available -->
                <p class="text-body-sm text-the-end-600 ml-auto">
                  {{ $article->views ?? 0 }} views
                </p>
                <!-- Show ratings if available -->
                <p class="text-body-sm text-the-end-600">
                  {{ $article->getRatingDisplay() }}
                </p>
              </div>
            </div>
            <div class="flex gap-2">
              <a href="{{ route('admin.blog.edit', $article->id) }}" class="p-2 text-pepper-green-600 hover:bg-pepper-green-50 rounded-lg transition-colors">
                Edit
              </a>
              <a href="{{ route('blog.show', $article->slug) }}" class="p-2 text-pot-of-gold-500 hover:bg-pot-of-gold-50 rounded-lg transition-colors">
                View
              </a>
              <form action="{{ route('admin.blog.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog post?');">
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
    @if($articles->count() > 5)
      <div class="mt-8 flex justify-center">
        <button class="admin-load-more-btn lg:w-auto md:w-auto w-full px-6 py-3 border-2 text-body-lg text-the-end-700 border-pepper-green-600/50 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2">
          Load more posts
        </button>
      </div>
    @endif

    <div class="flex justify-between items-center mt-6">
      <p class="admin-count-display text-the-end-600">
        Showing posts from the total of {{ $articles->count() }} blog posts
      </p>
    </div>
  </div>
</div>
@endsection 