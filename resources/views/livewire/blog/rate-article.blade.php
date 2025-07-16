<div class="flex flex-col items-center md:items-start w-full">
    <div class="space-y-1 md:text-left text-center">
        <label class="text-the-end-400 text-body-sm">Rate this article</label>
        <div class="flex space-x-0" id="star-rating-{{ $articleId }}">
            @for ($i = 1; $i <= 5; $i++)
                <button 
                    type="button"
                    class="star-button p-1 transition-all duration-200 ease-in-out {{ $hasRated ? 'cursor-default' : ($isLoading ? 'cursor-not-allowed opacity-60' : 'cursor-pointer hover:scale-110') }} {{ ($selectedRating ?? 0) >= $i ? 'text-pepper-green-600' : 'text-the-end-400' }}"
                    wire:click="$call('rate', {{ $i }})"
                    data-rating="{{ $i }}"
                    @if($isLoading) disabled @endif
                >
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </button>
            @endfor
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                initializeStarRating();
            });
            
            function initializeStarRating() {
                const starContainer = document.getElementById('star-rating-{{ $articleId }}');
                if (!starContainer) return;
                
                const starButtons = starContainer.querySelectorAll('.star-button');
                const hasRated = {{ $hasRated ? 'true' : 'false' }};
                const isLoading = {{ $isLoading ? 'true' : 'false' }};
                
                // Only add hover effects if not rated and not loading
                if (!hasRated && !isLoading) {
                    starButtons.forEach((button, index) => {
                        button.addEventListener('mouseenter', function() {
                            if (!button.disabled) {
                                highlightStars(index + 1);
                            }
                        });
                        
                        button.addEventListener('click', function() {
                            if (!button.disabled) {
                                button.classList.add('animate-pulse');
                                setTimeout(() => {
                                    button.classList.remove('animate-pulse');
                                }, 600);
                            }
                        });
                    });
                    
                    starContainer.addEventListener('mouseleave', function() {
                        resetStars();
                    });
                }
                
                function highlightStars(rating) {
                    starButtons.forEach((button, index) => {
                        if (index < rating) {
                            button.classList.remove('text-the-end-400');
                            button.classList.add('text-pepper-green-600');
                        } else {
                            button.classList.remove('text-pepper-green-600');
                            button.classList.add('text-the-end-400');
                        }
                    });
                }
                
                function resetStars() {
                    const selectedRating = {{ $selectedRating ?? 0 }};
                    starButtons.forEach((button, index) => {
                        if (index < selectedRating) {
                            button.classList.remove('text-the-end-400');
                            button.classList.add('text-pepper-green-600');
                        } else {
                            button.classList.remove('text-pepper-green-600');
                            button.classList.add('text-the-end-400');
                        }
                    });
                }
            }
            
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
