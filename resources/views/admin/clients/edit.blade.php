@extends('layouts.admin')

@section('title', 'Edit Client - ' . $client->name . ' - Festa Design Studio')

@section('header_title', 'Edit Client: ' . $client->name)

@section('action_button')
<div class="flex gap-4">
  <a href="{{ route('client.show', $client->slug) }}" target="_blank">
    <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-pepper-green-600/50 text-the-end-700 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center">
      View Public Profile
    </button>
  </a>
  <a href="{{ route('admin.clients.index') }}">
    <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
      Back to Clients
    </button>
  </a>
</div>
@endsection

@section('content')
  @include('admin.clients._form')
@endsection 