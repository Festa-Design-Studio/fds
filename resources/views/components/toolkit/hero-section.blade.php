<!-- Toolkit Hero section -->
<section class="bg-white-smoke-50 py-16 px-4 md:px-8 lg:px-16">
  <div class="max-w-4xl mx-auto">
    <div class="space-y-12">
      <!--Eyebrow, Toolkit Hero Headline and Subheadline-->
      <div class="text-center space-y-6">
        <span
          class="text-body-sm text-chicken-comb-600 uppercase tracking-wider"
          >Design Toolkit Library</span
        >
        <h1 class="text-h1 font-black text-the-end-900">
          Essential tools for Nonprofits 📝 and Startups 🚀
        </h1>
        <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
          Access our weekly curated collection of design resources to elevate
          your workflow
        </p>
      </div>

      <!--Signup for Toolkit-->
      <div
        id="toolkit-newsletter"
        class="bg-gradient-to-r from-chicken-comb-100 via-apocalyptic-orange-100 to-pot-of-gold-100 border border-white-smoke-300 p-10 rounded-2xl"
      >
        <div class="text-center mb-8">
          <h2 class="text-h2 font-bold text-pepper-green mb-2">
            Never miss new tools
          </h2>
          <p class="text-body text-the-end-700">
            Get updates on the latest design resources.
          </p>
        </div>

        <!-- Sign up for tools -->
        <form action="{{ route('newsletter.subscribe') }}" method="POST" class="max-w-lg mx-auto">
          @csrf
          
          <div class="flex flex-col sm:flex-row gap-4">
            <input
              type="email"
              name="email"
              value="{{ old('email') }}"
              required
              class="w-full h-[48px] px-6 py-3 rounded-full border-2 border-pepper-green-600/50 focus:ring-1 focus:ring-pepper-green-300 focus:border-pepper-green-600 hover:bg-pepper-green-50 focus:ring-offset-1 outline-none transition-all duration-150"
              placeholder="Enter your email..."
            />

            <button
              type="submit"
              class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-pepper-green-600/50 bg-pepper-green-600 text-white-smoke rounded-full hover:bg-pepper-green-700 active:bg-pepper-green-700 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center"
            >
              Subscribe
            </button>
          </div>
          <p class="text-body-sm text-the-end-700/80 text-center mt-4">
            We'll send you one email per week. 
            <a href="#" 
               onclick="document.getElementById('unsubscribe-form').classList.toggle('hidden'); return false;" 
               class="underline hover:text-pepper-green-600 transition-colors">
               Unsubscribe
            </a> anytime.
          </p>
        </form>
        
        <!-- Newsletter Messages -->
        @if(session('newsletter_success'))
            <div class="mt-4 p-3 mx-auto bg-pepper-green-50 border border-pepper-green-200 rounded-lg text-pepper-green-800 text-body-sm text-center">
                {{ session('newsletter_success') }}
            </div>
        @endif
        
        @if(session('newsletter_error'))
            <div class="mt-4 p-3 bg-chicken-comb-50 border border-chicken-comb-200 rounded-lg text-chicken-comb-800 text-body-sm text-center">
                {{ session('newsletter_error') }}
            </div>
        @endif
        
        @if(session('newsletter_info'))
            <div class="mt-4 p-3 bg-apocalyptic-orange-50 border border-apocalyptic-orange-200 rounded-lg text-apocalyptic-orange-800 text-body-sm text-center">
                {{ session('newsletter_info') }}
            </div>
        @endif
        
        @error('email')
            <div class="mt-4 p-3 bg-chicken-comb-50 border border-chicken-comb-200 rounded-lg text-chicken-comb-800 text-body-sm text-center">
                {{ $message }}
            </div>
        @enderror
        
        <!-- Unsubscribe Form (Hidden by default) -->
        <div id="unsubscribe-form" class="hidden mt-6 p-4 bg-white-smoke-50 rounded-lg">
            <h3 class="text-h5 font-semibold text-the-end-900 mb-3 text-center">Unsubscribe from Newsletter</h3>
            <form action="{{ route('newsletter.unsubscribe') }}" method="POST" class="max-w-lg mx-auto">
                @csrf
                
                <div class="flex flex-col sm:flex-row gap-3">
                    <input
                        type="email"
                        name="email"
                        required
                        class="w-full h-[42px] px-4 py-2 rounded-full border-2 border-the-end-300 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-white-smoke-100 focus:ring-offset-1 outline-none transition-all duration-150 text-sm"
                        placeholder="Enter your email to unsubscribe..."
                    />
                    
                    <button
                        type="submit"
                        class="lg:w-auto md:w-auto w-full px-5 py-2 text-body h-[42px] border-2 border-chicken-comb-600/50 bg-chicken-comb-600 text-white-smoke rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-700 transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 inline-flex items-center justify-center"
                    >
                        Unsubscribe
                    </button>
                </div>
                
                <p class="text-body-sm text-the-end-600 text-center mt-3">
                    We're sorry to see you go! Enter your email to unsubscribe.
                </p>
            </form>
        </div>
      </div>
    </div>
  </div>
</section> 