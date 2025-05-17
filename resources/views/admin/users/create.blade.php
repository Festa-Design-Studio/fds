@extends('layouts.admin')

@section('title', 'Create User')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-xl">
    <h1 class="text-2xl font-semibold text-gray-700 mb-6">Create User</h1>
    <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-the-end-700">Name</label>
            <input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ old('name') }}" required>
            @error('name')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-the-end-700">Email</label>
            <input id="email" name="email" type="email" class="mt-1 block w-full" value="{{ old('email') }}" required>
            @error('email')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="title" class="block text-sm font-medium text-the-end-700">Title / Role</label>
            <input id="title" name="title" type="text" class="mt-1 block w-full" value="{{ old('title') }}">
            @error('title')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="profile_photo_path" class="block text-sm font-medium text-the-end-700">Profile Photo (Avatar)</label>
            <input id="profile_photo_path" name="profile_photo_path" type="file" class="mt-1 block w-full" accept="image/*">
            @error('profile_photo_path')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-the-end-700">Password</label>
            <input id="password" name="password" type="password" class="mt-1 block w-full" required>
            @error('password')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-the-end-700">Confirm Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" required>
        </div>
        <div class="flex items-center gap-4">
            <button type="submit" class="px-6 py-2 bg-chicken-comb-600 text-white rounded-full hover:bg-chicken-comb-700">Create</button>
            <a href="{{ route('admin.users') }}" class="px-6 py-2 border border-gray-300 rounded-full text-gray-700 hover:bg-gray-100">Cancel</a>
        </div>
    </form>
</div>
@endsection 