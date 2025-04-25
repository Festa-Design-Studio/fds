@extends('layouts.admin')

@section('title', $client->name . ' - Clients - Festa Design Studio')

@section('header_title', $client->name)

@section('action_button')
<div class="flex gap-4">
  <a href="{{ route('client.show', $client->slug) }}" target="_blank">
    <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-pepper-green-600/50 text-the-end-700 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center">
      View Public Profile
    </button>
  </a>
  <a href="{{ route('admin.clients.edit', $client) }}">
    <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
      Edit Client
    </button>
  </a>
  <a href="{{ route('admin.clients.index') }}">
    <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
      Back to Clients
    </button>
  </a>
</div>
@endsection

@section('content')
<div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Client Info -->
    <div class="md:col-span-1">
      <div class="space-y-6">
        <div class="text-center">
          @if($client->logo)
            <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}" class="w-32 h-32 object-contain mx-auto bg-white-smoke-50 p-4 rounded-md">
          @else
            <div class="w-32 h-32 bg-white-smoke-300 rounded-md flex items-center justify-center mx-auto">
              <svg class="w-16 h-16 text-the-end-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
              </svg>
            </div>
          @endif
          <h1 class="mt-4 text-xl font-bold text-the-end-800">{{ $client->name }}</h1>
        </div>

        <div class="border-t border-white-smoke-300 pt-4">
          <h3 class="text-sm font-medium text-the-end-500">Website</h3>
          @if($client->website_url)
            <a href="{{ $client->website_url }}" target="_blank" class="text-chicken-comb-600 hover:underline">
              {{ $client->website_url }}
            </a>
          @else
            <p class="text-the-end-500 italic">No website provided</p>
          @endif
        </div>

        <div class="border-t border-white-smoke-300 pt-4">
          <h3 class="text-sm font-medium text-the-end-500">Created</h3>
          <p>{{ $client->created_at->format('F j, Y') }}</p>
        </div>

        <div class="border-t border-white-smoke-300 pt-4">
          <h3 class="text-sm font-medium text-the-end-500">Last Updated</h3>
          <p>{{ $client->updated_at->format('F j, Y') }}</p>
        </div>
      </div>
    </div>

    <!-- Client Description and Projects -->
    <div class="md:col-span-2">
      <div class="space-y-8">
        <div>
          <h2 class="text-xl font-semibold text-the-end-700 mb-4">About</h2>
          <div class="prose prose-sm max-w-none text-the-end-600">
            {!! $client->description !!}
          </div>
        </div>

        <div>
          <h2 class="text-xl font-semibold text-the-end-700 mb-4">Projects</h2>
          @if($client->projects->count() > 0)
            <div class="space-y-4">
              @foreach($client->projects as $project)
                <div class="bg-white-smoke-50 rounded-md p-4 flex items-center justify-between">
                  <div>
                    <h3 class="font-medium text-the-end-700">{{ $project->title }}</h3>
                    <p class="text-sm text-the-end-500">{{ $project->excerpt }}</p>
                  </div>
                  <a href="{{ route('admin.work.edit', $project) }}" class="text-chicken-comb-600 hover:text-chicken-comb-700">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                    </svg>
                  </a>
                </div>
              @endforeach
            </div>
          @else
            <div class="bg-white-smoke-50 p-6 rounded-md text-center">
              <p class="text-the-end-500">No projects associated with this client yet.</p>
              <a href="{{ route('admin.work.create') }}" class="mt-4 inline-block px-4 py-2 bg-pepper-green-600 text-white rounded-full hover:bg-pepper-green-700">
                Create Project
              </a>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 