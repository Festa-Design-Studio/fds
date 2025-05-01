<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Festa Design Studio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/mobile.js'])
</head>
<body class="bg-white-smoke-50">
    <!-- Header -->
    <x-core.header />

    <!-- Breadcrumbs -->
    @yield('breadcrumbs')
    
    <!-- Main Content -->
    <main class="bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <x-core.footer />
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Scripts Stack -->
    @stack('scripts')
</body>
</html>
