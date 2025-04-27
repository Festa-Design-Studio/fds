@extends('layouts.app')

@section('title', 'Talk to Festa - Festa Design Studio')

@section('breadcrumbs')
    <!-- Breadcrumb navigation -->
    <x-core.breadcrumbs :items="[
        ['label' => 'Contact', 'url' => '/contact'],
        ['label' => 'Talk to Festa', 'url' => '']
    ]" />
@endsection

@section('content')
<div class="container mx-auto px-4 py-12 md:py-16 lg:py-20">
    <div class="max-w-2xl mx-auto">
        <x-contact.talk-to-festa-form access_key="9e78fe8d-0945-41da-851e-7be12cc06087" />
    </div>
</div>
@endsection 