@extends('layouts.admin')

@section('title', 'Work Metrics - Admin Dashboard')

@section('header_title', 'Work Metrics')

@section('action_button')
    <x-core.button variant="primary" :href="route('admin.work.metrics.create')">
        Add New Metric
    </x-core.button>
@endsection

@section('content')
    <div class="space-y-6">
        @if(session('success'))
            <div class="bg-pepper-green-50 text-pepper-green-700 p-4 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-lg shadow">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-the-end-200">
                    <thead class="bg-white-smoke-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-body-sm font-semibold text-the-end-500">
                                Value
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-body-sm font-semibold text-the-end-500">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-body-sm font-semibold text-the-end-500">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-body-sm font-semibold text-the-end-500">
                                Order
                            </th>
                            <th scope="col" class="px-6 py-3 text-right text-body-sm font-semibold text-the-end-500">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-the-end-200">
                        @forelse($metrics as $metric)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-body-sm text-the-end-900">
                                    <span class="{{ $metric->color_class }}">{{ $metric->value }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-body-sm text-the-end-900">
                                    {{ $metric->title }}
                                </td>
                                <td class="px-6 py-4 text-body-sm text-the-end-700">
                                    {{ Str::limit($metric->description, 50) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-body-sm text-the-end-900">
                                    {{ $metric->display_order }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-body-sm font-medium">
                                    <div class="flex justify-end space-x-3">
                                        <a href="{{ route('admin.work.metrics.edit', $metric) }}" class="text-pepper-green-600 hover:text-pepper-green-900">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.work.metrics.destroy', $metric) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-900" onclick="return confirm('Are you sure you want to delete this metric?')">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-center text-body-sm text-the-end-500">
                                    No metrics found. <a href="{{ route('admin.work.metrics.create') }}" class="text-pepper-green-600 hover:text-pepper-green-900">Add one now</a>.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection 