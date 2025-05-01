@extends('layouts.admin')

@section('title', 'Manage Sectors - Festa Design Studio')

@section('header_title', 'Manage Sectors')

@section('action_button')
<a href="{{ route('admin.sectors.create') }}">
  <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
    </svg>
    Add New Sector
  </button>
</a>
@endsection

@section('content')
<div class="p-8 bg-white-smoke-100 rounded-lg shadow-sm">
  @if(session('success'))
    <div class="mb-4 p-4 bg-pepper-green-100 border border-pepper-green-300 text-pepper-green-800 rounded-md">
      {{ session('success') }}
    </div>
  @endif
  
  @if(session('error'))
    <div class="mb-4 p-4 bg-chicken-comb-100 border border-chicken-comb-300 text-chicken-comb-800 rounded-md">
      {{ session('error') }}
    </div>
  @endif

  <div class="overflow-x-auto">
    <table class="min-w-full bg-white">
      <thead>
        <tr class="bg-white-smoke-200 text-the-end-700">
          <th class="py-3 px-4 text-left">ID</th>
          <th class="py-3 px-4 text-left">Name</th>
          <th class="py-3 px-4 text-left">Slug</th>
          <th class="py-3 px-4 text-left">Projects</th>
          <th class="py-3 px-4 text-left">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-white-smoke-200">
        @forelse($sectors as $sector)
          <tr class="hover:bg-white-smoke-50">
            <td class="py-3 px-4">{{ $sector->id }}</td>
            <td class="py-3 px-4">{{ $sector->name }}</td>
            <td class="py-3 px-4">{{ $sector->slug }}</td>
            <td class="py-3 px-4">{{ $sector->projects_count }}</td>
            <td class="py-3 px-4 flex space-x-2">
              <a href="{{ route('admin.sectors.edit', $sector->id) }}" class="px-3 py-1 bg-pepper-green-100 text-pepper-green-700 rounded hover:bg-pepper-green-200">
                Edit
              </a>
              <form action="{{ route('admin.sectors.destroy', $sector->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this sector?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-3 py-1 bg-chicken-comb-100 text-chicken-comb-700 rounded hover:bg-chicken-comb-200">
                  Delete
                </button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5" class="py-6 px-4 text-center text-the-end-500">No sectors found.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  
  <div class="mt-4">
    {{ $sectors->links() }}
  </div>
</div>
@endsection 