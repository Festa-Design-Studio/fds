@extends('layouts.admin')

@section('title', 'Manage Team Members')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-h2 font-semibold text-the-end-900">Manage Team Members</h1>
        <x-core.button
            href="{{ route('admin.about.team.create') }}"
            variant="secondary"
            size="medium"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Add Team Member
        </x-core.button>
    </div>

    @if(session('success'))
        <div class="bg-leaf-100 border-l-4 border-leaf-500 text-leaf-700 p-4 mb-6 rounded" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if(count($teamMembers) > 0)
        <div class="overflow-x-auto border border-white-smoke-200 sm:rounded-lg bg-white shadow">
            <table class="min-w-full divide-y divide-white-smoke-200">
                <thead class="bg-white-smoke-100">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-the-end-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-the-end-500 uppercase tracking-wider">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-the-end-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-the-end-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-white-smoke-200">
                    @foreach($teamMembers as $teamMember)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    @if($teamMember->avatar)
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('storage/' . $teamMember->avatar) }}" alt="{{ $teamMember->name }}">
                                        </div>
                                    @else
                                        <div class="flex-shrink-0 h-10 w-10 bg-the-end-200 rounded-full flex items-center justify-center">
                                            <span class="text-the-end-600 font-medium">{{ substr($teamMember->name, 0, 1) }}</span>
                                        </div>
                                    @endif
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-the-end-900">
                                            {{ $teamMember->name }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-the-end-700">{{ $teamMember->title }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-the-end-700">{{ $teamMember->email ?? 'N/A' }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <div class="flex justify-center space-x-2">
                                    <a 
                                        href="{{ route('about.team.show', $teamMember->slug) }}" 
                                        class="text-chicken-comb-600 hover:text-chicken-comb-900"
                                        target="_blank"
                                        title="View"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </a>
                                    <a 
                                        href="{{ route('admin.about.team.edit', $teamMember->slug) }}" 
                                        class="text-blue-600 hover:text-blue-900"
                                        title="Edit"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </a>
                                    <form 
                                        action="{{ route('admin.about.team.destroy', $teamMember->slug) }}" 
                                        method="POST" 
                                        class="inline"
                                        onsubmit="return confirm('Are you sure you want to delete this team member? This action cannot be undone.')"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-900" title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="bg-white-smoke-50 p-6 rounded-lg border border-white-smoke-200 text-center">
            <p class="text-the-end-600 mb-4">No team members found. Get started by adding your first team member.</p>
            <x-core.button
                href="{{ route('admin.about.team.create') }}"
                variant="secondary"
                size="medium"
            >
                Add Team Member
            </x-core.button>
        </div>
    @endif
</div>
@endsection 