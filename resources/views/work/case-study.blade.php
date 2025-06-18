@extends('layouts.app')

@section('title', 'Case Study Template')
@section('description', 'A template page for case studies')

@section('content')
<div class="bg-white">
    <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
        <div class="relative isolate overflow-hidden bg-gray-900 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
            <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Case Study Template</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">
                    This is a template page for case studies. This route exists but currently shows placeholder content.
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                    <a href="{{ route('work') }}" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        View Our Work
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection