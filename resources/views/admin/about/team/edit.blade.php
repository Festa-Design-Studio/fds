@extends('layouts.admin')

@section('title', 'Edit Team Member')

@section('content')
<div class="p-6">
    <div class="flex items-center mb-6">
        <a 
            href="{{ route('admin.about.team.index') }}" 
            class="px-4 py-2 bg-white-smoke-200 text-the-end-800 rounded-lg hover:bg-white-smoke-300 font-medium flex items-center gap-2"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
            </svg>
            Back to Team Members
        </a>
    </div>

    <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-h2 font-semibold text-the-end-900">Edit Team Member</h1>
            <a 
                href="{{ route('about.team.show', $team_member) }}" 
                target="_blank"
                class="px-4 py-2 bg-white-smoke-200 text-the-end-800 rounded-lg hover:bg-white-smoke-300 font-medium flex items-center gap-2"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                View Profile
            </a>
        </div>

        @if($errors->any())
            <div class="bg-apocalyptic-orange-100 border-l-4 border-apocalyptic-orange-500 text-apocalyptic-orange-700 p-4 mb-6 rounded" role="alert">
                <p class="font-medium">Please fix the following errors:</p>
                <ul class="list-disc ml-5 mt-2">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="bg-leaf-100 border-l-4 border-leaf-500 text-leaf-700 p-4 mb-6 rounded" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.about.team.update', $team_member) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.about.team._form')
        </form>
    </div>
</div>
@endsection 