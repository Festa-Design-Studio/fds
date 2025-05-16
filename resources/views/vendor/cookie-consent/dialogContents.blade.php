<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2 z-50">
    <div class="max-w-3xl mx-auto px-8">
        <div class="p-4 md:p-2 rounded-lg bg-pot-of-gold-400/50">
            <div class="flex items-center justify-between flex-wrap">
                <div class="max-w-full flex-1 items-center md:w-0 md:inline">
                    <p class="md:ml-3 text-black cookie-consent__message text-the-end-700 text-body-sm">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto flex flex-col sm:flex-row gap-2">
                    <x-core.button 
                        class="js-cookie-consent-agree cookie-consent__agree"
                        size="small"
                        variant="secondary"
                    >
                        {{ trans('cookie-consent::texts.agree') }}
                    </x-core.button>
                    <x-core.button 
                        class="js-cookie-consent-decline cookie-consent__decline"
                        size="small"
                        variant="neutral"
                    >
                        Decline
                    </x-core.button>
                </div>
            </div>
        </div>
    </div>
</div>
