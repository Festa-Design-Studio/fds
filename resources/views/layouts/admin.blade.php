<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard - Festa Design Studio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100 min-h-screen py-12 px-4 md:px-8 lg:px-16">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white-smoke-50 rounded-2xl shadow-xl overflow-hidden">
                <!-- Header -->
                <div class="p-6 md:p-8 border-b border-the-end-200">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                        <div class="flex items-center gap-4">
                            <svg class="h-9 w-auto" viewBox="0 0 16 14.75" preserveAspectRatio="xMidYMid meet">
                                <g fill="#e12729">
                                    <defs></defs>
                                    <path class="cls-1"
                                        d="M15,3.57V1.02H.98v12.74h2.55v-5.1h1.27v5.1h10.19v-7.64h-2.55v-2.55h2.55ZM4.8,6.12h-1.27v-2.55h1.27v2.55ZM8.94,6.12v5.1h-1.59V3.57h1.59v2.55ZM12.45,11.21h-.96v-2.55h.96v2.55Z"
                                        fill="#e12729"></path>
                                </g>
                            </svg>
                            <h2 class="text-h2 font-bold text-the-end-900">@yield('header_title', 'Welcome to Festa\'s administrator')</h2>
                        </div>
                        @yield('action_button')
                    </div>
                </div>
      
                <!-- Admin Dashboard Main Content layout -->
                <div class="grid md:grid-cols-12 divide-y md:divide-y-0 md:divide-x divide-the-end-200">
                    <!-- Admin Sidebar Navigation -->
                    <div class="md:col-span-3 p-6">
                        <x-core.admin-sidebar />
                    </div>
      
                    <!-- Admin Dashboard Main Content area-->
                    <div class="md:col-span-9 p-6">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @yield('scripts')
</body>
</html> 