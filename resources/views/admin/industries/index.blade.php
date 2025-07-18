@extends('layouts.admin')

@section('title', 'Manage Industries - Festa Design Studio')

@section('header_title', 'Manage Industries')

@section('action_button')
<a href="{{ route('admin.industries.create') }}">
  <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
    </svg>
    Add New Industry
  </button>
</a>
@endsection

@section('content')
<div class="p-8 max-w-6xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
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

  <div class="overflow-x-auto">
    <table class="min-w-full bg-white-smoke-50 rounded-lg overflow-hidden">
      <thead>
        <tr class="bg-white-smoke-200 text-the-end-800 text-body-sm font-medium">
          <th class="py-4 px-6 text-left">ID</th>
          <th class="py-4 px-6 text-left">Name</th>
          <th class="py-4 px-6 text-left">Slug</th>
          <th class="py-4 px-6 text-left">Projects</th>
          <th class="py-4 px-6 text-left">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-white-smoke-200">
        @forelse($industries as $industry)
          <tr class="hover:bg-white-smoke-100 transition-colors">
            <td class="py-4 px-6 text-body text-the-end-700">{{ $industry->id }}</td>
            <td class="py-4 px-6 text-body text-the-end-800 font-medium">{{ $industry->name }}</td>
            <td class="py-4 px-6 text-body text-the-end-600">{{ $industry->slug }}</td>
            <td class="py-4 px-6 text-body text-the-end-700">{{ $industry->projects_count }}</td>
            <td class="py-4 px-6">
              <div class="flex gap-2">
                <a href="{{ route('admin.industries.edit', $industry->id) }}" class="px-4 py-2 text-body border border-chicken-comb-600/50 text-chicken-comb-700 rounded-full hover:bg-chicken-comb-50 transition-colors">
                  Edit
                </a>
                <form action="{{ route('admin.industries.destroy', $industry->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this industry?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="px-4 py-2 text-body border border-chicken-comb-600/50 text-chicken-comb-700 rounded-full hover:bg-chicken-comb-50 transition-colors">
                    Delete
                  </button>
                </form>
              </div>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5" class="py-12 px-6 text-center">
              <div class="flex flex-col items-center">
                <svg class="w-12 h-12 text-the-end-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
                <p class="text-body text-the-end-600 mb-2">No industries found.</p>
                <p class="text-body-sm text-the-end-500">Get started by creating a new industry.</p>
              </div>
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  
  <div class="mt-6">
    {{ $industries->links() }}
  </div>
</div>
@endsection 