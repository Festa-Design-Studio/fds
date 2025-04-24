<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Festa Design Studio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Login Form Section Container with Background Gradient -->
    <section class="min-h-screen bg-gradient-to-br from-pepper-green-50 via-leaf-50 to-chicken-comb-50 py-12 px-4 flex items-center justify-center">
        <!-- Login Form Card Container -->
        <div class="max-w-md w-full bg-white-smoke-50 rounded-2xl shadow-xl p-8 space-y-6">
            <!-- Logo Container -->
            <div class="flex justify-center mb-8">
                <svg class=" h-20 w-auto" viewBox="0 0 16 14.75" preserveAspectRatio="xMidYMid meet">
                    <g fill="#e12729">
                        <defs></defs>
                        <path class="cls-1"
                            d="M15,3.57V1.02H.98v12.74h2.55v-5.1h1.27v5.1h10.19v-7.64h-2.55v-2.55h2.55ZM4.8,6.12h-1.27v-2.55h1.27v2.55ZM8.94,6.12v5.1h-1.59V3.57h1.59v2.55ZM12.45,11.21h-.96v-2.55h.96v2.55Z"
                            fill="#e12729"></path>
                    </g>
                </svg>
            </div>
            
            <!-- Welcome Text Container -->
            <div class="text-center">
                <h1 class="text-h2 font-bold text-the-end-900">Welcome Back</h1>
                <p class="text-body text-the-end-700 mt-2">Sign in to your admin dashboard</p>
            </div>
            
            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Session Status -->
                @if (session('status'))
                    <div class="bg-pepper-green-50 p-4 rounded-md text-pepper-green-700 text-body-sm">
                        {{ session('status') }}
                    </div>
                @endif
                
                <!-- Email Input Group -->
                <div class="space-y-2">
                    <label for="email" class="text-the-end-900 text-body-sm font-medium">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                        class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md 
                        text-the-end-900 placeholder-the-end-400
                        focus:ring-2 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
                        hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50
                        disabled:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed"
                        placeholder="Enter your email"
                    >
                    @error('email')
                        <p class="text-red-600 text-body-xs">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Password Input Group -->
                <div class="space-y-2">
                    <label for="password" class="text-the-end-900 text-body-sm font-medium">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" required autocomplete="current-password"
                            class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md 
                            text-the-end-900 placeholder-the-end-400
                            focus:ring-2 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
                            hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
                            placeholder="Enter your password"
                        >
                        <!-- Password Visibility Toggle Button -->
                        <button type="button" class="absolute inset-y-0 right-0 px-3 text-the-end-400 hover:text-the-end-600" x-data="{showPassword: false}" @click="showPassword = !showPassword; $el.previousElementSibling.type = showPassword ? 'text' : 'password'">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-red-600 text-body-xs">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Remember Me and Forgot Password Row -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" id="remember_me" name="remember"
                            class="w-4 h-4 border-the-end-200 text-pepper-green-600 
                            focus:ring-pepper-green-300 hover:border-pepper-green-500"
                        >
                        <span class="text-the-end-900 text-body-sm">Remember me</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="text-body-sm text-pepper-green-600 hover:text-pepper-green-700">Forgot password?</a>
                </div>
                <!-- Large Primary Submit Button -->
                <button 
                type="submit" 
                    class="w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
                Sign in
                </button>
    
                <!-- Sign Up Link -->
                <div class="text-center">
                    <span class="text-body-sm text-the-end-700">Don't have an account?</span>
                    <a href="{{ route('register') }}" class="text-body-sm text-pepper-green-600 hover:text-pepper-green-700 ml-1">Sign up</a>
                </div>
            </form>
        </div>
    </section>
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
