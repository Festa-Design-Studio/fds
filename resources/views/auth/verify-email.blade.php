<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Verify Email - Festa Design Studio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!--Verify email-->
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
                <h1 class="text-h2 font-bold text-the-end-900">Verify your email</h1>
                <p class="text-body text-the-end-700 mt-2">Please check your email for the verification link we sent you</p>
            </div>
            
            <!-- Session Status -->
            @if (session('status') === 'verification-link-sent')
                <div class="bg-pepper-green-50 p-4 rounded-md text-pepper-green-700 text-body-sm">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif
            
            <div class="text-center space-y-4">
                <p class="text-body text-the-end-700">Didn't receive the email?</p>
                
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <!-- Large Primary Button -->
                    <button
                    type="submit" 
                    class="w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
                    Resend verification email
                </button>
                </form>
                
                <form method="POST" action="{{ route('logout') }}" class="mt-4">
                    @csrf
                    <div class="text-center">
                        <button type="submit" class="text-body-sm text-pepper-green-600 hover:text-pepper-green-700">
                            Log Out
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
