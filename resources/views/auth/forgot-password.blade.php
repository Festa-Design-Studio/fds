<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Forgot Password - Festa Design Studio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!--Forgot password-->
    <section class="min-h-screen bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100 py-12 px-4 flex items-center justify-center">
        <div class="max-w-md w-full bg-white-smoke-50 rounded-2xl shadow-xl p-8 space-y-6">
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
            
            <div class="text-center">
                <h1 class="text-h2 font-bold text-the-end-900">Forgot Password?</h1>
                <p class="text-body text-the-end-700 mt-2">Enter your email to reset your password</p>
            </div>
            
            <!-- Session Status -->
            @if (session('status'))
                <div class="bg-pepper-green-50 p-4 rounded-md text-pepper-green-700 text-body-sm">
                    {{ session('status') }}
                </div>
            @endif
            
            <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                @csrf
                
                <div class="space-y-2">
                    <label for="email" class="text-the-end-900 text-body-sm font-medium">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md 
                        text-the-end-900 placeholder-the-end-400
                        focus:ring-2 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
                        hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
                        placeholder="Enter your email"
                    >
                    @error('email')
                        <p class="text-red-600 text-body-xs">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Large Primary Reset password Button -->
                <button
                    type="submit" 
                    class="w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
                    Email Password Reset Link
                </button>
            
                <div class="text-center">
                    <a href="{{ route('login') }}" class="text-body-sm text-pepper-green-600 hover:text-pepper-green-700">Back to Login</a>
                </div>
            </form>
        </div>
    </section>
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
