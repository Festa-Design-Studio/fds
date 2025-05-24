@extends('layouts.admin')

@section('title', 'Manage SDG Goals')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-h2 font-semibold text-the-end-900">Manage SDG Goals</h1>
        <x-core.button
            href="{{ route('admin.about.sdg.create') }}"
            variant="secondary"
            size="medium"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Add SDG Goal
        </x-core.button>
    </div>

    @if(session('success'))
        <div class="bg-leaf-100 border-l-4 border-leaf-500 text-leaf-700 p-4 mb-6 rounded" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-apocalyptic-orange-100 border-l-4 border-apocalyptic-orange-500 text-apocalyptic-orange-700 p-4 mb-6 rounded" role="alert">
            {{ session('error') }}
        </div>
    @endif

    @if(count($sdgs) > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($sdgs as $sdg)
                <div class="bg-white border border-white-smoke-200 rounded-lg p-6 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-chicken-comb-100 text-chicken-comb-800">
                            SDG {{ $sdg->number }}
                        </span>
                        <div class="flex items-center space-x-1">
                            @if($sdg->is_active)
                                <span class="w-2 h-2 bg-leaf-500 rounded-full"></span>
                                <span class="text-xs text-leaf-600">Active</span>
                            @else
                                <span class="w-2 h-2 bg-the-end-300 rounded-full"></span>
                                <span class="text-xs text-the-end-500">Inactive</span>
                            @endif
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        @if($sdg->svg_path)
                            <img src="{{ asset('storage/' . $sdg->svg_path) }}" alt="SDG {{ $sdg->number }}" class="w-16 h-16 mx-auto mb-2" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="w-16 h-16 mx-auto mb-2 bg-white-smoke-200 rounded-lg items-center justify-center hidden">
                                <span class="text-white-smoke-400 text-xs">No Icon</span>
                            </div>
                        @else
                            <div class="w-16 h-16 mx-auto mb-2 bg-white-smoke-200 rounded-lg flex items-center justify-center">
                                <span class="text-white-smoke-400 text-xs">No Icon</span>
                            </div>
                        @endif
                        <h3 class="text-sm font-semibold text-the-end-900 mb-1">{{ $sdg->title }}</h3>
                        @if($sdg->description)
                            <p class="text-xs text-the-end-600 line-clamp-2">{{ Str::limit($sdg->description, 50) }}</p>
                        @endif
                    </div>

                    <div class="flex justify-center space-x-2">
                        <a href="{{ route('admin.about.sdg.edit', $sdg) }}" class="text-blue-600 hover:text-blue-900 p-1" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </a>
                        <form action="{{ route('admin.about.sdg.destroy', $sdg) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this SDG? This action cannot be undone.')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-900 p-1" title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination (if needed) -->
        <div class="mt-8">
            <p class="text-body-sm text-the-end-600">
                Showing {{ count($sdgs) }} SDG goal{{ count($sdgs) !== 1 ? 's' : '' }}
            </p>
        </div>
    @else
        <div class="bg-white-smoke-50 p-6 rounded-lg border border-white-smoke-200 text-center">
            <div class="max-w-md mx-auto">
                <svg class="mx-auto h-12 w-12 text-white-smoke-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                <h3 class="text-lg font-medium text-the-end-900 mb-2">No SDG goals found</h3>
                <p class="text-the-end-600 mb-4">Get started by adding your first SDG goal to display on the about page.</p>
                <x-core.button
                    href="{{ route('admin.about.sdg.create') }}"
                    variant="secondary"
                    size="medium"
                >
                    Add SDG Goal
                </x-core.button>
            </div>
        </div>
    @endif
</div>
@endsection 