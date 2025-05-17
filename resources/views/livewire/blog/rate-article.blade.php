<div>
    <div class="space-y-1 md:text-left text-center">
        <label class="text-the-end-400 text-body-sm">Rate this article</label>
        <div class="flex space-x-0">
            @for ($i = 1; $i <= 5; $i++)
                <button 
                    type="button"
                    class="p-1 text-the-end-400 hover:text-pepper-green-600 {{ ($selectedRating ?? 0) >= $i ? 'text-yellow-400' : '' }}"
                    wire:click="$call('rate', {{ $i }})"
                    @if($hasRated) disabled @endif
                >
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </button>
            @endfor
        </div>
        <div class="text-sm mt-2">
            {{-- Removed average and count display --}}
        </div>
        <script>
            window.addEventListener('rating-success', () => {
                if (window.Livewire) {
                    Livewire.dispatch('toast', { message: 'Thank you for rating!' });
                } else {
                    alert('Thank you for rating!');
                }
            });
        </script>
    </div>
</div>
