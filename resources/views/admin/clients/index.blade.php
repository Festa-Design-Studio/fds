@extends('layouts.admin')

@section('title', 'Clients - Festa Design Studio')

@section('header_title', 'Clients')

@section('action_button')
<a href="{{ route('admin.clients.create') }}">
  <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
    Add New Client
  </button>
</a>
@endsection

@section('content')
<div class="p-8 max-w-6xl mx-auto">
  @if(session('success'))
    <div class="mb-6 p-4 bg-pepper-green-50 border border-pepper-green-200 text-pepper-green-700 rounded-md">
      {{ session('success') }}
    </div>
  @endif
  
  @if(session('error'))
    <div class="mb-6 p-4 bg-chicken-comb-50 border border-chicken-comb-200 text-chicken-comb-700 rounded-md">
      {{ session('error') }}
    </div>
  @endif

  <!-- Client list -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($clients as $client)
      <div class="bg-white-smoke-100 rounded-lg shadow-sm overflow-hidden border border-white-smoke-300">
        <div class="p-6">
          <div class="flex items-center space-x-4">
            @if($client->logo)
              <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}" class="w-16 h-16 object-contain rounded-md bg-white-smoke-50 p-2">
            @else
              <div class="w-16 h-16 bg-white-smoke-200 rounded-md flex items-center justify-center">
                <svg class="w-8 h-8 text-the-end-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                </svg>
              </div>
            @endif
            <div class="flex-1">
              <h3 class="text-h5 font-semibold text-the-end-900">{{ $client->name }}</h3>
              @if($client->website_url)
                <a href="{{ $client->website_url }}" target="_blank" class="text-body-sm text-chicken-comb-600 hover:text-chicken-comb-700 hover:underline">
                  {{ $client->website_url }}
                </a>
              @endif
            </div>
          </div>
          
          <div class="mt-4 text-body text-the-end-600">
            <p>{{ $client->projects_count ?? 0 }} {{ Str::plural('project', $client->projects_count ?? 0) }}</p>
          </div>
          
          <div class="mt-6 flex gap-2">
            <a href="{{ route('admin.clients.edit', $client) }}" class="px-4 py-2 text-body border border-pepper-green-600/50 text-pepper-green-700 rounded-full hover:bg-pepper-green-50 transition-colors">
              Edit
            </a>
            <a href="{{ route('admin.clients.show', $client) }}" class="px-4 py-2 text-body border border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 transition-colors">
              View
            </a>
            <form action="{{ route('admin.clients.destroy', $client) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this client?');">
              @csrf
              @method('DELETE')
              <button type="submit" class="px-4 py-2 text-body border border-chicken-comb-600/50 text-chicken-comb-700 rounded-full hover:bg-chicken-comb-50 transition-colors">
                Delete
              </button>
            </form>
          </div>
        </div>
      </div>
    @empty
      <div class="col-span-3 bg-white-smoke-100 rounded-lg p-12 text-center border border-white-smoke-300">
        <svg class="w-16 h-16 text-the-end-400 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
        </svg>
        <h3 class="text-h4 font-semibold text-the-end-900 mb-2">No clients found</h3>
        <p class="text-body text-the-end-600 mb-6">Get started by creating a new client.</p>
        <a href="{{ route('admin.clients.create') }}" class="inline-flex items-center px-6 py-3 bg-chicken-comb-600 text-white-smoke rounded-full hover:bg-chicken-comb-700 transition-colors focus:outline-none focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2">
          Add New Client
        </a>
      </div>
    @endforelse
  </div>

  <!-- Pagination -->
  <div class="mt-8">
    {{ $clients->links() }}
  </div>
</div>
@endsection 