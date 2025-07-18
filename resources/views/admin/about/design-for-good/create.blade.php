@extends('layouts.admin')

@section('title', 'Add Content Section - Design for Good')

@section('header_title', 'Add Content Section')

@section('action_button')
<div class="flex gap-4">
  <a href="{{ route('admin.about.design-for-good.index') }}">
    <button class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
      Back to Content
    </button>
  </a>
</div>
@endsection

@section('content')
<div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
  
  @if($errors->any())
    <div class="mb-6 p-4 bg-apocalyptic-orange-50 border border-apocalyptic-orange-200 text-apocalyptic-orange-700 rounded-md">
      <p class="font-medium">Please fix the following errors:</p>
      <ul class="list-disc ml-5 mt-2">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('admin.about.design-for-good.store') }}" method="POST">
    @csrf
    
    <!-- Basic Information -->
    <div class="space-y-6">
      <h2 class="text-h3 font-semibold text-the-end-800 border-b border-gray-200 pb-2">Content Section Details</h2>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Section Type -->
        <div>
          <label for="section_key" class="block text-sm font-medium text-the-end-700">Section Type <span class="text-apocalyptic-orange-500">*</span></label>
          <select name="section_key" id="section_key" required class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800">
            <option value="">Select a section type</option>
            @foreach($availableSections as $key => $name)
              <option value="{{ $key }}" {{ old('section_key') === $key ? 'selected' : '' }}>{{ $name }}</option>
            @endforeach
          </select>
          @error('section_key')
            <p class="mt-1 text-sm text-apocalyptic-orange-500">{{ $message }}</p>
          @enderror
        </div>

        <!-- Display Order -->
        <div>
          <label for="display_order" class="block text-sm font-medium text-the-end-700">Display Order <span class="text-apocalyptic-orange-500">*</span></label>
          <input type="number" name="display_order" id="display_order" value="{{ old('display_order', 1) }}" min="0" required class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800">
          @error('display_order')
            <p class="mt-1 text-sm text-apocalyptic-orange-500">{{ $message }}</p>
          @enderror
        </div>

        <!-- Title -->
        <div class="md:col-span-2">
          <label for="title" class="block text-sm font-medium text-the-end-700">Title <span class="text-apocalyptic-orange-500">*</span></label>
          <input type="text" name="title" id="title" value="{{ old('title') }}" required class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800">
          @error('title')
            <p class="mt-1 text-sm text-apocalyptic-orange-500">{{ $message }}</p>
          @enderror
        </div>

        <!-- Subtitle -->
        <div class="md:col-span-2">
          <label for="subtitle" class="block text-sm font-medium text-the-end-700">Subtitle</label>
          <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle') }}" class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800">
          @error('subtitle')
            <p class="mt-1 text-sm text-apocalyptic-orange-500">{{ $message }}</p>
          @enderror
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="mt-8 space-y-6">
      <h2 class="text-h3 font-semibold text-the-end-800 border-b border-gray-200 pb-2">Content</h2>
      
      <div>
        <label for="description" class="block text-sm font-medium text-the-end-700">Description</label>
        <textarea name="description" id="description" rows="4" class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800">{{ old('description') }}</textarea>
        @error('description')
          <p class="mt-1 text-sm text-apocalyptic-orange-500">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <!-- Settings -->
    <div class="mt-8 space-y-6">
      <h2 class="text-h3 font-semibold text-the-end-800 border-b border-gray-200 pb-2">Settings</h2>
      
      <div>
        <label class="flex items-center">
          <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} class="rounded border-white-smoke-300 text-apocalyptic-orange-600 shadow-sm focus:ring-apocalyptic-orange-500">
          <span class="ml-2 text-sm text-the-end-700">Active (visible on website)</span>
        </label>
        @error('is_active')
          <p class="mt-1 text-sm text-apocalyptic-orange-500">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <!-- Submit Button -->
    <div class="mt-8 flex justify-end space-x-4">
      <a href="{{ route('admin.about.design-for-good.index') }}" class="px-6 py-3 text-body border border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 transition-colors">
        Cancel
      </a>
      <button type="submit" class="px-6 py-3 text-body bg-pepper-green-600 text-white-smoke rounded-full hover:bg-pepper-green-700 transition-colors">
        Create Section
      </button>
    </div>
  </form>

</div>
@endsection