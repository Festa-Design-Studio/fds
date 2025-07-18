@extends('layouts.admin')

@section('title', 'Users - Festa Design Studio')

@section('header_title', 'Users')

@section('action_button')
<a href="{{ route('admin.users.create') }}">
  <button class="lg:w-auto md:w-auto w-full px-6 py-3 border-2 text-body-lg text-the-end-700 border-pepper-green-600/50 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2">
    Create User
  </button>
</a>
@endsection

@section('content')
<div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    {{-- Session Success Message --}}
    @if(session('success'))
      <div class="mb-4 p-4 bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 rounded-lg">
        {{ session('success') }}
      </div>
    @endif

    {{-- No results message --}}
    @php $users = $users ?? \App\Models\User::all(); @endphp
    @if($users->isEmpty())
      <div class="flex justify-center p-8">
        <p class="text-the-end-600">No users found.</p>
      </div>
    @else
      <div class="overflow-x-auto bg-white-smoke-50 rounded-lg border border-white-smoke-300">
        <table class="min-w-full">
          <thead class="bg-white-smoke-100 border-b border-white-smoke-300">
            <tr>
              <th class="px-6 py-4 text-left text-body-sm font-medium text-the-end-700 uppercase tracking-wider">Avatar</th>
              <th class="px-6 py-4 text-left text-body-sm font-medium text-the-end-700 uppercase tracking-wider">Name</th>
              <th class="px-6 py-4 text-left text-body-sm font-medium text-the-end-700 uppercase tracking-wider">Email</th>
              <th class="px-6 py-4 text-left text-body-sm font-medium text-the-end-700 uppercase tracking-wider">Title</th>
              <th class="px-6 py-4 text-right text-body-sm font-medium text-the-end-700 uppercase tracking-wider">Actions</th>
            </tr>
          </thead>
          <tbody class="bg-white-smoke-50 divide-y divide-white-smoke-300">
            @foreach($users as $user)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  @if($user->profile_photo_path)
                    <img src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="{{ $user->name }}" class="h-10 w-10 rounded-full object-cover">
                  @else
                    <span class="inline-block h-10 w-10 rounded-full bg-the-end-200 flex items-center justify-center text-the-end-600 font-medium">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                  @endif
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm font-medium text-the-end-900">{{ $user->name }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-the-end-700">{{ $user->email }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-the-end-700">{{ $user->title }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right">
                  <a href="{{ route('admin.users.edit', $user->id) }}" class="p-2 text-pepper-green-600 hover:bg-pepper-green-50 rounded-lg transition-colors">Edit</a>
                  <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this user?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="p-2 text-chicken-comb-600 hover:bg-chicken-comb-50 rounded-lg transition-colors">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{-- Pagination or count can go here if available --}}
      {{-- <div class="flex justify-between items-center mt-6">
        <p class="admin-count-display text-the-end-600">
          Showing users from the total of {{ $users->count() }} users
        </p>
      </div> --}}
    @endif
</div>
@endsection 