@props([
    'title' => 'Get in Touch',
    'subtitle' => 'Have a project in mind? Let\'s collaborate to turn your vision into reality.',
])

<section class="py-16 bg-white-smoke-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-h2 font-semibold text-the-end-900 mb-4">{{ $title }}</h2>
                <p class="text-body-lg text-the-end-700">{{ $subtitle }}</p>
            </div>
            
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <x-core.text-input 
                        name="name"
                        label="Your Name"
                        placeholder="John Doe"
                        required
                    />
                    
                    <x-core.text-input 
                        name="email"
                        label="Email Address"
                        type="email"
                        placeholder="john@example.com"
                        required
                    />
                </div>
                
                <x-core.select 
                    name="service" 
                    label="Service Interested In"
                    placeholder="Choose a service"
                    required
                >
                    <option value="branding">Branding</option>
                    <option value="web-design">Web Design</option>
                    <option value="development">Development</option>
                    <option value="marketing">Digital Marketing</option>
                    <option value="other">Other</option>
                </x-core.select>
                
                <div class="space-y-2">
                    <label for="message" class="text-the-end-900 text-body-sm font-medium">Your Message</label>
                    <textarea 
                        id="message" 
                        name="message" 
                        rows="5" 
                        placeholder="Tell us about your project..."
                        class="w-full px-4 py-3 bg-white-smoke-50 border border-the-end-200 rounded-xl text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 outline-chicken-comb-600"
                        required
                    ></textarea>
                </div>
                
                <div class="flex justify-end">
                    <x-core.button 
                        type="submit" 
                        variant="primary" 
                        size="large"
                    >
                        Send Message
                    </x-core.button>
                </div>
            </form>
        </div>
    </div>
</section> 