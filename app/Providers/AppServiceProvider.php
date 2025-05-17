<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // We'll use direct routes instead for handling Livewire assets
        // if(config('app.env') !== 'production') {
        //     Livewire::setScriptRoute(function ($handle) {
        //         return route('livewire.js', $handle);
        //     });
        // }
    }
}
