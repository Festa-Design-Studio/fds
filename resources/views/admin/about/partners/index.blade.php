@extends('layouts.admin')

@section('title', 'Manage Partners')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-h2 font-semibold text-the-end-900">Manage Partners</h1>
        <x-core.button
            href="{{ route('admin.about.partners.create') }}"
            variant="secondary"
            size="medium"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Add Partner
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

    @if(count($partners) > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($partners as $partner)
                <div class="bg-white border border-white-smoke-200 rounded-lg p-6 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            Partner
                        </span>
                        <div class="flex items-center space-x-1">
                            @if($partner->is_active)
                                <span class="w-2 h-2 bg-leaf-500 rounded-full"></span>
                                <span class="text-xs text-leaf-600">Active</span>
                            @else
                                <span class="w-2 h-2 bg-the-end-300 rounded-full"></span>
                                <span class="text-xs text-the-end-500">Inactive</span>
                            @endif
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        @if($partner->logo_path)
                            <div class="w-20 h-16 mx-auto mb-3 bg-white rounded-lg flex items-center justify-center border border-white-smoke-200 p-2">
                                <img src="{{ asset('storage/' . $partner->logo_path) }}" alt="{{ $partner->name }} logo" class="max-w-full max-h-full object-contain" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="w-full h-full bg-white-smoke-200 rounded-lg items-center justify-center hidden">
                                    <span class="text-white-smoke-400 text-xs">No Logo</span>
                                </div>
                            </div>
                        @else
                            <div class="w-20 h-16 mx-auto mb-3 bg-white-smoke-200 rounded-lg flex items-center justify-center">
                                <span class="text-white-smoke-400 text-xs">No Logo</span>
                            </div>
                        @endif
                        <h3 class="text-sm font-semibold text-the-end-900 mb-1">{{ $partner->name }}</h3>
                        @if($partner->description)
                            <p class="text-xs text-the-end-600 line-clamp-2">{{ Str::limit($partner->description, 60) }}</p>
                        @endif
                        @if($partner->website_url)
                            <a href="{{ $partner->website_url }}" target="_blank" class="text-xs text-chicken-comb-600 hover:text-chicken-comb-700 mt-1 inline-block">
                                Visit Website
                            </a>
                        @endif
                    </div>

                    <div class="flex justify-center space-x-2">
                        <a href="{{ route('admin.about.partners.edit', $partner) }}" class="text-blue-600 hover:text-blue-900 p-1" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </a>
                        <form action="{{ route('admin.about.partners.destroy', $partner) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this partner? This action cannot be undone.')">
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
                Showing {{ count($partners) }} partner{{ count($partners) !== 1 ? 's' : '' }}
            </p>
        </div>
    @else
        <div class="bg-white-smoke-50 p-6 rounded-lg border border-white-smoke-200 text-center">
            <div class="max-w-md mx-auto">
                <svg class="mx-auto h-12 w-12 text-white-smoke-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                </svg>
                <h3 class="text-lg font-medium text-the-end-900 mb-2">No partners found</h3>
                <p class="text-the-end-600 mb-4">Get started by adding your first partner organization to display on the about page.</p>
                <x-core.button
                    href="{{ route('admin.about.partners.create') }}"
                    variant="secondary"
                    size="medium"
                >
                    Add Partner
                </x-core.button>
            </div>
        </div>
    @endif
</div>
@endsection 