@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-h2 font-bold text-the-end-900">Testimonials</h1>
            <x-core.button 
                :href="route('admin.work.testimonials.create')" 
                variant="secondary" 
                size="large"
            >
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"/>
                </svg>
                Add New Testimonial
            </x-core.button>
        </div>

        @if(session('success'))
            <div class="bg-pepper-green-100 border border-pepper-green-400 text-pepper-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-white rounded-lg shadow overflow-x-auto">
            <table class="min-w-full divide-y divide-the-end-200 whitespace-nowrap">
                <thead class="bg-the-end-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-the-end-500 uppercase tracking-wider">Author</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-the-end-500 uppercase tracking-wider">Quote</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-the-end-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-the-end-500 uppercase tracking-wider">Order</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-the-end-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-the-end-200">
                    @forelse($testimonials as $testimonial)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    @if($testimonial->author_avatar)
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="{{ Storage::url($testimonial->author_avatar) }}" alt="{{ $testimonial->author_name }}">
                                        </div>
                                    @endif
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-the-end-900">{{ $testimonial->author_name }}</div>
                                        <div class="text-sm text-the-end-500">{{ $testimonial->author_title }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-the-end-900 max-w-xs truncate">{{ $testimonial->quote }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $testimonial->published ? 'bg-pepper-green-100 text-pepper-green-800' : 'bg-the-end-100 text-the-end-800' }}">
                                    {{ $testimonial->published ? 'Published' : 'Draft' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-the-end-500">
                                {{ $testimonial->display_order }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex space-x-3">
                                    <x-core.button 
                                        :href="route('admin.work.testimonials.edit', $testimonial)" 
                                        variant="secondary" 
                                        size="small"
                                    >
                                        Edit
                                    </x-core.button>
                                    <form action="{{ route('admin.work.testimonials.destroy', $testimonial) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <x-core.button 
                                            type="submit" 
                                            variant="secondary" 
                                            size="small"
                                            onclick="return confirm('Are you sure you want to delete this testimonial?')"
                                        >
                                            Delete
                                        </x-core.button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm text-the-end-500 text-center">
                                No testimonials found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $testimonials->links() }}
        </div>
    </div>
@endsection 