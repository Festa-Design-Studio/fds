@extends('layouts.admin')

@section('title', 'Add Team Member')

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
        <h1 class="text-h2 font-semibold text-the-end-900 mb-6">Add Team Member</h1>

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

        <form action="{{ route('admin.about.team.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.about.team._form')

            <div class="mt-8 flex justify-end">
                <button 
                    type="submit" 
                    class="px-4 py-2 bg-apocalyptic-orange-600 text-white rounded-lg hover:bg-apocalyptic-orange-700 font-medium"
                >
                    Create Team Member
                </button>
            </div>
        </form>
    </div>
</div>
@endsection 