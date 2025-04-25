@extends('layouts.admin')

@section('title', 'Create New Client - Festa Design Studio')

@section('header_title', 'Create New Client')

@section('action_button')
<a href="{{ route('admin.clients.index') }}">
  <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
    Back to Clients
  </button>
</a>
@endsection

@section('content')
  @include('admin.clients._form')
@endsection 