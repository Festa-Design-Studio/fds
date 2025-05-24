<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Festa Design Studio')</title>
    <meta name="description" content="@yield('meta_description', 'Festa Design Studio')">
    @stack('meta')
    @vite([
        'resources/css/app.css', 
        'resources/css/toolkit-filters.css',
        'resources/css/festa-rich-text-editor.css',
        'resources/js/app.js', 
        'resources/js/toolkit-filter.js',
        'resources/js/mobile.js'
    ])
    @livewireStyles
</head>
<body class="bg-white-smoke-50">
    <!-- Header -->
    <x-core.header />

    <!-- Breadcrumbs -->
    @yield('breadcrumbs')
    
    <!-- Main Content -->
    <main class="">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <x-core.footer />
    
    @include('cookie-consent::index')
    <script>
        document.addEventListener('laravelCookieConsentAccepted', function () {
            // Load Google Analytics script dynamically
            var gaScript = document.createElement('script');
            gaScript.async = true;
            gaScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX'; // Replace with your GA4 Measurement ID
            document.head.appendChild(gaScript);

            // Initialize GA4 after script loads
            gaScript.onload = function() {
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                window.gtag = gtag;
                gtag('js', new Date());
                gtag('config', 'G-XXXXXXXXXX'); // Replace with your GA4 Measurement ID
            };
        });
    </script>
    @livewireScripts
    @stack('scripts')
</body>
</html>
