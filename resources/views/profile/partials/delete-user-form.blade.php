<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <div x-data="{ showConfirm: false }">
        <x-core.button 
            variant="primary" 
            type="button"
            class="bg-red-600 hover:bg-red-700 text-white"
            x-on:click="showConfirm = true"
        >{{ __('Delete Account') }}</x-core.button>

        <div x-show="showConfirm" x-cloak class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div x-show="showConfirm" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75" x-on:click="showConfirm = false"></div>
                </div>

                <div x-show="showConfirm" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <form method="post" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('delete')
                        
                        <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                                {{ __('Are you sure you want to delete your account?') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 mb-6">
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                            </p>

                            <div class="mt-6">
                                <x-core.input-label for="password" value="{{ __('Password') }}" />

                                <x-core.text-input
                                    id="password"
                                    name="password"
                                    type="password"
                                    class="mt-1 block w-full"
                                    placeholder="{{ __('Password') }}"
                                    autocomplete="current-password"
                                />

                                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                            </div>
                        </div>

                        <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <x-core.button 
                                type="submit" 
                                variant="primary" 
                                class="bg-red-600 hover:bg-red-700 text-white w-full sm:ml-3 sm:w-auto"
                            >
                                {{ __('Delete Account') }}
                            </x-core.button>
                            
                            <x-core.button 
                                type="button" 
                                variant="secondary" 
                                class="mt-3 w-full sm:mt-0 sm:w-auto"
                                x-on:click="showConfirm = false"
                            >
                                {{ __('Cancel') }}
                            </x-core.button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
